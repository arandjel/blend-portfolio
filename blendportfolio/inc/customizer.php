<?php
		
	function wpb_customize_register_general($wp_customize){
		/* Front Page Panel */
		$wp_customize->add_panel( 'general_panel', array(
			'title' => __( 'General Settings', 'blendportfolio' ),
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'priority' => 5
		) );
	}
	
	function wpb_customize_register_general_logo($wp_customize){
		
		/* Gallery options */
		$wp_customize->add_section( 'general_logo' , array(
			'title'       => __( 'Logo options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme logo options','blendportfolio' ),
			'panel'		  => 'general_panel',
			'priority'    => 1
		));

		$wp_customize->add_setting('general_logo_image', array(
		  'default'   => get_bloginfo('template_directory').'/images/logo-colored.png',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'general_logo_image', array(
		  'label'   => __('Logo', 'blendportfolio'),
		  'section' => 'general_logo',
		  'settings' => 'general_logo_image',
		  'priority'  => 10
		)));
	}
	
	function wpb_customize_register_general_nav_background($wp_customize){
		
		/* Gallery options */
		$wp_customize->add_section( 'general_nav_background' , array(
			'title'       => __( 'Navigation background options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme navigation background options','blendportfolio' ),
			'panel'		  => 'general_panel',
			'priority'    => 1
		));

		$wp_customize->add_setting('general_nav_background_image', array(
			'default'   => '',
			'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'general_nav_background_image', array(
			'label'   => __('Background Image', 'blendportfolio'),
			'section' => 'general_nav_background',
			'settings' => 'general_nav_background_image',
			'priority'  => 10
		)));
		
		// Include the Alpha Color Picker control file.
		require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

		// Alpha Color Picker setting.
		$wp_customize->add_setting('general_nav_background_background_color', array(
				'default'     => '#e6e6e6',
				'type'        => 'theme_mod',
				'capability'  => 'edit_theme_options',
				'transport'   => 'postMessage',
				'priority'  => 20
			)
		);

		// Alpha Color Picker control.
		$wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'general_nav_background_background_color',	array(
					'label'         => __( 'Navigation Background Color', 'blendportfolio' ),
					'section'       => 'general_nav_background',
					'settings'      => 'general_nav_background_background_color',
					'show_opacity'  => true, // Optional.
					'palette'	=> array(
						'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
						'rgba(50,50,50,0.8)',
						'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
						'#00CC99' // Mix of color types = no problem
					)
				)
			)
		);
	}
		
	function wpb_customize_register_frontpage($wp_customize){
		/* Front Page Panel */
		$wp_customize->add_panel( 'frontpage_panel', array(
			'title' => __( 'Front Page Settings', 'blendportfolio' ),
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'priority' => 10
		) );
	}
	
	function wpb_customize_register_gallery($wp_customize){
		
		/* Gallery options */
		$wp_customize->add_section( 'frontpage_gallery' , array(
			'title'       => __( 'Gallery showcase options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme gallery appearance options','blendportfolio' ),
			'panel'		  => 'frontpage_panel',
			'priority'    => 1
		));

		$wp_customize->add_setting( 'frontpage_gallery_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'frontpage_gallery_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Gallery visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the gallery will toggle on frontpage.','blendportfolio' ),
				'section' => 'frontpage_gallery',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('showcase_image1', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_1.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image1', array(
		  'label'   => __('Showcase Image 1', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image1',
		  'priority'  => 10
		)));

		$wp_customize->add_setting('showcase_image2', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_2.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image2', array(
		  'label'   => __('Showcase Image 2', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image2',
		  'priority'  => 20
		)));

		$wp_customize->add_setting('showcase_image3', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_3.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image3', array(
		  'label'   => __('Showcase Image 3', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image3',
		  'priority'  => 30
		)));

		$wp_customize->add_setting('showcase_image4', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_4.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image4', array(
		  'label'   => __('Showcase Image 4', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image4',
		  'priority'  => 40
		)));

		$wp_customize->add_setting('showcase_image5', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_5.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image5', array(
		  'label'   => __('Showcase Image 5', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image5',
		  'priority'  => 50
		)));

		$wp_customize->add_setting('showcase_image6', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_6.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image6', array(
		  'label'   => __('Showcase Image 6', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image6',
		  'priority'  => 60
		)));

		$wp_customize->add_setting('showcase_image7', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_7.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image7', array(
		  'label'   => __('Showcase Image 7', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image7',
		  'priority'  => 70
		)));

		$wp_customize->add_setting('showcase_image8', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_8.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image8', array(
		  'label'   => __('Showcase Image 8', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image8',
		  'priority'  => 80
		)));

		$wp_customize->add_setting('showcase_image9', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_9.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image9', array(
		  'label'   => __('Showcase Image 9', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image9',
		  'priority'  => 90
		)));

		$wp_customize->add_setting('showcase_image10', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_10.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image10', array(
		  'label'   => __('Showcase Image 10', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image10',
		  'priority'  => 100
		)));

		$wp_customize->add_setting('showcase_image11', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_11.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image11', array(
		  'label'   => __('Showcase Image 11', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image11',
		  'priority'  => 110
		)));

		$wp_customize->add_setting('showcase_image12', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_12.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image12', array(
		  'label'   => __('Showcase Image 12', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image12',
		  'priority'  => 120
		)));

		$wp_customize->add_setting('showcase_image13', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_13.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image13', array(
		  'label'   => __('Showcase Image 13', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image13',
		  'priority'  => 130
		)));

		$wp_customize->add_setting('showcase_image14', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_14.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image14', array(
		  'label'   => __('Showcase Image 14', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image14',
		  'priority'  => 140
		)));

		$wp_customize->add_setting('showcase_image15', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_15.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image15', array(
		  'label'   => __('Showcase Image 15', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image15',
		  'priority'  => 150
		)));

		$wp_customize->add_setting('showcase_image16', array(
		  'default'   => get_bloginfo('template_directory').'/images/work_16.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image16', array(
		  'label'   => __('Showcase Image 16', 'blendportfolio'),
		  'section' => 'frontpage_gallery',
		  'settings' => 'showcase_image16',
		  'priority'  => 160
		)));
	}
	
	function wpb_customize_register_services($wp_customize){
		/* Services options */
		$wp_customize->add_section( 'frontpage_services' , array(
			'title'       => __( 'Services options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme service options','blendportfolio' ),
			'panel'		  => 'frontpage_panel',
			'priority'    => 2
		));

		$wp_customize->add_setting( 'frontpage_services_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'frontpage_services_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Services visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the services will toggle on frontpage.','blendportfolio' ),
				'section' => 'frontpage_services',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('frontpage_services_heading', array(
		  'default'   => _x('Services', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_heading', array(
		  'label'   => __('Heading', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 2
		));

		$wp_customize->add_setting('frontpage_services_icon1', array(
		  'default'   => _x('icon-strategy', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_icon1', array(
		  'label'   => __('Service 1: Icon', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 11
		));

		$wp_customize->add_setting('frontpage_services_title1', array(
		  'default'   => _x('STRATEGY', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_title1', array(
		  'label'   => __('Service 1: Title', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 12
		));

		$wp_customize->add_setting('frontpage_services_text1', array(
		  'default'   => _x('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_text1', array(
		  'label'   => __('Service 1: Text', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 13
		));

		$wp_customize->add_setting('frontpage_services_icon2', array(
		  'default'   => _x('icon-telescope', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_icon2', array(
		  'label'   => __('Service 2: Icon', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 21
		));

		$wp_customize->add_setting('frontpage_services_title2', array(
		  'default'   => _x('EXPLORE', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_title2', array(
		  'label'   => __('Service 2: Title', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 22
		));

		$wp_customize->add_setting('frontpage_services_text2', array(
		  'default'   => _x('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_text2', array(
		  'label'   => __('Service 2: Text', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 23
		));

		$wp_customize->add_setting('frontpage_services_icon3', array(
		  'default'   => _x('icon-circle-compass', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_icon3', array(
		  'label'   => __('Service 3: Icon', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 31
		));

		$wp_customize->add_setting('frontpage_services_title3', array(
		  'default'   => _x('DIRECTION', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_title3', array(
		  'label'   => __('Service 3: Title', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 32
		));

		$wp_customize->add_setting('frontpage_services_text3', array(
		  'default'   => _x('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_text3', array(
		  'label'   => __('Service 3: Text', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 33
		));

		$wp_customize->add_setting('frontpage_services_icon4', array(
		  'default'   => _x('icon-tools-2', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_icon4', array(
		  'label'   => __('Service 4: Icon', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 41
		));

		$wp_customize->add_setting('frontpage_services_title4', array(
		  'default'   => _x('EXPERTISE', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_title4', array(
		  'label'   => __('Service 4: Title', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 42
		));

		$wp_customize->add_setting('frontpage_services_text4', array(
		  'default'   => _x('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_services_text4', array(
		  'label'   => __('Service 4: Text', 'blendportfolio'),
		  'section' => 'frontpage_services',
		  'priority'  => 43
		));
	}
	
	function wpb_customize_register_testimonials($wp_customize){
		/* Testimonials options */
		$wp_customize->add_section( 'frontpage_testimonials' , array(
			'title'       => __( 'Testimonials options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme testimonials options','blendportfolio' ),
			'panel'		  => 'frontpage_panel',
			'priority'    => 3
		));

		$wp_customize->add_setting( 'frontpage_testimonials_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'frontpage_testimonials_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Testimonials visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the testimonials will toggle on frontpage.','blendportfolio' ),
				'section' => 'frontpage_testimonials',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('frontpage_testimonials_background', array(
		  'default'   => '',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'frontpage_testimonials_background', array(
		  'label'   => __('Testimonial background image', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'settings' => 'frontpage_testimonials_background',
		  'priority'  => 11
		)));

		$wp_customize->add_setting('frontpage_testimonials_image1', array(
		  'default'   => get_bloginfo('template_directory').'/images/testimonial_person2.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'frontpage_testimonials_image1', array(
		  'label'   => __('Testimonial 1: Image', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'settings' => 'frontpage_testimonials_image1',
		  'priority'  => 11
		)));

		$wp_customize->add_setting('frontpage_testimonials_quote1', array(
		  'default'   => _x('Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_quote1', array(
		  'label'   => __('Testimonial 1: Quote', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 12
		));

		$wp_customize->add_setting('frontpage_testimonials_author1', array(
		  'default'   => _x('Ferdinand A. Porsche', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_author1', array(
		  'label'   => __('Testimonial 1: Author', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 13
		));

		$wp_customize->add_setting('frontpage_testimonials_image2', array(
		  'default'   => get_bloginfo('template_directory').'/images/testimonial_person3.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'frontpage_testimonials_image2', array(
		  'label'   => __('Testimonial 2: Image', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'settings' => 'frontpage_testimonials_image2',
		  'priority'  => 21
		)));

		$wp_customize->add_setting('frontpage_testimonials_quote2', array(
		  'default'   => _x('Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_quote2', array(
		  'label'   => __('Testimonial 2: Quote', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 22
		));

		$wp_customize->add_setting('frontpage_testimonials_author2', array(
		  'default'   => _x('Steve Jobs', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_author2', array(
		  'label'   => __('Testimonial 2: Author', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 23
		));

		$wp_customize->add_setting('frontpage_testimonials_image3', array(
		  'default'   => get_bloginfo('template_directory').'/images/testimonial_person4.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'frontpage_testimonials_image3', array(
		  'label'   => __('Testimonial 3: Image', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'settings' => 'frontpage_testimonials_image3',
		  'priority'  => 31
		)));

		$wp_customize->add_setting('frontpage_testimonials_quote3', array(
		  'default'   => _x('I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_quote3', array(
		  'label'   => __('Testimonial 3: Quote', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 32
		));

		$wp_customize->add_setting('frontpage_testimonials_author3', array(
		  'default'   => _x('Frank Chimero', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_testimonials_author3', array(
		  'label'   => __('Testimonial 3: Author', 'blendportfolio'),
		  'section' => 'frontpage_testimonials',
		  'priority'  => 33
		));
	}
	
	function wpb_customize_register_counters($wp_customize){
		/* Counters options */
		$wp_customize->add_section( 'frontpage_counters' , array(
			'title'       => __( 'Counters options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme counters options','blendportfolio' ),
			'panel'		  => 'frontpage_panel',
			'priority'    => 4
		));

		$wp_customize->add_setting( 'frontpage_counters_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'frontpage_counters_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Counters visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the counters will toggle on frontpage.','blendportfolio' ),
				'section' => 'frontpage_counters',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('frontpage_counters_background_image', array(
		  'default'   => get_bloginfo('template_directory').'/images/hero.jpg',
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'frontpage_counters_background_image', array(
		  'label'   => __('Counter background image', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'settings' => 'frontpage_counters_background_image',
		  'priority'  => 2
		)));

		$wp_customize->add_setting('frontpage_counters_label1', array(
		  'default'   => _x('Client', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_label1', array(
		  'label'   => __('Counter 1: Label', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 11
		));

		$wp_customize->add_setting('frontpage_counters_amount1', array(
		  'default'   => _x('67', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_amount1', array(
		  'label'   => __('Counter 1: Amount', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 12
		));

		$wp_customize->add_setting('frontpage_counters_label2', array(
		  'default'   => _x('Photos', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_label2', array(
		  'label'   => __('Counter 2: Label', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 21
		));

		$wp_customize->add_setting('frontpage_counters_amount2', array(
		  'default'   => _x('130', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_amount2', array(
		  'label'   => __('Counter 2: Amount', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 22
		));

		$wp_customize->add_setting('frontpage_counters_label3', array(
		  'default'   => _x('Pixels', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_label3', array(
		  'label'   => __('Counter 3: Label', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 31
		));

		$wp_customize->add_setting('frontpage_counters_amount3', array(
		  'default'   => _x('27232', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_counters_amount3', array(
		  'label'   => __('Counter 3: Amount', 'blendportfolio'),
		  'section' => 'frontpage_counters',
		  'priority'  => 32
		));
	}
	
	function wpb_customize_register_call_for_action($wp_customize){
		/* Call for action options */
		$wp_customize->add_section( 'frontpage_call_for_action' , array(
			'title'       => __( 'Call for action options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme call for action options','blendportfolio' ),
			'panel'		  => 'frontpage_panel',
			'priority'    => 5
		));

		$wp_customize->add_setting( 'frontpage_call_for_action_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'frontpage_call_for_action_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Call for action visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the call for action will toggle on frontpage.','blendportfolio' ),
				'section' => 'frontpage_call_for_action',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('frontpage_call_for_action_heading', array(
		  'default'   => _x('Get in touch', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_call_for_action_heading', array(
		  'label'   => __('Heading', 'blendportfolio'),
		  'section' => 'frontpage_call_for_action',
		  'priority'  => 2
		));

		$wp_customize->add_setting('frontpage_call_for_action_text', array(
		  'default'   => _x('Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_call_for_action_text', array(
		  'label'   => __('Text', 'blendportfolio'),
		  'section' => 'frontpage_call_for_action',
		  'priority'  => 3
		));

		$wp_customize->add_setting('frontpage_call_for_action_btn_url', array(
		  'default'   => _x('#', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_call_for_action_btn_url', array(
		  'label'   => __('Button URL', 'blendportfolio'),
		  'section' => 'frontpage_call_for_action',
		  'priority'  => 4
		));

		$wp_customize->add_setting('frontpage_call_for_action_btn_text', array(
		  'default'   => _x('Learn More', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_call_for_action_btn_text', array(
		  'label'   => __('Button Text', 'blendportfolio'),
		  'section' => 'frontpage_call_for_action',
		  'priority'  => 5
		));
	}
	
	function wpb_customize_register_social($wp_customize){
		/* Social options */
		$wp_customize->add_section( 'frontpage_social' , array(
			'title'       => __( 'Social Settings', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme social options','blendportfolio' ),
			'priority'    => 11
		));

		$wp_customize->add_setting('frontpage_social_url_fb', array(
		  'default'   => _x('#', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_social_url_fb', array(
		  'label'   => __('Facebook URL', 'blendportfolio'),
		  'section' => 'frontpage_social',
		  'priority'  => 11
		));

		$wp_customize->add_setting('frontpage_social_url_twitter', array(
		  'default'   => _x('#', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_social_url_twitter', array(
		  'label'   => __('Twitter URL', 'blendportfolio'),
		  'section' => 'frontpage_social',
		  'priority'  => 12
		));

		$wp_customize->add_setting('frontpage_social_url_instagram', array(
		  'default'   => _x('#', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_social_url_instagram', array(
		  'label'   => __('Instagram URL', 'blendportfolio'),
		  'section' => 'frontpage_social',
		  'priority'  => 13
		));

		$wp_customize->add_setting('frontpage_social_url_linkedin', array(
		  'default'   => _x('#', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('frontpage_social_url_linkedin', array(
		  'label'   => __('Linkedin URL', 'blendportfolio'),
		  'section' => 'frontpage_social',
		  'priority'  => 14
		));
	}
	
	function wpb_customize_register_contact($wp_customize){
		/* Contact Us Page Panel */
		$wp_customize->add_panel( 'contact_panel', array(
			'title' => __( 'Contact Page Settings', 'blendportfolio' ),
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'priority' => 12
		) );
	}
	
	function wpb_customize_register_contact_map($wp_customize){
		/* Map options */
		$wp_customize->add_section('contact_section_map', array(
			'title'       => __( 'Map options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme map options','blendportfolio' ),
			'panel'		  => 'contact_panel',
			'priority'    => 1
		));
		
		$wp_customize->add_setting('contact_section_map_shortcode', array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'blendportfolio_sanitize_text'
		));
		
		$wp_customize->add_control('contact_section_map_shortcode', array(
			'label'    => esc_html__( 'Map shortcode', 'blendportfolio' ),
			'description' => __( 'To use this section please install ','blendportfolio' ) . '<a href="https://wordpress.org/plugins/intergeo-maps/">' . __( 'Intergeo Maps','blendportfolio' ) . '</a>' . __( ' plugin then use it to create a map and paste here the shortcode generated. <br/>For best results, when creating Intergeo map, set container height to 100%','blendportfolio' ),
			'section'  => 'contact_section_map',
			'priority'    => 10
		));
	}
	
	function wpb_customize_register_contact_info($wp_customize){
		/* Map options */
		$wp_customize->add_section('contact_section_info', array(
			'title'       => __( 'Contact info options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme contact info options','blendportfolio' ),
			'panel'		  => 'contact_panel',
			'priority'    => 2
		));

		$wp_customize->add_setting( 'contact_info_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'contact_info_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Contact info visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the contact info will toggle on contact page.','blendportfolio' ),
				'section' => 'contact_section_info',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('contact_section_info_email', array(
		  'default'   => _x('info@domain.com', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('contact_section_info_email', array(
		  'label'   => __('Email', 'blendportfolio'),
		  'section' => 'contact_section_info',
		  'priority'  => 10
		));

		$wp_customize->add_setting('contact_section_info_address', array(
		  'default'   => _x('198 West 21th Street, Suite 721 New York NY 10016', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('contact_section_info_address', array(
		  'label'   => __('Address', 'blendportfolio'),
		  'section' => 'contact_section_info',
		  'priority'  => 20
		));

		$wp_customize->add_setting('contact_section_info_phone', array(
		  'default'   => _x('+123 456 7890', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('contact_section_info_phone', array(
		  'label'   => __('Phone', 'blendportfolio'),
		  'section' => 'contact_section_info',
		  'priority'  => 30
		));
	}
	
	function wpb_customize_register_contact_form($wp_customize){
		/* Map options */
		$wp_customize->add_section('contact_section_form', array(
			'title'       => __( 'Contact info options', 'blendportfolio' ),
			'description' => __( 'Blend Portfolio theme contact form options','blendportfolio' ),
			'panel'		  => 'contact_panel',
			'priority'    => 2
		));

		$wp_customize->add_setting( 'contact_form_toggle', array(
			'default' 	=> 1
		));
		$wp_customize->add_control(
			'contact_form_toggle',
			array(
				'type' => 'checkbox',
				'label' => __( 'Contact form visibility','blendportfolio' ),
				'description' => __( 'If this box is checked, the contact form will toggle on contact page.','blendportfolio' ),
				'section' => 'contact_section_form',
				'priority'    => 1
			)
		);

		$wp_customize->add_setting('contact_section_form_heading', array(
		  'default'   => _x('Get in touch', 'blendportfolio'),
		  'type'      => 'theme_mod'
		));

		$wp_customize->add_control('contact_section_form_heading', array(
		  'label'   => __('Heading', 'blendportfolio'),
		  'section' => 'contact_section_form',
		  'priority'  => 10
		));

		$wp_customize->add_setting('contact_section_form_email', array(
			'default'   => _x(get_option('admin_email'), 'blendportfolio'),
			'type'      => 'theme_mod'
		));

		$wp_customize->add_control('contact_section_form_email', array(
		  'label'   => __('Email where contact form messages will be sent to. Default is admin email.', 'blendportfolio'),
		  'section' => 'contact_section_form',
		  'priority'  => 20
		));
	}

	add_action('customize_register', 'wpb_customize_register_general');
	add_action('customize_register', 'wpb_customize_register_general_logo');
	add_action('customize_register', 'wpb_customize_register_general_nav_background');
	
	add_action('customize_register', 'wpb_customize_register_frontpage');
	add_action('customize_register', 'wpb_customize_register_gallery');
	add_action('customize_register', 'wpb_customize_register_services');
	add_action('customize_register', 'wpb_customize_register_testimonials');
	add_action('customize_register', 'wpb_customize_register_counters');
	add_action('customize_register', 'wpb_customize_register_call_for_action');

	add_action('customize_register', 'wpb_customize_register_social');

	add_action('customize_register', 'wpb_customize_register_contact');
	add_action('customize_register', 'wpb_customize_register_contact_map');
	add_action('customize_register', 'wpb_customize_register_contact_info');
	add_action('customize_register', 'wpb_customize_register_contact_form');
  
	function blendportfolio_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
?>