<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Layout.Widget
 *
 * @copyright   (C) 2008 - 2015 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        http://www.kunena.org
 **/
defined('_JEXEC') or die;
?>
<div class="navbar">
	<div class="navbar-inner">
		<div class="visible-desktop">
			<?php echo $this->subRequest('Widget/Menu'); ?>
			<?php echo $this->subRequest('Widget/Login'); ?>
		</div>
		<div class="hidden-desktop">
			<ul class="nav navbar-nav pull-left">
				<div><a class="btn btn-link" data-toggle="collapse" data-target=".nav-collapse" style="float:left"> <i class="icon-large icon-list"></i> <b class="caret"></b> </a></div>
				<div class="nav-collapse"><?php echo $this->subRequest('Widget/Menu'); ?></div>
			</ul>
			<?php echo $this->subRequest('Widget/Login'); ?>
		</div>
	</div>
</div>
