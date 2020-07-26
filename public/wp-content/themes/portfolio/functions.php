<?php

// enable featured image support in our theme
add_theme_support('post-thumbnails');

// enable the menu editor
register_nav_menus();

// Create our own function, and then enqueue our scripts
function addMyStylesAndScripts()
{
	// wp_enqueue_style(refname, uri, dependencies = default - [], version = default - null, media = default - all)
	
	// loads style.css
	wp_enqueue_style('portfolio', get_stylesheet_uri()); 

	// bootstrap bundle js
	wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js',['jquery'], null, true);

	// third party plagin Js 	
	wp_enqueue_script('plaginjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js',['bootstrapjs'], null, true); 	

	// load custom scripts
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', ['plaginjs'], '1.0', true);

}

// add our function to the wp_enqueue_scripts action hook
add_action('wp_enqueue_scripts', 'addMyStylesAndScripts');

// add filter to add 'active' class to the li of current page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active';
  }
  return $classes;
}

// adding some classes to main-menu
add_filter( 'nav_menu_link_attributes', 'wpap156165_menu_add_class', 10, 3 );
function wpap156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link js-scroll-trigger'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

// adding some classes to ul menus
function modify_nav_menu_args( $args ) {
 if( true ) {
 $args['menu_class'] .= ' navbar-nav text-uppercase ml-auto';
   }
return $args;
}
add_filter( 'wp_nav_menu_args', 'modify_nav_menu_args' );

