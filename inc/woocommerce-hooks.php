<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


//ОТКЛЮЧЕНИЕ КОПИЙ КАРТИНОК
## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
    'woocommerce_single',
    'woocommerce_thumbnail',
    'woocommerce_gallery_thumbnail',
		'2048x2048',
	] );
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


// КОЛЛИЧЕСТВО ОТОБРАЖЕНИЯ ПОХОЖИХ ТОВАРОВ НА СТРАНИЦЕ ТОВАРА
add_filter( 'woocommerce_output_related_products_args', 'truemisha_rel_products_args', 25 );
 
function truemisha_rel_products_args( $args ) {
	$args[ 'posts_per_page' ] = 3; // сколько штук отображать

	return $args;
}



//УБИРАЕМ ЛИШНИЕ ПОЛЯ
add_filter( 'woocommerce_checkout_fields', 'wpbl_remove_some_fields', 9999 );
 
function wpbl_remove_some_fields( $array ) {
    //unset( $array['billing']['billing_first_name'] ); // Имя
    unset( $array['billing']['billing_last_name'] ); // Фамилия
    //unset( $array['billing']['billing_email'] ); // Email
    unset( $array['order']['order_comments'] ); // Примечание к заказу
     //unset( $array['billing']['billing_phone'] ); // Телефон
   
       unset( $array['billing']['billing_company'] ); // Компания
      // unset( $array['billing']['billing_city'] ); // Населённый пункт

    unset( $array['billing']['billing_address_2'] ); // 2-ая строка адреса 

    //unset( $array['billing']['billing_country'] ); // Страна
   
    unset( $array['billing']['billing_state'] ); // Область / район
    unset( $array['billing']['billing_postcode'] ); // Почтовый индекс
    //unset( $array['billing']['billing_address_1'] ); // 1-ая строка адреса 
    // Возвращаем обработанный массив
    return $array; 
    
}









