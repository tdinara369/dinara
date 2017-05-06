<?php
/**
* @file
* @brief    sigplus Image Gallery Plus installer script
* @author   Levente Hunyadi
* @version  1.4.3
* @remarks  Copyright (C) 2009-2010 Levente Hunyadi
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://hunyadi.info.hu/projects/sigplus
*/

/*
* sigplus Image Gallery Plus plug-in for Joomla
* Copyright 2009-2010 Levente Hunyadi
*
* sigplus is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* sigplus is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgContentSIGPlusInstallerScript {
	function __construct($parent) { }

	function install($parent) { }

	function uninstall($parent) {
		self::removeCacheFolder('sigplus');
		self::removeCacheFolder('preview');
		self::removeCacheFolder('thumbs');
	}

	function update($parent) { }

	function preflight($type, $parent) { }

	function postflight($type, $parent) {
		switch ($type) {
			case 'update':
				self::removeCacheFolder('sigplus', false);
				break;
		}
	}

	/**
	* Cleans a cache folder.
	* @param {string} $folder The name of the folder whose contents to remove from the cache.
	*/
	private static function removeCacheFolder($folder, $complete = true) {
		$folder = JPATH_ROOT.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$folder;  // use site cache folder, not administrator cache folder
		if (file_exists($folder)) {
			$files = scandir($folder);
			if ($files !== false) {
				foreach ($files as $file) {
					if ($file[0] != '.') {  // skip parent directory entries and hidden files
						unlink($folder.DIRECTORY_SEPARATOR.$file);
					}
				}
				if ($complete) {
					rmdir($folder);
				}
			}
		}
	}
}
