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
                        <?php the_post(); the_content(); ?>
                    </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
