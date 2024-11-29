</main>

    <footer class="footer">
      <div class="container">
        <div class="footer-block">
          <div class="footer-block__item">
            <div class="footer-block__item-title">Меню</div>
           
            <?php
              wp_nav_menu([
                'theme_location' => 'menu-footer',
                'menu_class' => 'footer-block__menu',
                'container' => ''
              ]);
            ?>
          </div>
          <div class="footer-block__item">
            <div class="footer-block__item-title">Каталог</div>
            <?php
            wp_nav_menu([
              'theme_location' => 'menu-footer-category',
              'menu_class' => 'footer-block__menu',
              'container' => 'nav'
            ])
            ?>
            
          </div>
          <div class="footer-block__item">
            <div class="footer-block__item-title">Адрес</div>
            <div class="footer-block__item-address">г. Москва, ул. Электродная, д. 2, стр. 12</div>
            <div class="footer-block__item-text">Офис: с 8:45 до 17:30, в пятницу до 16:00</div>
            <div class="footer-block__item-text">Склад: с 10:00 до 16:00, в пятницу до 15:00</div>
          </div>
          <div class="footer-block__item">
            <div class="footer-block__item-title">Информация</div>
            <a href="tel:+74951047245" class="footer-block__item-phone">+7 (495) 104-72-45</a>
            <div class="footer-block__item-text">Пн - Чт 8:45 - 17:30, Пт 8:45 - 16:00</div>
            <button class="footer-block__item-btn btn-modal">Перезвонить мне</button>
            <a href="mailto:info@micron.ru" class="footer-block__item-email ">Написать письмо</a>
          </div>
        </div>
      </div>
    </footer>
   
    <div class="modal">
      <div class="modal__inner">
          <div class="modal__inner-block">
              <div  class="modal-form">
                  <?php echo do_shortcode('[contact-form-7 id="5194bca" title="Форма"]')?>
                  <div  class="modal__close">&times;</div>
                  <p class="modal-form__text">
                    Нажимая кнопку «Отправить», я даю своё согласие на <a href="#">обработку персональных данных.</a>
                  </p>
              </div>
          </div>
      </div>
    </div>

  <div class="btnUp">&uarr;</div>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <?php wp_footer();?>
</body>

</html>