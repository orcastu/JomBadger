<?php
/**
 * @package   openbadges
 * @subpackage Components
 * components/com_openbadges/openbadges.php
 * @Copyright Copyright (C) 2012 Alain Bolli
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 ******/

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class openbadgesViewopenbadges extends JView
{
	protected $items;
	protected $pagination;
	protected $canDo;
	
	function display($tpl = null)
{
      $model =& $this->getModel();
	$userid = $model->getUserId();
	$this->items=$this->get('Items');
	$this->pagination = $this->get('Pagination');
	//filter
	$this->state		= $this->get('State');
	
    $this->assignRef('userid', $userid);
    
    // What Access Rights does this user have? What can (s)he do?
	$this->canDo = OpenBadgesHelper::getActions();
  
    // Set the toolbar
	$this->addToolBar();
    
    parent::display($tpl);
    
	// Set the document
	$this->setDocument();

}

protected function addToolBar() 
	{
		//creates the toolbar
		JToolBarHelper::title( JText::_('COM_OPENBADGES_TITLE_BADGES'),'openbadges');
    	if ($this->canDo->get('core.delete')) 
    	{
			JToolBarHelper::deleteList('','openbadges.delete');
    	}
		if ($this->canDo->get('core.edit')) 
    	{
    		JToolBarHelper::editList('badge.edit');
    	}
    	if ($this->canDo->get('core.create'))
    	{
    		JToolBarHelper::addNew('badge.add');
    	} 
    	if ($this->canDo->get('core.admin'))
    	{
    		JToolBarHelper::divider();
    		JToolBarHelper::preferences( 'com_openbadges','500','600' );
    	}
    	JToolBarHelper::help( 'screen.openbadges',true );
	}
	
protected function setDocument() 
	{
		//set the title in the browser
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_OPENBADGES_BROWSERTITLE'));
	}

}