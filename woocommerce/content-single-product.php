<?php
// КАРТОЧКА ТОВАРА НА СТРАНИЦЕ ТОВАРА ПОДРОБНАЯ ИНФОРМАЦИЯ

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
 <h1 class="product-page__title title"><?php echo $product->name; ?></h1>
 <?php woocommerce_breadcrumb();?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-one', $product ); ?>>
<?php //debug($product)?>
	<div class="product-one__inner">
		<div class="product-one__slide work-slide">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
		</div>
	</div>

	<div class="product__wrapper">
		<div class="product-one__wrapper">
			<div class="product-one__info">
				
				<div class="product-one__box">
					<div class="product-one__box-title">Характеристики</div>
					<?php if(have_rows('harakteristiki_element')) : while(have_rows('harakteristiki_element')) : the_row();?>
					<div class="product-one__item">
						<div class="product-one__item-title">
						<?php the_sub_field('harakteristiki_element_tekst');?>
						</div>
						<div class="product-one__item-text">
						<?php the_sub_field('harakteristiki_element_nazvanie');?>
						</div>
					</div>
					<?php endwhile; endif;?>
				</div>
				
				
				<div class="product-one__box">
					<?php if(!empty(get_field('gabarity_blok'))) : ?>
					<div class="product-one__box-title">
						<div class="product-one__box-title"><?php the_field('gabarity_blok')?></div>
					</div>
					<?php else: ?>
					
					<?php endif;?>

					<?php if(have_rows('gabarity_tovara')) : while(have_rows('gabarity_tovara')) : the_row();?>
					<div class="product-one__item">
						<div class="product-one__item-title">
						<?php the_sub_field('gabarity_tovara_tekst');?>
						</div>
						<div class="product-one__item-text">
						<?php the_sub_field('gabarity_tovara_znachenie');?>
						</div>
					</div>
					<?php endwhile; endif;?>
				</div>
				
			</div>
		</div>
	

		<div class="summary entry-summary product-one__wrapper">
			<div class="product-one__price">
				<?php if(!empty(get_field('czena_tovara_po_zaprosu'))) : ?>
				<div class="price__zapros">
					<?php the_field('czena_tovara_po_zaprosu');?>
					<span>Под заказ</span>
				</div>
				<?php else: ?>
					
				<?php endif;?>
				
				<?php if(!empty($product->regular_price == true)) : ?>
				<div class="product-one__top">
					<!-- <div class="product-one__counter">
						<div class="product-one__price-old">
						<?php echo $product->regular_price;?>
						</div>
						<span>(С НДС)</span>
					</div> -->
					
					<div class="product-one__price-old">
						<?php echo $product->regular_price;?> <strong>руб</strong>
						<span>(С НДС)</span>
					</div>
					<div class="product-one__price-new">
						<?php echo $product->sale_price;?> <strong>руб</strong>
						<span>(Без НДС)</span>
					</div>
				</div>
				<?php else: ?>
					
				<?php endif;?>
				<!-- <div class="product-one__sale">
					<input type="checkbox" class="product-one__sale-input">
					<div class="product-one__sale-text">
						Купить с поверкой (467 руб без НДС)
					</div>
				</div> -->
				<div class="product__sku">
					Артикул: <?php echo $product->sku;?>
				</div>
				<div class="product-one__price-text">В наличии: <?php echo $product->stock_quantity;?></div>
				<div class="product-one__bottom">
					<?php if(!empty(get_field('tekst_knopki'))) : ?>
					<button class="product-one__bottom-zapros btn-modal">
						<?php the_field('tekst_knopki');?>
					</button>
					<?php endif;?>
					<div class="product-one__qty">
						<?php woocommerce_template_single_add_to_cart();?>
					</div>

					<?php if(! empty(get_field('kupit_v_rozniczu_ssylka'))) : ?>
					<a href="<?php the_field('kupit_v_rozniczu_ssylka'); ?>" target="_blank" class="product-one__bottom-btn">Купить в розницу</a>
					<?php endif;?>
					
				</div>
				
				
			</div>
			
		</div>

	</div>
</div>

	<div class="product-block">
		<?php if(!empty(get_field('fajly_tovara_opisanie'))) :?>
		<a href="<?php the_field('fajly_tovara_opisanie');?>" target="_blank" class="product-block__link">Описание типа</a>
		<?php endif;?>

		<?php if(!empty(get_field('fajly_tovara_svidetelstvo'))) :?>
		<a href="<?php the_field('fajly_tovara_svidetelstvo');?>" target="_blank" class="product-block__file">Свидетельство N 70557_18</a>
		<?php endif;?>
		
		<?php if($product->description === true) :?>
			<div class="product-block__title">Описание</div>
		<?php endif;?>
		
		<div class="product-block__desc"><?php echo $product->description;?></div>
	</div>

	<div class="product-upsell">
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
