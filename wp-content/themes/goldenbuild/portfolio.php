<?php
/*
Template Name: portfolio
Template Post Type: post
*/
?>
<?php get_header(); ?>

<main>
  <section class="portfolio">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <h3 class="portfolio__heading"><?php the_title(); ?></h3>
            <?php the_post();
            the_content(); ?>
        </div>

        <div class="my-3 w-100 clearfix portfolio_links">
          <?php previous_post_link('<span class="prev_link"><i class="fas fa-arrow-left"></i>%link</span>', 'Предыдущая работа', true); ?>
          <?php next_post_link('<span class="next_link">%link<i class="fas fa-arrow-right"></i></span>', 'Следующая работа', true); ?>
        </div>

      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
