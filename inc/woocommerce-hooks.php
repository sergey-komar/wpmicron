<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

//ОТКЛЮЧЕНИЕ КОПИЙ КАРТИНОК
add_action( 'after_setup_theme', 'remove_plugin_image_sizes', 999 );

function remove_plugin_image_sizes(){
	remove_image_size( 'crop' );
}
add_action( 'after_setup_theme', 'remove_plugin_image_sizes_one', 999 );
function remove_plugin_image_sizes_one(){
	remove_image_size( 'woocommerce_single' );
}
add_action( 'after_setup_theme', 'remove_plugin_image_sizes_two', 999 );
function remove_plugin_image_sizes_two(){
	remove_image_size( 'woocommerce_single' );
}
add_action( 'after_setup_theme', 'remove_plugin_image_sizes_three', 999 );
function remove_plugin_image_sizes_three(){
	remove_image_size( 'woocommerce_gallery_thumbnail' );
}


//Отключаем распродажу в карточке товара на странице магазина
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
//Отключаем рейтинг в карточке товара на странице магазина

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 10);

//Отключаем цену которая через хук и подключаем в шаблоне content-product через глобальную переменную product в карточке товара на странице магазина
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);


// Отключаем уведомление о добавлении в корзину на странице магазины карточки товара
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);


//отключаем ссылку в которую обернута карточка товара на странице товара
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 10);

// отключаем табы в карточке товара на странице товара
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

// ОТКЛЮЧАЕМ РАСПРОРДАЖУ В КАРТОЧКЕ ТОВАРА НА СТРАНИЦЕ ТОВАРА
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

// ОТКЛЮЧАЕМ хлебные крошки и подключаем выше функцией там где нам нужно
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);



//AJAX ДЛЯ КОРЗИНЫ иконки кол-во
add_filter( 'woocommerce_add_to_cart_fragments', function ( $fragments ) {
	$fragments['span.cart-badge'] = '<span class="badge text-bg-warning cart-badge bg-warning rounded-circle">' . count( WC()->cart->get_cart() ) . '</span>';
	return $fragments;
} );









