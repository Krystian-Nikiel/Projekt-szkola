<?php

function krysian_customize_register( $wp_customize ) {

	$wp_customize->add_section('krysian_header_section',  array(

		'title' => 'Header'

	));

	$wp_customize->add_setting('header_logo',  array(

		'type' => 'theme_mod'

	));

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'header_logo_control',
			array(
  				'label' => 'Logo header',
  				'section' => 'krysian_header_section',
					'settings' => 'header_logo',
  				'mime_type' => 'image',
			)
		)
	);

	$wp_customize->add_section('krysian_footer_section',  array(

		'title' => 'Stopka'

	));

	$wp_customize->add_setting('footer_copyright',  array(

		'type' => 'theme_mod',
		'default' => '©Adam Rucki 2016 - prawa zastrzeżone '

	));

	$wp_customize->add_control(
		'footer_copyright_control',
		array(

			'type' => 'textarea',
			'label' => 'Edytuj copyright',
			'section' => 'krysian_footer_section',
			'settings' => 'footer_copyright'

		)
	);

}
add_action( 'customize_register', 'krysian_customize_register' );
