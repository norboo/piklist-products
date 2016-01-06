<?php
/*
Title: Product Category Featured Image
Description: Add a featured image to your Product Category. How cool is that?
Taxonomy: product_category
Capability: manage_options
Locked: true
Collapse: true
*/
 
piklist('field', array(
    'type' => 'file'
    ,'field' => 'product_category_featured_image'
    ,'label' => 'Add File'
    ,'description' => 'Upload only one file.'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add','piklist')
    )
  ));