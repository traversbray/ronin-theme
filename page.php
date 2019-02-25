<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ronin Theme
 */

get_header(); ?>

	<div class="container page">

		<div class="row">

			<div class="col-xs-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' );?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</div>

	</div><!-- .container -->

<?php get_footer(); ?>
