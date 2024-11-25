<?php
/**
 * Template Name: Оплата
 */
?>
<?php get_header('page');?>
    <main class="main">
      <section class="payment">
        <div class="container">
          <h1 class="payment__title title">Оплата</h1>
          <p class="payment__text">
            Компания "ООО Микрон" работает только с юридическими лицами.
            Оплата производится по безналичному расчету, после согласования заказа и отправки счета на электронную почту.
          </p>
          <div class="payment__subtitle">Для выставления счета необходимо указать следующие данные:
          </div>
          <ul class="payment__list">
            <li class="payment__list-item">Реквизиты компании</li>
            <li class="payment__list-item">
              Должность и ФИО представителя, который обладает правом подписи
            </li>
            <li class="payment__list-item">Фактический, юридический и почтовый адреса компании</li>
            <li class="payment__list-item">Контактный телефон, факс</li>
          </ul>

          <div class="payment-box">
            <h3 class="payment-box__title title">Реквизиты</h3>
            <p class="payment-box__text">
              <span>Полное наименование:</span>Общество с ограниченной ответственностью «Микрон»
            </p>
            <p class="payment-box__text">
              <span>Сокращенное наименование:</span>ООО «Микрон»
            </p>
            <p class="payment-box__text">
              <span>Юридический, фактический и почтовый адрес:</span>
              107023 г. Москва, Семеновский переулок, дом 15
            </p>
            
            <div class="payment-box__subtitle">Банковские реквизиты:</div>
            <p class="payment-box__text">
              <span>Расчетный счет:</span>40702810138000063550 в ПАО Сбербанк, г. Москва, ул. Большая Семеновская, 28
            </p>
            <p class="payment-box__text">
              <span>Корреспондентский счет:</span>30101810400000000225
            </p>
            <p class="payment-box__text">
              <span>БИК:</span>044525225
            </p>
            <p class="payment-box__text">
              <span>ИНН:</span>7719471570
            </p>
            <p class="payment-box__text">
              <span>КПП:</span>771901001
            </p>
            <p class="payment-box__text">
              <span>ОГРН:</span>1177746893280
            </p>
            <p class="payment-box__text">
              <span>ОКПО:</span>19257440
            </p>
            <p class="payment-box__text">
              <span>ИФНС:</span>7719
            </p>
            <p class="payment-box__text">
              <span>ПФР:</span>087-415-023242
            </p>
            <p class="payment-box__text">
              <span>ФСС:</span>7729075176:
            </p>
            <a href="tel:+74951047245" class="payment-box__text">
              <span>Тел.:</span>+7 (495) 104-72-45
            </a>
            <a href="mailto:info@microntools.ru" class="payment-box__text">
              <span>Эл. почта:</span>info@microntools.ru
            </a>
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>