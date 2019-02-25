<?php
/**
 * The template for displaying search results pages.
 *
 * @package Ronin Theme
 */

get_header(); ?>

	<div class="container posts search">

		<?php if ( have_posts() ) : ?>

			<div class="row">

				<div class="col-xs-12">

					<h1 class="page-title">Search</h1>

					<p>Display search results for "<?php the_search_query(); ?>":</p>

				</div>

			</div>

			<hr>

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

		<?php else: ?>

			<div class="row">

				<div class="col-xs-12">

					<?php get_template_part( 'content', 'none' ); ?>

				</div>

			</div>

		<?php endif; ?>

	</div><!-- .container -->

<?php get_footer(); ?>
