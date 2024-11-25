<?php
/**
 * Template Name: Доставка
 */
?>
<?php get_header('page');?>
    <main class="main">
      <section class="delivery">
        <div class="container">
          <h1 class="delivery__title title">Доставка</h1>
          <p class="delivery__text">
            Адрес пункта самовывоза и отгрузки: <span>г. Москва, ул. Электродная, д.2 стр.7.</span> Подробнее в разделе контакты. Отправка грузов и самовывоз производятся из пункта самовывоза в <span>г. Москве, расположенного по адресу ул. Электродная, д. 2, стр. 7.</span> Доставка по России производится крупнейшими и зарекомендовавшими себя транспортными компаниями.
            </p>
          <div class="delivery-block">
            <div class="delivery-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/delivery/delivery-1.png" alt="img" class="delivery-block__item-img">
              <div class="delivery-block__wrapper">
                <a href="https://tk-kit.ru/order?&split_variant=a" class="delivery-block__item-price">Рассчитать стоимость доставки</a>
                <a href="https://tk-kit.ru/" class="delivery-block__item-status">Статус доставки груза</a>
              </div>
            </div>
            <div class="delivery-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/delivery/delivery-2.png" alt="img" class="delivery-block__item-img">
              <div class="delivery-block__wrapper">
                <a href="https://pecom.ru/services-are/shipping-request/" class="delivery-block__item-price">Рассчитать стоимость доставки</a>
                <a href="https://pecom.ru/?openAuth=Y" class="delivery-block__item-status">Статус доставки груза</a>
              </div>
            </div>
            <div class="delivery-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/delivery/delivery-3.png" alt="img" class="delivery-block__item-img">
              <div class="delivery-block__wrapper">
                <a href="https://www.dellin.ru/requests/?step=freight&requestType=cargo-single" class="delivery-block__item-price">Рассчитать стоимость доставки</a>
                <a href="https://www.dellin.ru/tracker/" class="delivery-block__item-status">Статус доставки груза</a>
              </div>
            </div>
            <div class="delivery-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/delivery/delivery-4.png" alt="img" class="delivery-block__item-img">
              <div class="delivery-block__wrapper">
                <a href="" class="delivery-block__item-price">Рассчитать стоимость доставки</a>
                <a href="" class="delivery-block__item-status">Статус доставки груза</a>
              </div>
            </div>
            <div class="delivery-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/delivery/delivery-5.png" alt="img" class="delivery-block__item-img">
              <div class="delivery-block__wrapper">
                <a href="https://www.jde.ru/online/calculator.html" class="delivery-block__item-price">Рассчитать стоимость доставки</a>
                <a href="https://www.jde.ru/" class="delivery-block__item-status">Статус доставки груза</a>
              </div>
            </div>
          </div>
          <p class="delivery__text">
            Доставка груза до терминала транспортной компании в г. Москве осуществляется за наш счет. Также возможна отправка грузов другими транспортными компаниями, по пожеланию Заказчика. <span>ООО МИКРОН</span> осуществляет отгрузку каждый будний день.
          </p>
        </div>
      </section>
    </main>
<?php get_footer();?>