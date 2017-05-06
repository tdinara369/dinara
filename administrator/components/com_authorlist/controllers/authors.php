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

class AuthorListControllerAuthors extends JControllerAdmin
{
	public function __construct($config = array())
	{
		parent::__construct($config);
	}


	public function getModel($name = 'Author', $prefix = 'AuthorListModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}