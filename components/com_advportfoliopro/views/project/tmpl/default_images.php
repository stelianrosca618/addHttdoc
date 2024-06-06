<?php
/**
 * @copyright	Copyright (c) 2013 Skyline Technology Ltd (http://extstore.com). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access.
defined('_JEXEC') or die;


JHtml::addIncludePath(JPATH_ROOT . '/administrator/components/com_advportfoliopro/helpers/html/');
JHtml::_('advportfoliopro.modal');
JHtml::_('stylesheet', 'com_advportfoliopro/owl.transitions.css', false, true);

JHtml::_('script', 'com_advportfoliopro/owl.carousel.min.js', false, true);

$animation	= $this->item->params->get('animation', 'fade');
$navigation	= $this->item->params->get('navigation');

if (count($this->item->images) > 1) {
	$autoplay = 3000;
} else {
	$autoplay = '!1';
}

$this->document->addScriptDeclaration("
(function($) {
	$(document).ready(function() {
		
		var status	= $('.customNavigation');
		
		$('#gallery-carousel').owlCarousel({
			autoPlay: $autoplay,
			stopOnHover: true,
			navigation: $navigation,
			paginationSpeed: 1000,
			goToFirstSpeed: 2000,
			singleItem: true,
			autoHeight: true,
			pagination: false,
			transitionStyle: '$animation',
			afterAction: afterAction,
			navigationText : false
		});
		
		function updateResult(pos,value){
        	status.find(pos).find('.result').text(value + 1);
		}

		function afterAction(){
        	updateResult('.owlItems', this.owl.owlItems.length - 1);
        	updateResult('.currentItem', this.owl.currentItem);
		}
	});
})(jQuery);
");
?>

<div id="gallery-carousel" class="gallery-carousel owl-carousel">
	<?php foreach ($this->item->images as $image) : ?>
		<div class="project-img">
			<?php if ($this->item->params->get('popup') == 1) : ?>
				<a rel="gallery" class="exmodal" title="<?php echo $this->escape($image->title); ?>" href="<?php echo JHtml::_('advportfoliopro.image', $image->image); ?>">
					<?php echo JHtml::_('advportfoliopro.image', $image->image, null, null, $this->escape($image->title ? $image->title : $this->item->title)); ?>
				</a>
			<?php else : ?>
				<?php echo JHtml::_('advportfoliopro.image', $image->image, null, null, $this->escape($image->title ? $image->title : $this->item->title)); ?>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>

<div class="customNavigation">
	<span class="currentItem">
		<span class="result"></span>
	</span>

	<span class="text-center"> <?php echo JText::_('COM_ADVPORTFOLIOPRO_OF'); ?> </span>

	<span class="owlItems">
		<span class="result"></span>
	</span>
</div>
