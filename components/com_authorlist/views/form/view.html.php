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

class AuthorListViewForm extends JViewLegacy
{
	protected $form;
	protected $author;
	protected $return_page;
	protected $state;

	public function display($tpl = null)
	{
		$app		= JFactory::getApplication();
		$user		= JFactory::getUser();

		$this->state		= $this->get('State');
		$this->author		= $this->get('Author');
		$this->form			= $this->get('Form');
		$this->return_page	= $this->get('ReturnPage');
		
		if (!$this->author || !$this->author->state > 0) {
			JError::raiseError(403, JText::_('COM_AUTHORLIST_ERROR_AUTHOR_NOT_FOUND'));
			return false;
		}
		
		$params	= &$this->state->params;
		
		$userId	= $user->get('id');

		$authorised = $user->authorise('core.edit', 'com_authorlist');
			
		if (!empty($userId) && $params->get('show_author_edit',1)) {
			if ($userId == $this->author->userid) {
				$authorised = true;
			}
		}

		if ($authorised !== true) {
			JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
			return false;
		}

		if (!empty($this->author) && isset($this->author->id)) {
			$this->form->bind($this->author);
			
			$registry = new JRegistry();
			$registry->loadString($this->author->params);
			$aParams = $registry->toArray();
			
			$this->form->bind($aParams);
		}

		if (count($errors = $this->get('Errors'))) {
			JError::raiseWarning(500, implode("\n", $errors));
			return false;
		}

		$this->_prepareDocument();
		parent::display($tpl);
	}

	protected function _prepareDocument()
	{
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu();
		$pathway	= $app->getPathway();
		$title 		= JText::_('COM_AUTHORLIST_FORM_EDIT_AUTHOR');

		$this->document->setTitle($title);

		$pathway = $app->getPathWay();
		$pathway->addItem($title, '');
	}
}
