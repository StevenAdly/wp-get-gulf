<?php
//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery',    get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), 'null', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');



function callStylesheets()
{
   wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
   wp_enqueue_style('fontawsome',get_template_directory_uri().'/css/fontawesome-all.min.css');
   wp_enqueue_style('util',get_template_directory_uri().'/css/util.css');
   wp_enqueue_style('util',get_template_directory_uri().'/css/animate.min.css');
   wp_enqueue_style('style',get_stylesheet_uri());


   wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(),'null',true);
   wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js', array(),'null',true);
   wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array(),'null',true);
   wp_enqueue_script('functions',get_template_directory_uri().'/js/functions.js', array(),'null',true);
   wp_enqueue_script('wow',get_template_directory_uri().'/js/wow.min.js', array(),'null',true);



   wp_enqueue_script('html5',get_template_directory_uri().'/js/html5shiv.min.js');
wp_script_add_data('html5','conditional','lt IE 9');
wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
wp_script_add_data('respond','conditional','lt IE 9');






}
add_action('wp_enqueue_scripts','callStylesheets');




  //=======================>functions that register menus
function funcMenu()
{
  register_nav_menus(array(
    'header_loc'=> 'header'


  ));
}add_action('init','funcMenu');

require_once('class-wp-bootstrap-navwalker.php');



 ?>
