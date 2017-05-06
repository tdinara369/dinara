<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



class EventgalleryHelpersMedialoader
{

    static $loaded = false;

    public static function load()
    {

        if (self::$loaded) {
            return;
        }

        self::$loaded = true;

    	include_once JPATH_ROOT . '/administrator/components/com_eventgallery/version.php';

        $document = JFactory::getDocument();
        $app = JFactory::getApplication();

        //JHtml::_('behavior.framework', true);
        JHtml::_('behavior.formvalidation');

        $params = JComponentHelper::getParams('com_eventgallery');
        
        $doDebug = $params->get('debug',0)==1;
        $doManualDebug = $app->input->getString('debug', '') == 'true';
		$loadResponsiveCSS = $params->get('load_responsive_css', 0)==1;
		
        $CSSs = Array();
        $JSs = Array();

        JHtml::_('jquery.framework');

        $JSs[] = 'common/js/jquery/namespace.js';


        // load script and styles in debug mode or compressed
        if ($doDebug || $doManualDebug) {
        

            $CSSs[] = 'frontend/css/eventgallery.css';
            $CSSs[] = 'frontend/css/colorbox.css';
            $CSSs[] = 'frontend/css/font-awesome.css';
            if ($loadResponsiveCSS === true) {
            	$CSSs[] = 'frontend/css/responsive.css';
            }

            $JSs = array_merge($JSs, Array(                
                'common/js/EventgalleryTools.js',
                'frontend/js/EventgalleryTouch.js',
                'frontend/js/jquery.colorbox.js',
                'frontend/js/jquery.colorbox.init.js',
                'frontend/js/EventgallerySizeCalculator.js',
                'frontend/js/EventgalleryImage.js',
                'frontend/js/EventgalleryRow.js',
                'frontend/js/EventgalleryImageList.js',
                'frontend/js/EventgalleryEventsList.js',
                'frontend/js/EventgalleryEventsTiles.js',
                'frontend/js/EventgalleryGridCollection.js',
                'frontend/js/EventgalleryTilesCollection.js',
                'frontend/js/EventgallerySquareList.js',
                'frontend/js/EventgalleryCart.js',                
                'frontend/js/EventgallerySocialShareButton.js',
                'frontend/js/EventgalleryJSGallery2.js',
                'frontend/js/EventgalleryLazyload.js',
                'frontend/js/EventgalleryBehavior.js',
                'frontend/js/Modules.js'
            ));

        } else {
            

            $CSSs[] = 'frontend/css/eg-compressed.css';

            
            if ($loadResponsiveCSS === true) {
            	$CSSs[] = 'frontend/css/responsive.css';
            }
            
            $JSs[] = 'frontend/js/eg-compressed.js';

        }

        foreach($CSSs as $css) {
            $script = JUri::root(true) . '/media/com_eventgallery/'.$css.'?v=' . EVENTGALLERY_VERSION;
            $document->addStyleSheet($script);
        }

        foreach($JSs as $js) {
            $script = JUri::root(true) . '/media/com_eventgallery/'.$js.'?v=' . EVENTGALLERY_VERSION;
            $document->addScript($script);
        }


        /*
         * Let's add a global configuration object for the color box slideshow.
         */
        $slideshowConfiguration = Array();

        $slideshowConfiguration['slideshow']      = $params->get('use_lightbox_slideshow', 0) == 1 ? true : false;
        $slideshowConfiguration['slideshowAuto']  = $params->get('use_lightbox_slideshow_autoplay', 0) == 1 ? true : false;
		$slideshowConfiguration['slideshowSpeed'] = $params->get('lightbox_slideshow_speed', 3000);
		$slideshowConfiguration['slideshowStart'] = JText::_('COM_EVENTGALLERY_LIGHTBOX_SLIDESHOW_START');
		$slideshowConfiguration['slideshowStop']  = JText::_('COM_EVENTGALLERY_LIGHTBOX_SLIDESHOW_STOP');
        $slideshowConfiguration['slideshowCurrent']  = JText::_('COM_EVENTGALLERY_LIGHTBOX_SLIDESHOW_CURRENT');
        $slideshowConfiguration['slideshowRightClickProtection']  = $params->get('lightbox_prevent_right_click', 0) == 1 ? true : false;

        $document->addScriptDeclaration("EventGallerySlideShowConfiguration=" . json_encode($slideshowConfiguration) . ";");

        $lightboxwConfiguration = Array();
        $lightboxwConfiguration['navigationFadeDelay'] = $params->get('lightbox_navgation_fade_delay', 0);
        $document->addScriptDeclaration("EventGalleryLightboxConfiguration=" . json_encode($lightboxwConfiguration) . ";");

        $cartConfiguration = Array();
        $cartConfiguration['add2carturl'] = JRoute::_('index.php?option=com_eventgallery&view=singleimage&layout=imagesetselection&format=raw', false);
        $document->addScriptDeclaration("EventGalleryCartConfiguration=" . json_encode($cartConfiguration) . ";");
    }

}

	
	
