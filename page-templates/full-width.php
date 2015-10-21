<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: zurb_foundation loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content small-12 medium-12 columns">
		<div id="content" role="main">

			<?php do_action( 'zurb_foundation_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<?php do_action( 'zurb_foundation_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<?php do_action( 'zurb_foundation_page_after_entry_content' ); ?>

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'zurb_foundation' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>

				</article>

				<?php do_action( 'zurb_foundation_page_before_comments' ); ?>
				<?php comments_template( '', true ); ?>
				<?php do_action( 'zurb_foundation_page_after_comments' ); ?>

			<?php endwhile; ?>

			<?php do_action( 'zurb_foundation_after_content' ); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>