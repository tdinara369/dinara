<?php
/**
 * jSecure Lite components for Joomla!
 * jSecure Lite extention prevents access to administration (back end)
 * login page without appropriate access key. 
 *
 * @author      $Author: Ajay Lulia $
 * @copyright   Joomla Service Provider - 2012
 * @package     jSecure Lite 1.0
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     $Id: view.html.php  $
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );
jimport('joomla.html.pane');

class jsecureliteViewBasic extends JViewLegacy {
	protected $form;
	protected $item;
	protected $state;
	
	function display($tpl=null){

		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state	= $this->get('State');

		$basepath   = JPATH_ADMINISTRATOR .'/components/com_jsecurelite';
		$configFile	= $basepath.'/params.php';
		require_once($configFile);
		$JSecureliteConfig = new JSecureliteConfig();
		
		$this->assignRef('JSecureliteConfig',$JSecureliteConfig);		
		

		$this->addToolbar();
				
		parent::display($tpl);
	}

    protected function addToolbar()
	{
		
		JToolBarHelper::title(JText::_('jSecure Lite'), 'generic.png');
		
			JToolBarHelper::apply('saveBasic');
			//JToolBarHelper::save('saveBasic');
			//JToolBarHelper::cancel('cancel');
			JToolBarHelper::preferences('com_jsecurelite');
			//JToolBarHelper::help('help');
	}

	function save(){
		$app = &JFactory::getApplication();
	    $msg  = 'Details Has Been Saved';
		$result = $this->saveDetails();
 		if($result){
 			$link = 'index.php?option=com_jsecurelite&task=basic';
 			$msg  = 'Details Has Been Saved';
 			$app->redirect($link,$msg);
 	    }
 	}
 	
 	function saveDetails(){	

		jimport('joomla.filesystem.file');	
		$app           =& JFactory::getApplication();
		$option		= JRequest::getVar('option', '', '', 'cmd');
		$post       = JRequest::get( 'post' );
		
		$basepath   = JPATH_ADMINISTRATOR .'/components/com_jsecurelite';
		$configFile	= $basepath.'/params.php';
		
		$xml	    = $basepath.'/com_jsecurelite.xml';
		
		require_once($configFile);
		
		if(! is_writable($configFile)){
			$link = "index.php?option=com_jsecurelite";
			$msg = 'Configuration File is Not Writable /administrator/components/com_jsecurelite/params.php ';
			$app->redirect($link, $msg, 'notice'); 
			exit();
		}

		// Read the ini file
		if (JFile::exists($configFile)) {
			$content = JFile::read($configFile);
		} else {
			$content = null;
		}

		$config = new JRegistry('JSecureliteConfig');
		$oldValue = new JSecureliteConfig();

		$config_array = array();
		$config_array['publish']	                 = JRequest::getVar('publish', 0, 'post', 'int');
		$config_array['key']                         = JRequest::getVar('key', '', 'post', 'string');
		$config_array['passkeytype']	             = JRequest::getVar('passkeytype', 'url', 'post', 'string');
		$config_array['options']                     = JRequest::getVar('options', 0, 'post', 'string'); 
		$config_array['custom_path']				 = JRequest::getVar('custom_path', '', 'post', 'string');

		
		if($config_array['key'] == ''){
			
			$config_array['key'] = $oldValue->key;			
		} else {
			$keyvalue = $config_array['key'];
			$config_array['key'] = md5(base64_encode($config_array['key']));
		}

		if($config_array['publish']	== 1){
			$session    =& JFactory::getSession();
			$session->set('jSecureAuthentication', 1);
		}

		
		$config->loadArray($config_array);
		
		$fname = JPATH_COMPONENT_ADMINISTRATOR.'/'.'params.php';

		if (JFile::write($fname, $config->toString('PHP', array('class' => 'JSecureliteConfig','closingtag' => false)))) 
			$msg = JText::_('The Configuration Details have been updated');
		 else 
			$msg = JText::_('ERRORCONFIGFILE');
		
		return true;
 	}	
	
 
}

?>