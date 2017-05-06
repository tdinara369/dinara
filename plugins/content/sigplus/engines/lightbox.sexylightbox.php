<?php
/**
* @file
* @brief    sigplus Image Gallery Plus Sexy Lightbox 2 engine
* @author   Levente Hunyadi
* @version  1.4.3
* @remarks  Copyright (C) 2009-2011 Levente Hunyadi
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://hunyadi.info.hu/projects/sigplus
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
* Support class for Sexy Lightbox 2 (jQuery-based).
* @see http://www.coders.me/lang/en/web-html-js-css/javascript/sexy-lightbox-2
*/
class SIGPlusSexyLightboxEngine extends SIGPlusLightboxEngine {
	private $theme = 'black';
	private static $initialized = false;

	public function getIdentifier() {
		return 'sexylightbox';
	}

	public function __construct($params = false) {
		if (isset($params['theme'])) {
			$this->theme = $params['theme'];
		}
	}

	protected function addCommonScripts() {
		$this->addJQuery();
		$document = JFactory::getDocument();
		$document->addScript(JURI::base(true).'/plugins/content/sigplus/js/'.$this->getScriptFilename('jquery.easing'));  // duplicates are ignored
		parent::addCommonScripts();
	}

	public function addScripts($galleryid, SIGPlusGalleryParameters $params) {
		if (self::$initialized) {
			// Sexy Lightbox 2 does not support multiple instantiations on the same page with different parameters;
			// only a single instance will be created and additional galleries will share the same options
			return;
		}
		
		$this->addCommonScripts();
		$script = 'SexyLightbox.initialize(__jQuery__.extend('.$this->getCustomParameters($params).', { imagesdir:"'.JURI::base(true).'/plugins/content/sigplus/engines/sexylightbox/css", color:"'.$this->theme.'" }));';
		$this->addOnReadyScript($script);

		self::$initialized = true;
	}
}
