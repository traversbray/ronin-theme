<?php
/**
 * Template Name: Splash Page
 *
 * Template for a splash page.
 *
 * @package Ronin Theme
 */

get_header('opening'); ?>

    <div class="page splash">

    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <header>

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <header class="entry-header">

                            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

                        </header><!-- .entry-header -->

                    </div>

                </div>

            </div>

        </header>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            }
                        ?>

                    </div>

                    <div class="col-sm-6">

                        <div class="entry-content">

                            <?php the_content(); ?>

                        </div>

                    </div>

                </div>

            </div>

        </article>

    <?php endwhile; endif; ?>

    </div><!-- .page.splash -->

<?php get_footer(); ?>
