<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ronin Theme
 */

get_header(); ?>

	<div class="container posts index">

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
