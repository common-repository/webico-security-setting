<?php
class WBC_Setting {

  private $wp_location_trading_hour_days = array();

  public function __construct()
  {

      // add_action('init', array($this,'set_location_trading_hour_days'));
      // add_action('init', array($this,'register_location_content_type')); //register location content type
      // add_action('add_meta_boxes', array($this,'add_location_meta_boxes')); //add meta boxes
      // add_action('save_post_wp_locations', array($this,'save_location')); //save location
      // add_action('admin_enqueue_scripts', array($this,'enqueue_admin_scripts_and_styles')); //admin scripts and styles
      // add_action('wp_enqueue_scripts', array($this,'enqueue_public_scripts_and_styles')); //public scripts and styles
      // add_filter('the_content', array($this,'prepend_location_meta_to_content')); //gets our meta data and dispayed it before the content

      register_activation_hook(__FILE__, array($this,'plugin_activate')); //activate hook
      register_deactivation_hook(__FILE__, array($this,'plugin_deactivate')); //deactivate hook

  }

  public function plugin_activate(){

  }
  public function plugin_deactivate(){

  }
}
