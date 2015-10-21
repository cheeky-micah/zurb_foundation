<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'zurb_foundation' ); ?></h1>
	</header>

	<?php do_action( 'zurb_foundation_page_before_entry_content' ); ?>
	<div class="entry-content">
		<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'zurb_foundation' ); ?></p>
		<?php get_search_form(); ?>
	</div>
	<?php do_action( 'zurb_foundation_page_after_entry_content' ); ?>
</article>
