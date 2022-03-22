<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function plugins_list()
{
    $plugins = array(
        array(
            'name'=>'Divi Builder',
            'slug'=>'divi-builder',
            'required'=>true,
            'source'=>'divi-builder.zip',
            'force_activation'=>true,
            'force_deactivation'=>true,
        ),
        array(
            'name'=>'Woocommerce',
            'slug'=>'woocommerce',
            'required'=>true,
            'source'=>'',
            'force_activation'=>true,
            'force_deactivation'=>true,
        )
    );

    $config = array(
        'id'           => 'kstheme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => get_template_directory_uri() . '/plugins/',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',        
    );
    tgmpa($plugins,$config);
}
add_action('tgmpa_register','plugins_list');