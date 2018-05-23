<?php 
//Declaramos menús
add_action('init', 'register_my_menus');

function register_my_menus () {
    register_nav_menus(
        array (
          'top-menu' => __('Menu Superior'),
          'lat-menu' => __('Menu Lateral')
        )
    );}

 ?>
 
<?php 

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
}

?> 