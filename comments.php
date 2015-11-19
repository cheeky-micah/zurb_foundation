<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to zurb_foundation_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
  return;
?>

<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
          printf(
            _n(
              'One thought on &ldquo;%2$s&rdquo;',
              '%1$s thoughts on &ldquo;%2$s&rdquo;',
              get_comments_number(),
              'zurb_foundation'
            ),
            number_format_i18n( get_comments_number() ),
            '<span>' . get_the_title() . '</span>'
          );
      ?>
    </h2>

    <ol class="commentlist">
      <?php wp_list_comments( array( 'callback' => 'zurb_foundation_comment', 'style' => 'ol' ) ); ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav id="comment-nav-below" class="navigation" role="navigation">
        <h2 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'zurb_foundation' ); ?></h2>
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zurb_foundation' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zurb_foundation' ) ); ?></div>
      </nav>
    <?php endif; ?>

    <?php
      /* If there are no comments and comments are closed, let's leave a note.
       * But we only want the note on posts and pages that had comments in the first place.
       */
      if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="nocomments"><?php _e( 'Comments are closed.' , 'zurb_foundation' ); ?></p>
      <?php endif;
    ?>

  <?php endif; ?>

  <?php comment_form(); ?>

</div>