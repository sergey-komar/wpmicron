<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header();?>
    <section class="category" >
        <div class="container">
        <h3 class="category__title title">Популярные категории</h3>
        <div class="category-block">

            <?php
                global $product;
                $catalog__terms = get_terms([
                    'taxonomy' => 'product_cat',
                    'orderby'     => 'id', // здесь по какому полю сортировать
                    'hide_empty'  => false, // скрывать категории без товаров или нет

                                            ]);
            ?>
           
           
            <?php foreach($catalog__terms as $catalog__term) : 
                $woo_cat_id = $catalog__term->term_id; //category ID
                $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
                $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
                $poly = get_field('populyarnye_kategorii', $catalog__term);
            ?>
            <?php if(! empty($poly)) :?>
            <a href="<?php echo get_term_link($catalog__term->term_id);?>" class="category-block__item">
                <img src="<?php echo $thumbnail_image_url?>" alt="img" class="category-block__item-img">
                <div class="category-block__item-title"><?php echo $catalog__term->name;?></div>
            </a>
            <?php else:?>
              
            <?php endif;?>
            <?php endforeach;?>

        </div>
               
        <a href="<?php the_field('katalog_skachat', 'options');?>" target="_blank" class="category__btn btn">Каталог инструмента</a>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h3 class="advantages__title title">Наши преимущества</h3>
            <div class="advantages-block">
            <div class="advantages-block__item">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/advantages-1.svg" alt="img" class="advantages-block__item-img">
                <div class="advantages-block__item-title">Сроки отгрузки</div>
                <div class="advantages-block__item-text">
                Выставление счета в день заказа. Четкое соблюдение сроков отгрузки.
                </div>
            </div>
            <div class="advantages-block__item">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/advantages-2.svg" alt="img" class="advantages-block__item-img">
                <div class="advantages-block__item-title">Большой ассортимент</div>
                <div class="advantages-block__item-text">
                Множество видов продукции под любые цели. Редкие позиции в наличие.
                </div>
            </div>
            <div class="advantages-block__item">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/advantages-3.svg" alt="img" class="advantages-block__item-img">
                <div class="advantages-block__item-title">Гибкая система скидок</div>
                <div class="advantages-block__item-text">
                Подпишитесь на Акции на сайте и узнавайте первым о выгодных преложениях!
                </div>
            </div>
            <div class="advantages-block__item">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/advantages-4.svg" alt="img" class="advantages-block__item-img">
                <div class="advantages-block__item-title">Отсрочка платежа</div>
                <div class="advantages-block__item-text">Постоянным клиентам отсрочка платежа до 60 дней.</div>
            </div>
            </div>
        </div>
    </section>

    <section class="production">
        <div class="container">
            <h3 class="production__title title">Производство и продажа инструмента и оборудования</h3>
            <div class="production-block">
            <div class="production-block__info">
                <p class="production-block__info-text">
                Компания <span>"Микрон"</span> предлагает Вашему вниманию тысячи наименований высокоточного измерительного, металлорежущего инструмента, шарико-винтовых передач, а так же слесарно-монтажного инструмента, калибров нефтяного и общепромышленного назначения.
                Мы представляем инструмент таких брендов как Micron, ЧИЗ, Ситомо, Shan, Shahe, Калиброн, Эталон и других известных производителей.
                </p>
                <p class="production-block__info-text">
                Это продукция высокого уровня, отвечающая всем требованиям качества, надежности и долговечности.
                </p>
                <p class="production-block__info-text">
                Нашу продукцию используют на машиностроительных, металлообрабатывающих предприятиях, предприятиях атомной отрасли, а так же в нефтедобыче и многих других сферах промышленности.
                </p>
                <p class="production-block__info-text">
                Компания объединяет 3 производства и осуществляет поставки продукции по всей территории России.
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('vakansii'))?>" class="production-block__info-btn btn">Посмотреть вакансии</a>
            </div>
            <div class="production-block__desc">
                <div class="production-block__desc-title">
                <span>16</span>
                Лет на рынке
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/about-2.png" alt="img" class="production-block__desc-img">
                <div class="production-block__desc-title">
                <span>3</span>Производства
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/about-1.png" alt="img" class="production-block__desc-img">
                <div class="production-block__desc-title">
                <span>35</span>
                Товарных категорий
                </div>
                <a href="<?php echo get_permalink(get_page_by_path('o-kompanii'))?>" class="production-block__desc-link">Подробнее</a>
            </div>
            </div>
            <p class="production__text">
            ООО "Микрон" находится в процессе постоянного развития и стремится увеличить свою долю рынка измерительного инстурмента. Мы нацелены на долгосрочное сотрудничество и заинтересованы в ответственных и внимательных сотрудниках. Опыт работы в продажах и сфере b2b, конечно же приветствуется, но это не обязательное условие. Если Вы способный и заинтересованы в работе у нас, мы так же рассмотрим Вашу кандидатуру.Все работники оформляются согласно ТК РФ.
            </p>
        </div>
    </section>

    <div class="verification">
        <div class="container">
            <div class="verification__title title">Поверка и калибровка си</div>
            <p class="verification__text">
            Наш партнёр - <a href="https://calibronrmc.ru/">РМЦ Калиброн оказывает услуги по поверке и калибровке измерительного инструмента.</a>Приоритетными направлениями являются: проведение работ по проверке линейно- угловых средств измерений, калибровке средств допускового контроля (калибров). поверке средств измерения давления вакуума, температуры, времени и частоты, веса и массы, химического состава веществ и другие.
            </p>
            <a href="https://calibronrmc.ru/" class="verification__btn btn">Перейти</a>
        </div>
    </div>
<?php get_footer();?>