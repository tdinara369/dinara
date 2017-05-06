<?php 

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access'); 
?>
<?php if (!empty( $this->sidebar)) : ?>
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
<?php else : ?>
	<div id="j-main-container">
<?php endif;?>
	<div class="container">
		<h1><?php echo JText::_('COM_EVENTGALLERY_SYSTEMCHECK_SETTINGS')?></h1>
		<dl>
			<dt>PHP Version</dt>
			<dd><?php echo phpversion();?></dd>

			<dt>Installed Event Gallery Package Version</dt>
			<dd><?php echo EVENTGALLERY_VERSION . ' (build ' . EVENTGALLERY_VERSION_SHORTSHA . ')';?></dd>

			<dt>Database Schema Version</dt>
			<dd>Target Version: <?php echo EVENTGALLERY_DATABASE_VERSION; ?>
				<pre><?php echo print_r($this->schemaversions); ?></pre>
			</dd>

			<dt>Installed Elements</dt>
			<dd><pre><?php print_r($this->installedextensions); ?></pre></dd>

			<dt>Memory Limit</dt>
			<dd><?php echo ini_get('memory_limit');?></dd>

			<dt>image.php is executable</dt>
			<dd><?php echo is_executable(JPATH_ROOT.'/components/com_eventgallery/helpers/image.php')?"true":"false";?></dd>


		</dl>

		<h1>Components Options</h1>
		<pre>
		<?php
			print_r($this->params);
		?>
		</pre>

		<a name="logs"></a>

		<h1>Log Files</h1>
		<?php IF (!$this->doShowLogs): ?>
			<a href="<?php echo JRoute::_('index.php?option=com_eventgallery&view=systemcheck&showlogs=true#logs')?>">Reload with log data. The page might get pretty large. Be careful!!</a>
		<?php ELSE: ?>
			<a href="<?php echo JRoute::_('index.php?option=com_eventgallery&view=systemcheck#logs')?>">Hide logs.</a>
			<pre>
				<?php

					$defLogDir = JPATH_ADMINISTRATOR . '/logs';
					$logDir    = JFactory::getConfig()->get('log_path', $defLogDir);
					$logDir    = rtrim($logDir, '/' . DIRECTORY_SEPARATOR);

					$files = glob($logDir . '/*eventgallery*.php', GLOB_BRACE);
					foreach($files as $file) {
						echo "<b>" . $this->escape($file) . "</b>";
						echo "<pre>". $this->escape(file_get_contents ($file)) ."</pre>";
					}

				?>
			</pre>
		<?php ENDIF; ?>
	</div>
</div>