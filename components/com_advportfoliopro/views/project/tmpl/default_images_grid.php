<?php
/**
 * @copyright	Copyright (c) 2013 Skyline Technology Ltd (http://extstore.com). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access.
defined('_JEXEC') or die;


JHtml::addIncludePath(JPATH_ROOT . '/administrator/components/com_advportfoliopro/helpers/html/');
JHtml::_('advportfoliopro.modal');

JHtml::_('script', 'com_advportfoliopro/imagesloaded.pkgd.min.js', false, true);
JHtml::_('script', 'com_advportfoliopro/masonry.pkgd.min.js', false, true);

$columns		 	 = (int) $this->params->def('grid_column', 3);
$item_class		 	 = 'column-' . $columns;

$this->document->addScriptDeclaration("
(function($) {
	$(document).ready(function() {
		var container	= $('.gallery-grid');
		container.imagesLoaded(function(){
			container.masonry({
				itemSelector : '.grid-item',
				columnWidth : '.$item_class'
			});
		});
	});
})(jQuery);
");
?>

<div class="gallery-grid clearfix">
	<?php foreach ($this->item->images as $image) : ?>
		<div class="grid-item <?php echo $item_class; ?>">
			<div class="project-img">
				<a rel="gallery" class="exmodal" title="<?php echo $this->escape($image->title); ?>" href="<?php echo JHtml::_('advportfoliopro.image', $image->image); ?>">
					<?php echo JHtml::_('advportfoliopro.image', $image->image, null, null, $this->escape($image->title ? $image->title : $this->item->title)); ?>
				</a>
			</div>
		</div>

	<?php endforeach; ?>
</div>
