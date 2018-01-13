<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_options',
  'title'     => 'Post Background Color',
  'post_type' => 'post',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'color',
      'fields' => array(
        array(
          'id'        => 'bc_color',
          'type'      => 'select',
          'options'   => array(
            'Normal' => 'Normal',
            'blue' => 'blue',
            'black' => 'black',
          ),
          'default'   => 'Normal',
        ),

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
