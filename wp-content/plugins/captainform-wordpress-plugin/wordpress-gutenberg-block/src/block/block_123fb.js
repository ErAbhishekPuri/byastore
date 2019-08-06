/**
 * BLOCK: gutenberg-block
 */

//  Import CSS.
import './style.scss';
import './editor.scss';

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
import { dispatch } from '@wordpress/data';
import { withState } from '@wordpress/compose';
import { Button, Modal, FocusableIframe } from '@wordpress/components';
import FormBuilder123SvgIcon from './formbuilder-icon-svg';

const pluginUrl = '//' + window.location.hostname + '/wp-content/plugins/123contactform-for-wordpress/dialog-modal.php';

/**
 * Register: Gutenberg Block.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'formbuilder123/formbuilder123-block', {
	title: '123FormBuilder',
	icon: FormBuilder123SvgIcon,
	category: 'embed', 
	keywords: [
		'123formbuilder — 123FormBuilder Block',
	],

	attributes: {
		shortcode: {
			type: 'string',
			source: 'text',
		}
	},

	edit: withState({
		isOpen: false,
		count: 0,
	})(
		function (props) {
			var isOpen = props.isOpen;
			var setState = props.setState;

			window.addEventListener("message", receiveMessage, false);
			function receiveMessage(event) {
				code = '[123-form-builder i' + event.data[0] + ']';	
				if(event.data[1] != 'undefined') {
					if (event.data[1].indexOf('EU.') > -1 || event.data[1].indexOf('EU-') > -1 ) {
						code = '[123-form-builder-eu i' + event.data[0] + ']';
					}
				}
				onChangeShortcode(code);
			};
	
			function onChangeShortcode(content) {
				if ( content != '' && props.attributes.shortcode == undefined && props.isSelected === true ) {
					props.attributes.shortcode = content;
					window.shortcode123 = '';
					setTimeout(() => {
						dispatch( 'core/editor' ).clearSelectedBlock();
						close123FormBuilderModal();
					}, 500);
				}
			}

			function close123FormBuilderModal() {
				props.isOpen = false;
				if ( props.attributes.shortcode == undefined ) {
					dispatch( 'core/editor' ).removeBlock(props.clientId);
				}
				dispatch( 'core/editor' ).clearSelectedBlock();
			}

			function open123FormBuilderModal() {
				if ( props.count < 1 ) {
					props.isOpen = true;
					props.count++;
				}
			}
			
			if (props.attributes.shortcode == null) {
				open123FormBuilderModal()
			}
	
			return ([
				<div>
					{ props.isOpen && (
						<Modal title="123FormBuilder"
							onRequestClose={ close123FormBuilderModal }
							shouldCloseOnEsc={ false }
							shouldCloseOnClickOutside={ false } >
							<FocusableIframe src={pluginUrl} />
						</Modal>
					) }
				</div>,
				<div className="captainform-guten-block-editor">
					<p>{props.attributes.shortcode}</p>
				</div>
			]);
		}
	),

	save: function (props) {
		return (
			<div className="captainform-guten-block">
				<p>{props.attributes.shortcode}</p>
			</div>
		);
	},
} );
