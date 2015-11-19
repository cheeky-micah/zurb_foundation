<?php
/**
 * the template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

get_header();

?>

<div class="row">
	<div id="primary" class="site-content small-12 mediums-12 columns">
		<div id="content" role="main">
			<?php do_action( 'zurb_foundation_before_content' ); ?>
			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'zurb_foundation' ); ?></h1>
				</header>

				<div class="entry-content">
					<div data-alert class="alert-box">404!</div>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zurb_foundation' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
			<?php do_action( 'zurb_foundation_after_content' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>