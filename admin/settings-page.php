<?php
if (!defined("ABSPATH")) {
    exit; // Exit if accessed directly
  }
// change to sub-level administrative menu
function myplugin_add_sublevel_menu() {
    add_submenu_page(
        'options-general.php',
        'Practice MyPlugin Settings',
        'Practice MyPlugin',
        'manage_options',
        'myplugin',
        'myplugin_display_settings_page'
    );
}

