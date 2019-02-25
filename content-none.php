<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ronin Theme
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'hm-base-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_search() ) : ?>

			<p>Sorry, but nothing matched your search for "<?php the_search_query(); ?>". Please try again with some different keywords.</p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p>It seems we can't find what you're looking for. You can try searching for it:</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
