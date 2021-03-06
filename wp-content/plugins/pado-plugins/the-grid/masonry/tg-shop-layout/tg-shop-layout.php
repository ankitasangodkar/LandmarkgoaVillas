<?php
/**
* @package   The_Grid
* @author    Themeone <themeone.master@gmail.com>
* @copyright 2015 Themeone
*
* Skin Name: Shop Layout
* Skin Slug: tg-shop-layout
* Date: 10/05/18 - 11:18:41AM
*
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// Init The Grid Elements instance
$tg_el = The_Grid_Elements();

// Prepare main data for futur conditions
$image  = $tg_el->get_attachment_url();
$format = $tg_el->get_item_format();

$output = null;

$media = $tg_el->get_media();

// if there is a media
if ($media) {

	// Media wrapper start
	$output .= $tg_el->get_media_wrapper_start();

	// Media content (image, gallery, audio, video)
	$output .= $media;

	// if there is an image
	if ($image || in_array($format, array('gallery', 'video'))) {

		// Media content holder start
		$output .= $tg_el->get_media_content_start();




		// Bottom wrapper start
		$output .= '<div class="tg-bottom-holder">';
			$output .= $tg_el->get_product_add_to_cart_url(array('text' => ' '), 'tg-element-2 add-to-card-btn');
			$output .= $tg_el->get_html_element(array('html' => '', 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-5 view-btn');
		$output .= '</div>';
		// Bottom wrapper end

		// Absolute element(s) in Media wrapper
		$output .= $tg_el->get_product_on_sale(array(), 'tg-element-4');

		// Media content holder end
		$output .= $tg_el->get_media_content_end();

	}

	$output .= $tg_el->get_media_wrapper_end();
	// Media wrapper end

}

// Bottom content wrapper start
$output .= $tg_el->get_content_wrapper_start('', 'bottom');
	$output .= $tg_el->get_the_title(array('link' => false, 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-3');
	$output .= $tg_el->get_product_full_price(array(), 'tg-element-1');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Bottom content wrapper end

return $output;