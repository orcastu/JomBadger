<?php
/**
 * @package   Jombadger
 * @subpackage Components
 * components/com_jombadger/jombadger.php
 * @Copyright Copyright (C) 2012 Alain Bolli
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 ******/

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controllerform');


class JomBadgerControllerbadge extends JControllerForm
{

	function __construct() {
		//by default, the list view is the plural of the edit view, we change that here
      $this->view_list = 'openbadges';
   
      parent::__construct();
   }

}