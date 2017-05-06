<?php
/*------------------------------------------------------------------------
# com_authorlist - Author List
# ------------------------------------------------------------------------
# author    Jesús Vargas Garita
# copyright Copyright (C) 2013 www.joomlahill.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomlahill.com
# Technical Support:  Forum - http://www.joomlahill.com/forum
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

class AuthorListController extends JControllerLegacy
{
	public function __construct($config = array())
	{
		$this->input = JFactory::getApplication()->input;

		parent::__construct($config);
	}
	
	public function display($cachable = false, $urlparams = false)
	{
		$cachable = true;

		$id    = $this->input->getInt('a_id');
		$vName = $this->input->getCmd('view', 'list');
		$this->input->set('view', $vName);

		$safeurlparams = array('id'=>'INT','cid'=>'ARRAY','year'=>'INT','month'=>'INT','limit'=>'INT','limitstart'=>'INT',
			'showall'=>'INT','return'=>'BASE64','filter'=>'STRING','filter_order'=>'CMD','filter_order_Dir'=>'CMD','filter-search'=>'STRING','print'=>'BOOLEAN','lang'=>'CMD');

		parent::display($cachable, $safeurlparams);

		return $this;
	}
}
