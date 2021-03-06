<?php
/*
Title: Clothes Extra Fields
Description: Add extra fields for your tours
Post Type: product
*/

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'post_meta' // Not used for settings sections
    ,'field' => 'clothes_size'
    ,'value' => 'N/A' // Sets default to Option 2
    ,'label' => __('Size')
    ,'attributes' => array(
      'class' => 'text'
    )
    ,'choices' => array(
        'N/A' => 'N/A'
        ,'S' => 'S'
        ,'M' => 'M'
        ,'L' => 'L'
        ,'XL' => 'XL'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_shoulder_breadth'
    ,'label' => __('Shoulder Breadth')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_chest'
    ,'label' => __('Chest')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_length'
    ,'label' => __('Length')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_width'
    ,'label' => __('Width')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_sleeve_length'
    ,'label' => __('Sleeve Length')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'clothes_weigth'
    ,'label' => __('Weigth')
    ,'value' => 'N/A'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
));