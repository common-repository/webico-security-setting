<?php
define('DISALLOW_FILE_MODS',true);
define( 'DISALLOW_FILE_EDIT', true );


function wbc_hide_plugin_WbcSetting() {
  global $wp_list_table;
  $hidearr = array('wbc-setting/wbc-setting.php');
  $myplugins = $wp_list_table->items;
  foreach ($myplugins as $key => $val) {
    if (in_array($key,$hidearr)) {
      unset($wp_list_table->items[$key]);
    }
  }
}

add_action('pre_current_active_plugins', 'wbc_hide_plugin_WbcSetting');
