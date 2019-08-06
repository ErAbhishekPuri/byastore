/**
 * BLOCK: gutenberg-block
 */

//  Import CSS.
import './style.scss';
import './editor.scss';

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
import { dispatch } from '@wordpress/data';
import CaptainformSvgIcon from './captainform-icon-svg';

/**
 * Register: Gutenberg Block.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'captainform/captainform-block', {
	title: 'CaptainForm',
	icon: CaptainformSvgIcon,
	category: 'embed', 
	keywords: [
		'captain-form-block — CaptainForm Block',
	],

	attributes: {
		shortcode: {
			type: 'string',
			source: 'text',
		}
	},

	edit: function (props) {
		function onChangeShortcode(content) {
			if ( content != '' && props.attributes.shortcode == undefined && props.isSelected === true ) {
				props.attributes.shortcode = content;
				window.shortcode123 = '';
				setTimeout(() => {
					dispatch( 'core/editor' ).clearSelectedBlock();
				}, 500);
			}
		}

		function triggerOpenModal() {
			window.captainformShowThickBox();
			setTimeout(()=>{
				let insertBtn = document.getElementById('captainform-button-insert');
				let cancelBtn = document.getElementById('captainform-button-cancel');
				insertBtn.addEventListener('click', function (e) {
					onChangeShortcode(window.shortcode123);
				});
				cancelBtn.addEventListener('click', function (e) {
					dispatch( 'core/editor' ).removeBlock(props.clientId);
					dispatch( 'core/editor' ).clearSelectedBlock();
				});
				
			}, 1600);
		}

		if (props.attributes.shortcode == null) {
			triggerOpenModal();
			
			var checkIfModalIsClosed = setInterval(function(){
				var thickbox_shown = document.getElementById('TB_window');
				if ( thickbox_shown === null && props.isSelected === true && props.attributes.shortcode == null ) {
					try {
						dispatch( 'core/editor' ).removeBlock(props.clientId);
					} catch(error) {
						console.log(error);
					}
					dispatch( 'core/editor' ).clearSelectedBlock();
					clearInterval(checkIfModalIsClosed);
				}
			}, 800);
		}


		return (
			<div className="captainform-guten-block-editor">
				<p>{props.attributes.shortcode}</p>
			</div>
		);
	},

	save: function (props) {
		return (
			<div className="captainform-guten-block">
				<p>{props.attributes.shortcode}</p>
			</div>
		);
	},
} );
