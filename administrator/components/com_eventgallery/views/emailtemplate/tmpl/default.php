<?php 

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access'); 

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');

?>

<script type="text/javascript">
    Joomla.submitbutton = function(task)
    {
        if (task == 'emailtemplate.cancel' || document.formvalidator.isValid(document.id('adminForm'))) {
            
            Joomla.submitform(task, document.getElementById('adminForm'));
        }
        else {
            alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_eventgallery&layout=edit&id='.(int) $this->item->id); ?>" method="POST" name="adminForm" id="adminForm">
<?php if (!empty( $this->sidebar)) : ?>
    <div id="j-sidebar-container" class="span2">
        <?php echo $this->sidebar; ?>
    </div>
    <div id="j-main-container" class="span10">
<?php else : ?>
    <div id="j-main-container">
<?php endif;?>
        <?php echo $this->loadSnippet('formfields'); ?>

        <h2><?php JText::_('COM_EVENTGALLERY_EMAILTEMPLATE_PREVIEW_LABEL'); ?></h2>
        <div class="well preview" id="preview"></div>
        <h2><?php JText::_('COM_EVENTGALLERY_EMAILTEMPLATE_DEMODATA_LABEL'); ?></h2>
        <pre><?php echo $this->escape(print_r($this->item->demodata, true)); ?></pre>

    </div>

    <div class="clr"></div>

    <?php echo JHtml::_('form.token'); ?>
    <input type="hidden" name="option" value="com_eventgallery" />
    <input type="hidden" name="id" value="<?php echo $this->item->id; ?>" />
    <input type="hidden" name="task" value="" />
</form>
<script type="text/javascript">

    (function(jQuery) {


        jQuery(function() {
            var jqxhr = jQuery.ajax( '<?php echo JRoute::_('index.php?option=com_eventgallery&format=raw&view=emailtemplate&layout=preview&id='.$this->item->id, false);?>')
                .done(function(data, textStatus, jqXHR) {
                    jQuery('#preview').html(data);
                })
                .fail(function(jqXHR, textStatus, errorThrown) {

                    jQuery('#preview').html(jqXHR.responseText);
                    console.log(jqXHR, textStatus, errorThrown);
                });
        });




    })(eventgallery.jQuery);


</script>