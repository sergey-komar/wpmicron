<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<main class="main">
	<section class="catalog">
		<div class="container">

		
			<?php if(is_product_category(15)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 15
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(17)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 17
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(18)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 18
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(20)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 20
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(22)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 22
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(26)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 26
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(27)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 27
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(35)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 35
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(38)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 38
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(40)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 40
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(43)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 43
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(46)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 46
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(49)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 49
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			
			<?php if(is_product_category(50)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 50
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(51)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 51
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(55)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 55
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			<?php if(is_product_category(61)) :?>
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 61
													]);
					?>
					<?php foreach($catalog__terms as $catalog__term) : 
						$woo_cat_id = $catalog__term->term_id; //category ID
						$category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
						$thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						
					?>
					<a href="<?php echo get_term_link($catalog__term);?>" class="category-block__item">
						<img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
						<div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
					</a>
					<?php endforeach;?>
				</div>
			<?php endif;?>

			
		
		


