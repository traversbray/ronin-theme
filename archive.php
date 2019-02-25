<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ronin Theme
 */

get_header(); ?>

	<div class="container posts archive">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">

					<div class="col-xs-12">

						<?php get_template_part( 'content', 'archive' );?>

					</div>

				</div>

			<?php endwhile; ?>

			<div class="row">

				<div class="col-xs-12">

					<?php hm_posts_navigation(); ?>

				</div>

			</div>

		<?php endif; ?>

	</div><!-- .container -->

<?php get_footer(); ?>
