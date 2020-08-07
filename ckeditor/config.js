/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.extraPlugins = 'youtube,video';
	config.language = 'vi';
    config.filebrowserBrowseUrl = 'http://inantestci.com/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = 'http://inantestci.com/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = 'http://inantestci.com/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = 'http://inantestci.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = 'http://inantestci.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = 'http://inantestci.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};

