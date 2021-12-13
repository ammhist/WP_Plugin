<?php

/**
 * @package projectPlugin
 */
/**
 * Plugin Name: WebDev QR Code Generator
 * Description: Creates a QR Code for websites
 * Version: 1.0.0
 * Author: GoonSquad
 * License GPLv2 or Later
 */

 defined('ABSPATH') or die('Error');

 class projectPlugin
 {
     function __construct($string)
     {
         echo $string;
     }

     function activate()
     {

     }

     function deactivate()
     {

     }
 }
     if(class_exists('projectPlugin')){
         $projectPlugin = new projectPlugin('Hello World');
     }

     register_activation_hook(__FILE__,array($projectPlugin, 'activate'));

     register_deactivation_hook(__FILE__,array($projectPlugin, 'deactivate'));
    
     add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );
     add_action( 'admin_menu', 'myplugin_add_sublevel_menu' );
     
     // if admin area
     if ( is_admin()) {
         // include the dependencies
         require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
         require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
     }

     