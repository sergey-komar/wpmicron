<?php
/**
 * Template Name: Акции
 */
?>
<?php get_header('page');?>
    <main class="main">
      <section class="catalog">
        <div class="container">
          <h1 class="catalog__title title">Акционные товары</h1>
          <div class="catalog-block">
            <?php echo do_shortcode('[sale_products per_page="8"]')?>
   
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>