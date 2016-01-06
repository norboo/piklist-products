<?php
/*
Title: Product Extra Fields
Description: Add extra fields for your products
Post Type: product
*/

piklist('field', array(
	'type' => 'editor'
	,'field' => 'product_notes'
	,'label' => 'Additional Notes'
    ,'template'=>'full-width'
    ,'description' => 'Add notes specific to this product.'
    ,'help' => 'Some instructions for this field.'
	,'options' => array (
		'media_buttons' => false
		,'teeny' => false
        ,'wpautop'=>false
	)
));

piklist('field', array(
    'type' => 'file'
    ,'field' => 'product_images'
    ,'label' => __('Product Photo Gallery','piklist')
    ,'template'=>'full-width'
    ,'description' => __('Add images for your Product.','piklist')
    ,'help' => 'You should choose a multiple of 4 images. Best is 8 or 12.'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add Images','piklist')
    )
));