<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<header>
			<h1><?php the_author(); ?></h1>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'zurb_foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2>
		</header>
		<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'zurb_foundation_status_avatar', '48' ) ); ?>
	</div>

	<?php do_action( 'zurb_foundation_page_before_entry_content' ); ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zurb_foundation' ) ); ?>
	</div>
	<?php do_action( 'zurb_foundation_page_after_entry_content' ); ?>

	<footer class="entry-meta">
		<?php if ( comments_open() ) : ?>
		<div class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'zurb_foundation' ) . '</span>', __( '1 Reply', 'zurb_foundation' ), __( '% Replies', 'zurb_foundation' ) ); ?>
		</div>
		<?php endif; // comments_open() ?>
		<?php edit_post_link( __( 'Edit', 'zurb_foundation' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article>