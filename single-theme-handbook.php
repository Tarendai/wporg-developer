<?php namespace DevHub;
/**
 * The Template for displaying all single posts.
 *
 * @package wporg-developer
 */

get_header(); ?>

	<div id="content-area" class="has-sidebar">

		<?php breadcrumb_trail(); ?>

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'handbook'); ?>

			<?php wporg_developer_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_footer(); ?>