<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content small-12 medium-8 columns">
		<div id="content" role="main">

			<?php do_action( 'zurb_foundation_before_content' ); ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			    <?php do_action( 'zurb_foundation_page_before_comments' ); ?>
				<?php comments_template( '', true ); ?>
				<?php do_action( 'zurb_foundation_page_after_comments' ); ?>

			<?php endwhile; ?>

			<?php do_action( 'zurb_foundation_after_content' ); ?>

		</div>
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>