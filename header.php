<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
    
</head>

<body <?php body_class()?>>
    <?php wp_body_open()?>
    
  <header class="header">
    <div class="container">
      <div class="header-top">
        <div class="header-top__left">
          <a href="http://micron/oplata/" class="header-top__left-payment">Оплата</a>
          <a href="http://micron/dostavka/" class="header-top__left-delivery">Доставка</a>
        </div>

        <div class="header-top__center">
            <div class="header-top__box">
              <a href="tel:+74951047245" class="header-top__box-phone">+7 (495) 104-72-45</a>
              <span class="header-top__box-text">Пн - Чт 8:45 - 17:30, Пт 8:45 - 16:00</span>
            </div>
            <div class="header-top__box">
              <a href="tel:+74951047245" class="header-top__box-phone">+7 (495) 104-72-45</a>
              <span class="header-top__box-text">Звонок по России бесплатный</span>
            </div>
        </div>
        
        <div class="header-top__right">
          <a href="mailto:info@micron.ru" class="header-top__right-email">info@micron.ru</a>
        </div>
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
      </div>
 
      <div class="header-center">
        <a href="<?php echo get_home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/home/logo — копия.jpg" alt="img">
        </a>
        <div action="#" class="header-center__search">
          <?php aws_get_search_form( true ); ?>
        </div>
        <a href="http://micron/akczii/" class="header-center__promotion">Акция</a>
        <a href="<?php echo wc_get_cart_url()?>" class="header-center__basket">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/cart.svg" alt="img" class="header-center__basket-img">
          <span><?php echo count( WC()->cart->get_cart() ); ?></span>
        </a>
      </div>
   
      <div class="header-bottom">
        
          <nav class="nav">
            <div class="nav__catalog">Каталог товаров</div>
              <div class="menu-wrapper">
                  <?php
                    wp_nav_menu([
                      'theme_location' => 'menu-header',
                      'menu_class' => 'menu',
                      'container' => ''
                    ]);
                  ?>
              </div>
            <a href="#" class="nav__price">Скачать прайс</a>
              <?php
                wp_nav_menu([
                  'theme_location' => 'menu-header-category',
                  'menu_class' => 'menu-home menu-visible',
                  'container' => ''
                ]);
              ?>
          </nav>
  
      </div> 
    </div>
  </header>

  <main class="main">
    <div class="slider">
        <div class="container">
          <div class="slider-box">
            <div class="slider-box__wrapper" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/images/home/slider_1.jpg');">
              <div class="slider-box__item" >
                <div class="slider-box__item-title">Поставки высококачественного инструмента</div>
                <div class="slider-box__item-text">На промышленные предприятия от производителя</div>
                <button class="slider-box__item-btn btn-modal">Подать заявку</button>
              </div>
            </div>
            <div class="slider-box__wrapper" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/images/home/slider_2.jpg');">
              <div class="slider-box__item slider-box__item--white" >
                <div class="slider-box__item-title">Производим ШВП по чертежам заказчика в минимальные сроки</div>
                <div class="slider-box__item-text">наличие на складе</div>
                <button class="slider-box__item-btn btn-modal">Подать заявку</button>
              </div>
            </div>
          </div>
        </div>
       
      </div>