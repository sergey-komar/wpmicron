<?php
// КАРТОЧКА ТОВАРА НА СТРАНИЦЕ МАГАЗИНА
defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'catalog-block__item', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>
	
	<div class="catalog-block__item-article"><span>артикул</span><?php echo $product->sku;?></div>

	<a href="<?php the_permalink()?>" class="catalog-block__item-title">
	<?php

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	?>
	</a>

	<?php if(!empty(the_field('czena_tovara_po_zaprosu'))) : ?>
		<div class="price__zapros">
			<?php the_field('czena_tovara_po_zaprosu');?>
			<span>Под заказ</span>
		</div>
	<?php else: ?>
		
	<?php endif;?>

	<?php if(!empty($product->regular_price == true)) : ?>
	<div class="catalog-block__item-price">
		<span class="catalog-block__item-price--old"><?php echo $product->regular_price;?> руб</span>
		<span class="catalog-block__item-price--new"><?php echo $product->sale_price;?> руб</span>
	</div>
	<?php else: ?>
					
	<?php endif;?>

	<div class="catalog-block__item-img">
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
	?>
	</div>
	<div class="catalog-block__item-availability">
		в наличии <?php echo $product->stock_quantity;?>
	</div>
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );
	?>
	
	<div class="page-cart">
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	
	?>
	</div>
	
</div>
