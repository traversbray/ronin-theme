<?php
/**
 * The template for displaying all single posts.
 *
 * @package Ronin Theme
 */

get_header(); ?>

	<div class="container page single">

		<div class="row">

			<div class="col-xs-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' );?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</div>

	</div><!-- .container -->

<?php get_footer(); ?>
