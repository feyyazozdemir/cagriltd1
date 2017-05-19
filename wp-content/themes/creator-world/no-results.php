<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Creator World
 */
?>


	
    <header>
      <h1 class="entry-title"><?php _e( 'Nothing Found', 'creator-world' ); ?></h1>
    </header>

	<div class="blog-post">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_attr__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'creator-world' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'creator-world' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'creator-world' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	

