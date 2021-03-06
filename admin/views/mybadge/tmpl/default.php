<?php
/**
 * @package   Jombadger
 * @subpackage Components
 * components/com_jombadger/jombadger.php
 * @Copyright Copyright (C) 2012 Alain Bolli
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 ******/
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');

?>
 
<form action="<?php echo JRoute::_('index.php?option=com_jombadger');?>" method="post" name="adminForm" id="badge-form" class="form-validate">
    <?php 
    echo "<h1>".JText::_("COM_JOMBADGER_MYBADGE_CANWINABADGE")."</h1>";
    echo "<p>".JText::_("COM_JOMBADGER_MYBADGE_CANWININSTALLED")."</p>";
    ?>
    <fieldset class="adminform">
        <legend><?php echo JText::_( 'COM_JOMBADGER_MYBADGE_DETAILS' ); ?></legend>
        <?php 
        
        echo "<p>".JText::_("COM_JOMBADGER_MYBADGE_WHATTODOTOWIN")."</p>";
        echo "<ul>";
        echo "<li class='jb_tick1'>".JText::_("COM_JOMBADGER_MYBADGE_INSTALLCOMPONENT")."</li>";
        echo "<li class='jb_tick".$this->testBadge['params']."'>".JText::_("COM_JOMBADGER_MYBADGE_COMPLETE_PARAMS")."</li>";
        echo "<li class='jb_tick".$this->testBadge['category']."'>".JText::_("COM_JOMBADGER_MYBADGE_CREATE_CATEGORY")."</li>";
        echo "<li class='jb_tick".$this->testBadge['badges']."'>".JText::_("COM_JOMBADGER_MYBADGE_CREATE_BADGES")."</li>";
        echo "<li class='jb_tick".$this->testBadge['plugin']."'>".JText::_("COM_JOMBADGER_MYBADGE_INSTALL_PLUGIN")."</li>";
        echo "<li class='jb_tick".$this->testBadge['records']."'>".JText::_("COM_JOMBADGER_MYBADGE_TEST_BADGE")."</li>";
        echo "</ul>";
    echo "</fieldset>";
    if ($this->testBadge['total']==5)
    	{
    		echo "<p class='jb_congratulations'>".JText::_("COM_JOMBADGER_MYBADGE_TESTOK")."</p>";
    		echo "<p class='jb_button'><a href='http://www.bolli.fr/index.php?option=com_jombadger&view=earnbadge&badgeid=9'>".JText::_("COM_JOMBADGER_MYBADGE_EARNIT")."</a></p>";
    	}
    else {
    	echo "<p class='jb_congratulations'>".JText::_("COM_JOMBADGER_MYBADGE_TESTINCOMPLETE")."</p>";
    }
    ?>
<div>
 
<input type="hidden" name="task" value="" />
<?php echo JHtml::_('form.token'); ?>
</div>
</form>
