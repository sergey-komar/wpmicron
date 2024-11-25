<?php
/**
 * Template Name: Контакты
 */
?>
<?php get_header('page');?>
    <main class="main">
      <section class="contacts">
        <div class="container">
          <h1 class="contacts__title title">Контакты</h1>
          <div class="contacts-block">
            <div class="contacts-block__item">
              <div class="contacts-block__top">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/location.svg" alt="img" class="contacts-block__top-img">
                <div class="contacts-block__top-title">Пункт самовывоза</div>
              </div>
              <div class="contacts-block__item-text">г. Москва, ул. Электродная, д. 2, стр. 12</div>
            </div>
            <div class="contacts-block__item">
              <div class="contacts-block__top">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/phone.svg" alt="img" class="contacts-block__top-img">
                <div class="contacts-block__top-title">Телефоны</div>
              </div>
              <a href="tel:+74951047245" class="contacts-block__item-link">+7 (495) 104-72-45</a>
            </div>
            <div class="contacts-block__item">
              <div class="contacts-block__top">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/clock.svg" alt="img" class="contacts-block__top-img">
                <div class="contacts-block__top-title">Часы работы</div>
              </div>
              <div class="contacts-block__item-text">пн-чт: 8.45 – 17.30</div>
              <div class="contacts-block__item-text">пт: 8.45 – 16.00</div>
            </div>
            <div class="contacts-block__item">
              <div class="contacts-block__top">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/mail.svg" alt="img" class="contacts-block__top-img">
                <div class="contacts-block__top-title">Email</div>
              </div>
              <a href="mailto:info@microntools.ru" class="contacts-block__item-link">info@microntools.ru</a>
            </div>
          </div>

          <div class="contacts-map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af723d00faa2e6c184967402dd9d146f1ca02c1843e29fe32715bc820fb725772&amp;source=constructor" width="100%"  frameborder="0"></iframe>
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>