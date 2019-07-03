<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mariann
 */
?>

		<article id="post-0" class="post no-results not-found">
			<div class="entry-content">
				<div class="page-search-no-results">
				
					<h3><?php esc_html_e( 'Nothing found', 'mariann' ); ?></h3>
					<?php 
					// Site 404 Banner
					mariann_banner_show('404'); 
					?>
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses_post(__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mariann' )), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mariann' ); ?></p>
						<div class="search-form">
						<?php get_search_form(true); ?>
					</div>

					<?php else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mariann' ); ?></p>
						<div class="search-form">
						<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
							<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search &hellip;', 'mariann' ); ?>" /><input type="submit" class="submit btn" id="searchsubmit" value="<?php esc_html_e( 'Search', 'mariann' ); ?>" />
						</form>
					</div>

					<?php endif; ?>
					
					
				</div>
			</div>
		</article>
