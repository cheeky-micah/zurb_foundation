<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'zurb_foundation' ); ?>
		</div>
		<?php endif; ?>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'zurb_foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; ?>
	</header>

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<?php do_action( 'zurb_foundation_page_before_entry_content' ); ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zurb_foundation' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'zurb_foundation' ), 'after' => '</div>' ) ); ?>
	</div>
	<?php do_action( 'zurb_foundation_page_after_entry_content' ); ?>
	<?php endif; ?>

	<footer class="entry-meta">
		<?php zurb_foundation_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'zurb_foundation' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>

</article>
