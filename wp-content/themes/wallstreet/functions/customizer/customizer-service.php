<?php
function wallstreet_service_customizer( $wp_customize ) {
//Service section panel
$wp_customize->add_panel( 'wallstreet_service_options', array(
		'priority'       => 600,
		'capability'     => 'edit_theme_options',
		'title'      => __('Service settings', 'wallstreet'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Enable Service section', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 50,
   	) );
	
	
	//Show and hide Service section
	$wp_customize->add_setting(
	'wallstreet_pro_options[service_section_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_section_enabled]',
    array(
        'label' => __('Enable Service section','wallstreet'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
//service section one
	$wp_customize->add_section( 'service_section_one' , array(
		'title'      => __('Service one', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_one]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_one]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_one]',
				'section' => 'service_section_one',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_one]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_one]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_one',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_one]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_one]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_one',
        'type' => 'textarea',	
    )
);
//Second service

$wp_customize->add_section( 'service_section_two' , array(
		'title'      => __('Service two','wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 200,
   	) );


$wp_customize->add_setting( 'wallstreet_pro_options[service_image_two]',array('default' => get_template_directory_uri().'/images/service2.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_two]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_two]',
				'section' => 'service_section_two',
				'type' => 'upload',
			)
		)
	);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_two]',
    array(
        'default' => __('WordPress themes','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_title_two]',
    array(
        'label' => __('Title' ,'wallstreet'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_two]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option',
    )	
);
$wp_customize->add_control(
		'wallstreet_pro_options[service_description_two]',
		array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_two',
        'type' => 'textarea',
    )
);
//Third Service section
$wp_customize->add_section( 'service_section_three' , array(
		'title'      => __('Service three', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 300,
   	) );


$wp_customize->add_setting( 'wallstreet_pro_options[service_image_three]',array('default' => get_template_directory_uri().'/images/service3.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_three]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_three]',
				'section' => 'service_section_three',
				'type' => 'upload',
			)
		)
	);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_three]',
    array(
        'default' => __('Easy to use','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_title_three]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_three]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_description_three]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_three',
        'type' => 'textarea',
    )
);

//service section four
	$wp_customize->add_section( 'service_section_four' , array(
		'title'      => __('Service four', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_four]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_four]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_four]',
				'section' => 'service_section_four',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_four]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_four]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_four',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_four]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_four]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_four',
        'type' => 'textarea',	
    )
);
//service section five
	$wp_customize->add_section( 'service_section_five' , array(
		'title'      => __('Service five', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_five]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_five]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_five]',
				'section' => 'service_section_five',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_five]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_five]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_five',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_five]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_five]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_five',
        'type' => 'textarea',	
    )
); 
//service section six
	$wp_customize->add_section( 'service_section_six' , array(
		'title'      => __('Service six', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_six]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_six]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_six]',
				'section' => 'service_section_six',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_six]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_six]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_six',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_six]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_six]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_six',
        'type' => 'textarea',	
    )
); 
//service section seven
	$wp_customize->add_section( 'service_section_seven' , array(
		'title'      => __('Service seven', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_seven]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_seven]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_seven]',
				'section' => 'service_section_seven',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_seven]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_seven]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_seven',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_seven]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_seven]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_seven',
        'type' => 'textarea',	
    )
);
//service section eight
	$wp_customize->add_section( 'service_section_eight' , array(
		'title'      => __('Service eight', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_eight]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_eight]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_eight]',
				'section' => 'service_section_eight',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_eight]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_eight]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_eight',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_eight]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_eight]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_eight',
        'type' => 'textarea',	
    )
);        
 //service section nine
	$wp_customize->add_section( 'service_section_nine' , array(
		'title'      => __('Service nine', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_nine]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_nine]',
			array(
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_nine]',
				'section' => 'service_section_nine',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_nine]',
    array(
        'default' => __('Product Design','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_nine]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_nine',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_nine]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_nine]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_nine',
        'type' => 'textarea',	
    )
);       
$wp_customize->add_section( 'more_service' , array(
		'title'      => __('Add more services', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 400,
   	) );	
	
class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more services? Then upgrade to Pro.','wallstreet');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo 'http://webriti.com/wallstreet/';?>" target="_blank" class="service" id="review_pro"><?php _e('Upgrade to Pro','wallstreet' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'service_pro',
    array(
        'default' =>  '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'service_pro', array(	
		'section' => 'more_service',
		'setting' => 'service_pro',
    ))
);	
}
add_action( 'customize_register', 'wallstreet_service_customizer' );
?>