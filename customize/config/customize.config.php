<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options              = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------

 $options[]            = array(
  'name'              => 'header_option',
  'title'             => 'Header Option',
  'settings'          => array(
    array(
      'name'          => 'bc',
      'default'       => '#000000',
      'control'       => array(
        'label'       => 'background Color',
        'type'        => 'color',
      ),
    ),  
    array(
      'name'          => 'menu_position',
      'control'       => array(
        'label'       => 'Menu position',
        'type'        => 'select',
        'choices'     => array(
          ''          => '- Select a value -',
          'right'      => 'right',
          'left'      => 'Left',
          'center'      => 'center',
        )
      ),
    ),

    ));


 $options[]            = array(
  'name'              => 'blog_layout',
  'title'             => 'Layouts',
  'settings'          => array(

    // color
    array(
      'name'          => 'laout_select',
      'control'       => array(
        'label'       => 'Choice Blog Layout',
        'type'        => 'select',
        'choices'     => array(
          ''          => '- Select a value -',
          'right'      => 'Right-Side Sidebar',
          'left'      => 'Left-Side Sidebar',
        )
      ),
    ),
    array(
      'name'          => 'ar_layout',
      'control'       => array(
        'label'       => 'Choice Tag | Cataegory | Archive Layout',
        'type'        => 'select',
        'choices'     => array(
          ''          => '- Select a value -',
          'right'      => 'Right-Side Sidebar',
          'left'      => 'Left-Side Sidebar',
        )
      ),
    ),

    ));


  $options[]            = array(
  'name'              => 'footer',
  'title'             => 'Footer Option',
  'settings'          => array(
    array(
      'name'          => 'f_color',
      'default'       => '#B9AF94',
      'control'       => array(
        'label'       => 'background Color',
        'type'        => 'color',
      ),
    ), array(
      'name'          => 'f_text',
      'default'       => 'wordpress theme Developed by Quazi Sazzad',
      'control'       => array(
        'label'       => 'Copyright Text',
        'type'        => 'text',
      ),
    ),
    array(
      'name'          => 'ft_color',
      'default'       => '#000',
      'control'       => array(
        'label'       => 'Text Color',
        'type'        => 'color',
      ),
    ),
    array(
      'name'          => 'f_size',
      'default'       => '18',
      'control'       => array(
        'label'       => 'Text Font Size',
        'type'        => 'text',
      ),
    ),

    ));


CSFramework_Customize::instance( $options );
