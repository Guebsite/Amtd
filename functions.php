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

<?php 
if (function_exists('register_sidebar')) {
	 register_sidebar(array(
	 	 'name'=>'Sidebar-Home',
         'before_widget' => '<div class="container">',
	 	 'after_widget'	=>  '</div>',
         'before_title'	=>  '<h4 class="h4">',
	 	 'after_title'	=>  '</h4>'
	 ));
}

?>

<?php
if (function_exists('register_sidebar')) {
	 register_sidebar(array(
	 	 'name'=>'Sidebar-Areas',
         'id' => 'sidebar-areas',
         'before_widget' => '<div class="container">',
	 	 'after_widget'	=>  '</div>',
         'before_title'	=>  '<h4 class="h4">',
	 	 'after_title'	=>  '</h4>'
	 ));
}
?>




 