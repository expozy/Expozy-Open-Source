/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'bg';
	// config.uiColor = '#AADC6E';
	config.allowedContent = true;
	config.extraAllowedContent = '*(*)';
	config.extraAllowedContent = '*(*);*{*}';
	config.extraAllowedContent = '*(asdf1,asdf2)';
	config.extraAllowedContent = 'p(asdf)';
	config.extraAllowedContent = '*[id]';
	config.extraAllowedContent = 'style';
	config.extraAllowedContent = 'span;ul;li;table;td;style;*[id];*(*);*{*}';
	config.contentsCss = '/template/css/style.css';
};