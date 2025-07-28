<?php
new \Kirki\Panel(
	'solub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'solub Panel', 'solub' ),
		'description' => esc_html__( 'My solub panel Description.', 'solub' ),
	]
);

function solub_header_info(){

    new \Kirki\Section(
	'header_info_section',
	[
		'title'       => esc_html__( 'Header Info', 'solub' ),
		'description' => esc_html__( 'Header Topbar info here.', 'solub' ),
		'panel'       => 'solub_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'solub_header_top_switch',
		'label'       => esc_html__( ' Topbar Switch Field', 'kirki' ),
		'description' => esc_html__( 'Topbar switch control', 'kirki' ),
		'section'     => 'header_info_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'solub_header_right_switch',
		'label'       => esc_html__( ' Header right Switch Field', 'kirki' ),
		'description' => esc_html__( 'Header right switch control', 'kirki' ),
		'section'     => 'header_info_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'solub_time',
		'label'    => esc_html__( 'Time Text', 'kirki' ),
		'section'  => 'header_info_section',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'solub_button_text',
		'label'    => esc_html__( 'Button Text', 'kirki' ),
		'section'  => 'header_info_section',
		'default'  => esc_html__( '+999 3265 464968', 'kirki' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'solub_button_url',
		'label'    => esc_html__( 'Button URL', 'kirki' ),
		'section'  => 'header_info_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);



}

solub_header_info();

function solub_header_offcanvas_section(){
    new \Kirki\Section(
        'header_offcanvas_section',
        [
            'title'       => esc_html__( 'Header offcanvas', 'solub' ),
            'description' => esc_html__( 'Header offcanvas here.', 'solub' ),
            'panel'       => 'solub_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'solub_offcanvas_logo', 
            'label'       => esc_html__( 'Uploaded offcanvas Logo', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'header_offcanvas_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
        ]
		);


	new \Kirki\Field\Repeater(
	[
		'settings' => 'offcanvas_info_repeater',
		'label'    => esc_html__( 'Repeater Control', 'kirki' ),
		'section'  => 'header_offcanvas_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_class'   => 'fa-sharp fa-solid fa-location-dot',
				'info_name'    => '86 Road Broklyn Street, 600',
				'link_url' => '_#',
				'checkbox'    => false,
			],

			[
				'icon_class'   => 'fa-solid fa-envelope',
				'info_name'    => 'Needhelp@company.com ',
				'link_url' => '_#',
				'checkbox'    => false,
			],

			[
				'icon_class'   => 'fa-solid fa-phone',
				'info_name'    => '+92 666 888 0000, 600',
				'link_url' => '_#',
				'checkbox'    => false,
			],
			
		],
		'fields'   => [
			'icon_class'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'kirki' ),
				'description' => esc_html__( 'Fontawesome 5 Class', 'kirki' ),
				'default'     => '',
			],
			'info_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Info Name', 'kirki' ),
				'description' => esc_html__( 'Text here ', 'kirki' ),
				'default'     => '',
			],
			'info_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			
		],
	]
);





}




solub_header_offcanvas_section();







function header_social(){


    new \Kirki\Section(
	'header_social_section',
	[
		'title'       => esc_html__( 'Header social', 'solub' ),
		'description' => esc_html__( 'Header social URL info here.', 'solub' ),
		'panel'       => 'solub_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'fb_URL',
		'label'    => esc_html__( 'Fcebook URL', 'kirki' ),
		'section'  => 'header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'tw_URL',
		'label'    => esc_html__( 'Twitter URL', 'kirki' ),
		'section'  => 'header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'in_URL',
		'label'    => esc_html__( 'Instragram URL', 'kirki' ),
		'section'  => 'header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'p_URL',
		'label'    => esc_html__( 'Pinterest URL', 'kirki' ),
		'section'  => 'header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);





}
header_social();


function solub_header_logo_section(){
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'solub' ),
            'description' => esc_html__( 'Header Topbar info here.', 'solub' ),
            'panel'       => 'solub_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'solub_logo', 
            'label'       => esc_html__( 'Uploaded Logo', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
        ]
    );
}
solub_header_logo_section();




function solub_footer_section(){


    new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer ', 'solub' ),
		'description' => esc_html__( 'Footer social URL info here.', 'solub' ),
		'panel'       => 'solub_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'footer_copyright',
		'label'    => esc_html__( 'Copyright Text', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'Copyright © 2024 Solub. All Rights Reserved.', 'kirki' ),
		
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'f_fb_URL',
		'label'    => esc_html__( 'Fcebook URL', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'f_tw_URL',
		'label'    => esc_html__( 'Twitter URL', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'f_in_URL',
		'label'    => esc_html__( 'Instragram URL', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'f_p_URL',
		'label'    => esc_html__( 'Pinterest URL', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);



}
solub_footer_section();






