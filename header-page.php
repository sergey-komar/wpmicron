<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
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
          <span class="cart-badge"><?php echo count( WC()->cart->get_cart() ); ?></span>
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
              <a href="<?php the_field('prajs_tovarov_skachat', 'options');?>" class="nav__price">Скачать прайс</a>
              <?php
                wp_nav_menu([
                  'theme_location' => 'menu-header-category',
                  'menu_class' => 'menu-visible',
                  'container' => ''
                ]);
              ?>
          </nav>
  
      </div> 
    </div>
  </header>