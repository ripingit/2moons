<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Class to provide methods for file system access:
class AJAXChatFileSystem {

	static function getFileContents($file) {
		if(function_exists('file_get_contents')) {
			return file_get_contents($file);
		} else {
			return(implode('', file($file)));
		}
	}

}
?>