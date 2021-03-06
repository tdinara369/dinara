<?php defined('_JEXEC') or die('Direct Access to this location is not allowed.');
JHtml::_('behavior.formvalidation');
JHtml::_('bootstrap.tooltip'); ?>
<?php if(!empty($this->sidebar)): ?>
<div id="j-sidebar-container" class="span2">
  <?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">
<?php else : ?>
<div id="j-main-container">
<?php endif;?>
  <div class="row-fluid">
    <div class="span6 well">
      <div class="legend"><?php echo JText::_('COM_JOOMGALLERY_COMMON_IMAGE_SELECTION'); ?></div>
      <div id="triggerClearUploadList" class="btn btn-info pull-right hidden">
        <i class="icon-list icon-black"></i> <?php echo JText::_('COM_JOOMGALLERY_AJAXUPLOAD_CLEAR_UPLOAD_LIST'); ?>
      </div>
      <?php echo $this->form->getInput('ajaxupload'); ?>
    </div>
    <div class="span6 well">
      <div class="legend"><?php echo JText::_('COM_JOOMGALLERY_COMMON_OPTIONS'); ?></div>
      <form action="index.php" method="post" name="adminForm" id="upload-form" enctype="multipart/form-data" class="form-validate form-horizontal" onsubmit="">
        <div class="control-group">
          <?php echo $this->form->getLabel('catid'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('catid'); ?>
          </div>
        </div>
        <?php if(!$this->_config->get('jg_useorigfilename')): ?>
        <div class="control-group">
          <?php echo $this->form->getLabel('generictitle'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('generictitle'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo $this->form->getLabel('imgtitle'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('imgtitle'); ?>
          </div>
        </div>
        <?php endif;
              if(!$this->_config->get('jg_useorigfilename') && $this->_config->get('jg_filenamenumber')): ?>
        <div class="control-group">
          <?php echo $this->form->getLabel('filecounter'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('filecounter'); ?>
          </div>
        </div>
        <?php endif; ?>
        <div class="control-group">
          <?php echo $this->form->getLabel('imgtext'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('imgtext'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo $this->form->getLabel('imgauthor'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('imgauthor'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo $this->form->getLabel('published'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('published'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo $this->form->getLabel('access'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('access'); ?>
          </div>
        </div>
        <?php if($this->_config->get('jg_delete_original') == 2): ?>
        <div class="control-group">
          <?php echo $this->form->getLabel('original_delete'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('original_delete'); ?>
          </div>
        </div>
        <?php endif; ?>
        <div class="control-group">
          <?php echo $this->form->getLabel('create_special_gif'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('create_special_gif'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo $this->form->getLabel('debug'); ?>
          <div class="controls">
            <?php echo $this->form->getInput('debug'); ?>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <div id="triggerUpload" class="btn btn-large btn-primary">
              <i class="icon-upload icon-white"></i> <?php echo JText::_('COM_JOOMGALLERY_UPLOAD_UPLOAD'); ?>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php JHtml::_('joomgallery.credits'); ?>
</div>