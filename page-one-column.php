<?php
/**
 * Template Name: One Column
 *
 * Template for one column
 *
 * @package Ronin Theme
 */

get_header(); ?>

    <div class="container posts custom">

        <?php

            $custom_query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
                'ignore_sticky_posts' => true
            );

            $custom_query = new WP_Query($custom_query_args);

        ?>

        <?php if ( $custom_query->have_posts() ) : ?>

            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <div class="row">

                    <div class="col-xs-12">

                        <?php get_template_part( 'content', 'archive' );?>

                    </div>

                </div>

            <?php endwhile; ?>

            <div class="row">

                <div class="col-xs-12">

                    <?php hm_posts_navigation($custom_query); ?>

                </div>

            </div>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div><!-- .container -->

<?php get_footer(); ?>
