<?php

// enable featured image support in our theme
add_theme_support('post-thumbnails');

// enable the menu editor
register_nav_menus();

// Create our own function, and then enqueue our scripts
function addMyStyles()
{
	// wp_enqueue_style(refname, uri, dependencies = default - [], version = default - null, media = default - all)
	
	wp_enqueue_style('spacedebris', get_stylesheet_uri(), ['bootstrap']); // loads style.css
	// third parametr says that style will load first (dependency)

	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'); // loads link

}

// add our function to the wp_enqueue_scripts action hook
add_action('wp_enqueue_scripts', 'addMyStyles');


// load scripts the same way
function addMyScripts()
{
	wp_enqueue_script('bootstrapjs', 'https//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', ['jquery'], null, true); 	

	// custom scripts
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', ['jquery'], '1.0', true); 
}

add_action('wp_enqueue_scripts', 'addMyScripts');

// add filter to add 'active' class to the li of current page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active';
  }
  return $classes;
}