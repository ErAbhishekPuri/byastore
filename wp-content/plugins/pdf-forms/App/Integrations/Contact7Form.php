<?php

namespace PdfFormsLoader\Integrations;

use PdfFormsLoader\Core\{CustomRequest, Views, Ui\Select, Ui\Switcher};
use PdfFormsLoader\Services\{FilesService, PdfFillerApiService};

class Contact7Form extends RelationsChecker implements Integration
{
    protected $plugins = ['contact-form-7/wp-contact-form-7.php'];

    const PDF_DEFAULT_NANE = 'pdf';

    protected $lastAttachId = 0;

    public function InitHooks()
    {
       if (!parent::checker()) {
           return false;
       }

       $this->addHooks();

       return $this;
    }

    protected function addHooks() {
        add_filter( 'wpcf7_editor_panels', [&$this, 'addMetaBox'] );
        //add_action( 'wpcf7_before_send_mail', [&$this, 'saveFillable'] );
        add_action( 'wpcf7_after_save', [&$this, 'saveOption'] );
        add_filter( 'wpcf7_form_class_attr', [&$this, 'classAttr'] );
        add_filter('wpcf7_mail_components', [&$this, 'addAttach'], 10, 2);
    }

    public function classAttr( $class ) {
        $class .= ' pdfform-ext-';
        return $class;
    }

    public function saveOption($args) {
        if (!empty($_POST)) {
            update_option( 'cf7_mch_'.$args->id(), CustomRequest::instance()->post('wpcf7-pdfform') );
        }
    }

    /**
     * @param $components
     * @param $contactForm
     * @return mixed
     * @throws \PDFfiller\OAuth2\Client\Provider\Exceptions\InvalidRequestException
     * @throws \PDFfiller\OAuth2\Client\Provider\Exceptions\ResponseException
     * @throws \ReflectionException
     * @throws \PDFfiller\OAuth2\Client\Provider\Exceptions\InvalidQueryException
     */
    public function addAttach($components, $contactForm) {
        $pdffiller = PdfFillerApiService::getInstance();
        $cf7 = $this->getOptions($contactForm->id());

        $submission = \WPCF7_Submission::get_instance();

        $fields = $submission->get_posted_data();

        if ($cf7['enable'] != '0' && !empty($fields)) {
            $templateId = $pdffiller->saveTemplate($cf7['formId'], $fields);
            $pdffiller->addToTemplateNameCurrentDate($templateId);

            if ($cf7['withAttach'] != '0') {
                //$attach = $pdffiller->insertDocumentToMedia($document['id']);
                //$submission->add_uploaded_file( self::PDF_DEFAULT_NANE, $attach['file'] );

                $filesService = new FilesService();
                $filesService->setFileFromPDFFiller($templateId)->removeAfterLoadSite();

                $components['attachments'] = array_merge($components['attachments'], [
                    self::PDF_DEFAULT_NANE => $filesService->getFullPath(),
                ]);
            }
        }

        return $components;
    }

    public function addMetaBox ( $panels ) {
        $new_page = array(
            'PDFForm-extension' => array(
                'title' => __( 'PDFForm', 'contact-form-7' ),
                'callback' => [$this, 'wpcf7AddPdfform']
            )
        );

        $panels = array_merge($panels, $new_page);

        return $panels;
    }

    protected function getOptions($id) {
        $cf7Defaults = ['formId' => 0, 'enable' => 0, 'withAttach' => 0 ];
        $cf7 = get_option( 'cf7_mch_'. $id, $cf7Defaults );
        return array_merge($cf7Defaults, $cf7);
    }

    public function wpcf7AddPdfform($args) {
        $cf7 = $this->getOptions($args->id());

        $enabledSwitcher = new Switcher([
            'label'     => esc_html__( 'Enable PDF', 'pdfforms' ),
            'name'      => 'wpcf7-pdfform[enable]',
            'values'    => ['1' => 'Enabled', '0' => 'Disabled'],
            'value'     => $cf7['enable']
        ]);

        $withAttach = new Switcher([
            'label'     => esc_html__( 'Attach pdf', 'pdfforms' ),
            'name'      => 'wpcf7-pdfform[withAttach]',
            'values'    => ['1' => 'Enabled', '0' => 'Disabled'],
            'value'     => $cf7['withAttach']
        ]);

        $pdfFillerApiService = PdfFillerApiService::getInstance();
        $documents = $pdfFillerApiService->getTemplatesWithCaching();
        $formsSelect = new Select([
            'label'     => esc_html__( 'Choose PDF form', 'pdfforms' ),
            'name'      => 'wpcf7-pdfform[formId]',
            'list'      => $documents,
            'value'     => $cf7['formId']
        ]);

        echo Views::render(
            'integrations/contact-form-7/pdfform-tab.php',
            array(
                'enabledSwitcher'   => $enabledSwitcher->output(),
                'withAttach'   => $withAttach->output(),
                'formsList'         => $formsSelect->output(),
            )
        );

    }
}

