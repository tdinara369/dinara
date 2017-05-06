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

$fieldSets = $this->form->getFieldsets('metadata');
foreach ($fieldSets as $name => $fieldSet) :
	if (isset($fieldSet->description) && trim($fieldSet->description)) :
		echo '<p class="alert alert-info">'.$this->escape(JText::_($fieldSet->description)).'</p>';
	endif;
	?>
	<?php if ($name == 'jmetadata') : // Include the real fields in this panel.
    ?>
        <div class="control-group">
            <div class="control-label"><?php echo $this->form->getLabel('metadesc'); ?></div>
            <div class="controls"><?php echo $this->form->getInput('metadesc'); ?></div>
        </div>
        <div class="control-group">
            <div class="control-label"><?php echo $this->form->getLabel('metakey'); ?></div>
            <div class="controls"><?php echo $this->form->getInput('metakey'); ?></div>
        </div>
        <div class="control-group">
            <div class="control-label"><?php echo $this->form->getLabel('xreference'); ?></div>
            <div class="controls"><?php echo $this->form->getInput('xreference'); ?></div>
        </div>
    <?php endif; ?>
    <?php foreach ($this->form->getFieldset($name) as $field) : ?>
        <div class="control-group">
            <div class="control-label"><?php echo $field->label; ?></div>
            <div class="controls"><?php echo $field->input; ?></div>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>
