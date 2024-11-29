<?php

function micron_script() {
    wp_enqueue_style('micron-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2024', 'all' );
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', [], '2024', 'all' );

    wp_enqueue_script('micron-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2024', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], '2024', true);
}
add_action('wp_enqueue_scripts', 'micron_script');



function micron() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider' );


    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в подвале',
        'menu-footer-category' => 'меню в подвале категории',
        'menu-header-category' => 'меню в шапке категории'
    ]);
}
add_action('after_setup_theme', 'micron');


if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Основные настройки',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}


add_action( 'widgets_init', function () {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'wooeshop' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'wooeshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
} );


//УБИРАЕМ span и br в contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    return $content;
});
//УБИРАЕМ span и br в contact form 7

//УБИРАЕМ ТЕГ Р в contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

require_once get_template_directory() . '/inc/woocommerce-hooks.php';


function debug( $data ) {
	echo '<pre>' . print_r( $data, 1 ) . '</pre>';
}



 



 

