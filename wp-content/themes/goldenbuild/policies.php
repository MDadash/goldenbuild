<?php
/*
Template Name: policies
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
    <section class="policies">
        <div class="container">
            <div class="row">

                    <div class="col-12">
                        <h3 class="policies__heading text-center my-3"><?php the_title(); ?></h3>
                        <?php the_post(); the_content(); ?>
                    </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
