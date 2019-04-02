<?php
/*
Template Name: aditionalservices
*/
?>
<?php get_header(); ?>

    <main>
        <section class="container articles">
            <div class="row">
                <div class="col-12">
                    <?php
                    $query = new WP_Query( array( 'category_name' => 'additional-services' ) );
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                        <article class="article row mt-0 mb-0">
<!--                            <div class="col-12 col-lg-4">-->
<!--                                --><?php //the_post_thumbnail(); ?>
<!--                            </div>-->
                            <div class="col-12 mt-3 mt-lg-0">
                                <h3 class="article__heading"><?php the_title(); ?></h3>
                                <div class="article__content"> <?php the_content(); ?> </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="application">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="wp-form__wrap">
                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?php bloginfo('template_url') ?>/images/form-photo2.png" alt="Оставьте заявку прямо сейчас и получите смету под ваш бюджет" class="application__image">
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>