<?php
namespace PdfFormsLoader\Services;

use PdfFormsLoader\Core\CustomRequest;
use PdfFormsLoader\Core\PdfFormsLoader;
use PdfFormsLoader\Core\Ui\FieldsMapper;

class PdfFormsPopupAjaxService
{
    const TEMPLATE_ID_IS_NOT_SET_ERROR = 'templateID is not set';

    public function templateFillableFields()
    {
        $params = CustomRequest::instance()->postOrGet();

        if ($params->get('templateId') && $params->get('postId')) {
            $dictionary = PdfFormsLoader::$PDFFillerModel->getFillableFields($params->get('templateId'));
            $fieldsMapper = new FieldsMapper();

            $fields = [];
            foreach ($dictionary as $field) {
                $fields[$field->name] = (object)[
                    'fieldAttr' => $fieldsMapper->prepareShortCodeAttr($field),
                    'text' => $field->name,
                    'type' => 'button',
                ];
            }

            if (count($fields) > 0) {
                update_post_meta($params->get('postId'), 'fillable_template_list_fillable_template_list', $params->get('templateId'));
            }

            wp_die(json_encode($fields));
        }

        wp_die(json_encode(['error' => self::TEMPLATE_ID_IS_NOT_SET_ERROR]));
    }

    public function freshTemplates()
    {
        update_option('pdfform_fillable_templates', ['expires' => 0, 'items' => '']);

        $list = PdfFormsLoader::$PDFFillerModel->getFillableTemplates();
        $params = CustomRequest::instance()->postOrGet();

        $currentTemplateId = get_post_meta($params->get('postId'), 'fillable_template_list_fillable_template_list');

        if (!empty($currentTemplateId) && !array_key_exists($currentTemplateId, $list)) {
            $document = PdfFormsLoader::$PDFFillerModel->getDocumentInfo($currentTemplateId);
            if (is_object($document)) $list[$document->id] = $document->name;
        }

        wp_die(json_encode($list));
    }

    public function allTemplates()
    {
        $needMore = true;
        $page = 1;
        $fullList = [];

        while ($needMore) {
            update_option('pdfform_fillable_templates', ['expires' => 0, 'items' => '']);

            $newList = PdfFormsLoader::$PDFFillerModel->getFillableTemplates($page++);

            if (count($newList) != PdfFormsLoader::$PDFFillerModel::TEMPLATES_PER_PDFFILLER_REQUEST) {
                $needMore = false;
            }

            foreach ($newList as $index => $element) {
                $fullList[$index] = $element;
            }
        }

        wp_die(json_encode($fullList));
    }
}
