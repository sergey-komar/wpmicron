<?php


defined( 'ABSPATH' ) || exit;

get_header( 'page' );
?>

		

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );?>


	<?php woocommerce_output_all_notices();?>
	
	<?php woocommerce_product_taxonomy_archive_header();?>
	<?php woocommerce_breadcrumb();?>


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
					<div class="varieties-block__content-text">
						Поверка является необходимой процедурой, производимой в целях подтверждения соответствия средств измерений метрологическим требованиям. Ее проведение является обязательным для средств измерений, применяемых в сфере государственного регулирования и обеспечения единых измерений (ОЕИ). Процедура поверки может быть осуществлена только с СИ, тип которых внесен в Государственный Реестр средств измерений. На нашем сайте такой инструмент имеет соответствующую отметку, так же его можно выбрать с помощью одноименного фильтра внутри раздела.
					</div>
					<div class="varieties-block__content-text">
						Поверка инструмента производится аккредитованными в установленном порядке юридическими лицами и индивидуальными предпринимателями. ООО «Микрон» сотрудничает с сертифицированными центрами метрологического контроля и осуществляет первичную поверку по заявке заказчика. Вы получаете уже поверенный инструмент со всеми необходимыми документами и сертификатами в кратчайшие сроки.
					</div>
					<div class="varieties-block__content-text">
						Приобрести поверенный инструмент можно прямо на нашем сайте. Для этого нужно зайти в карточку товара и поставить в блоке с ценой галочку напротив пункта «купить с поверкой». Вы сразу видите стоимость поверки для данного типа и размера инструмента. Здесь же можно указать необходимое количество товара, стоимость поверки автоматически умножится на эту величину.
					</div>
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
					<div class="varieties-block__content-text">
						<span>Калибр</span> – это контрольный инструмент, предназначенный для проверки параметров, таких как размер, форма и взаимное расположение деталей. Используются в разных отраслях промышленности – машиностроительной, военной, авиационной, космической, а также нефте- и газодобывающей.
					</div>
					<div class="varieties-block__content-text">
						В отличие от измерительных инструментов, калибры не имеют шкалы, но благодаря высокой точности изготовления позволяют провести проверку параметров выпускаемой детали до сотых долей миллиметра. Несомненным плюсом калибра является простота работы с ним, а также скорость контроля параметров, благодаря чему проверка калибрами получила такое широкое распространение не только в нашей стране но и по всему миру.
					</div>
					<div class="varieties-block__content-text">
						Все калибры можно разделить на две большие группы: рабочие и контрольные. Рабочие используются непосредственно для контроля параметров деталей на производстве. Для контроля отверстий применяются пробки, для контроля валов – кольца и скобы. Контрольные калибры выполняются только в виде пробок и внешне ничем не отличаются от рабочих, но имеют более точный размер (квалитет) и предназначены для проверки размеров при производстве рабочих калибров-колец, а также для контроля их износа.
					</div>
				</div>
			<?php endif;?>

			<?php if(is_product_category(21)) :?>
				
				
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 21
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

			<?php if(is_product_category(23)) :?>
				
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 23
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

			<?php if(is_product_category(24)) :?>
				
				<div class="category-block">
					<?php
						$catalog__terms = get_terms([
							'taxonomy' => 'product_cat',
							'orderby'     => 'id', // здесь по какому полю сортировать
							'hide_empty'  => false, // скрывать категории без товаров или нет
							'parent' => 24
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

			<?php if(is_product_category(54)) :?>
				
				<div class="category-block">
					<div class="varieties-block__content-title">Шарико-винтовые передачи (ШВП)</div>
					<div class="varieties-block__content-text">
						Шарико-винтовая передача – разновидность линейного механического привода, обеспечивающего преобразование вращательных движений в поступательные. Конструкция представляет длинный винт с накрученной на него гайкой определенной конфигурации. Внутреннее пространство заполнено металлическими шариками, движущимися по спиралевидной траектории. Они уменьшают трение винта-гайки, обеспечивая высокий КПД передачи.
					</div>
				</div>
				<div class="varieties-block">
					<div class="varieties-block__content">
						<div class="varieties-block__content-title">
							Область применения и преимущества ШВП
						</div>
						<div class="varieties-block__content-text">
							ШВП применяется в авиа и ракетостроении, в автомобилях и других видах транспорта. Функция шарико-винтовой пары в этом случае – контроль движений рулевых реек. Винт-гайка востребованное приспособление и в машиностроении. Парой оснащаются станки ЧПУ, сборочные линии, механические прессы, роботы, установщики деталей.
						</div>
						<div class="varieties-block__content-subtitle">
							По сравнению с другими видами передач винт-гайка отличается:
						</div>
						<ul class="varieties-block__list">
							<li class="varieties-block__list-item">Оптимальным КПД – доходит до 98 %;</li>
							<li class="varieties-block__list-item">Точностью линейных перемещений;</li>
							<li class="varieties-block__list-item">Повышенным ресурсом работы.</li>
						</ul>
					</div>
					<div class="varieties-block__img">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/catalog/shariko-vintovye-peredachi.jpg" alt="">
					</div>
				</div>
				<div class="varieties-block__content-text">
					За счет ШВП в конструкции можно использовать маломощные двигатели, так как не требуется повышенных усилий для перевода агрегата из покоя в движение.
				</div>
				<div class="varieties-block__content-title">
					Критерии выбора шарико-винтовой передачи
				</div>
				<div class="varieties-block__content-text">
					Винт-гайку необходимо выбирать с учетом технологии производства. Метод холодной катки менее затратный, но при этом катаные винты не подходят для особо точных аппаратов. Наша компания «Микрон» в производстве использует шлифовку. Предварительно на заготовках нарезается канавка, и только затем они шлифуются. Технология ненамного дороже по сравнению с катанкой, но при этом обеспечивает высокую точность ШВП.
				</div>
				<div class="varieties-block__content-text">
					Значение в шарико-винтовых передах имеет и шаг. Для низкоскоростных агрегатов подходят винты с мелким шагом, у них повышенная нагрузочная способность и высокий ресурс. Гайки в паре бывают круглые и фланцевые, они в свою очередь делятся на двойные и одинарные.
				</div>
				<div class="varieties-block__content-text">
					В <span>«Микрон»</span> можно обратиться не только для заказа готовых ШВП. Наши сотрудники готовы изготовить детали и по собственным чертежам заказчика.
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
		<div class="notices-box">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );
			?>
		</div>

<?php
if ( woocommerce_product_loop() ) {

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );



get_footer( 'shop' );
