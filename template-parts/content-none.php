<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Game of thrones
 */

?>

<section class="no-result not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'got' ); ?></h1>
	</header>

	<div class="page-content">
		<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) {
			?>
				<p>
					<?php
						printf(
							wp_kses(
								__( 'Ready to publish your first post? <a href="%s">Get started here</a>', 'got' ),
								[
										'a' => [
												'href' => []
										]
								]
							),
							esc_url( admin_url( 'post-new.php' ) )
						)
					?>
				</p>
			<?php
			} elseif ( is_search() ) {
				?>
				<p><?php esc_html_e( 'Sorry but nothing matched your search item. Please try again with some different keywords', 'got'  ); ?></p>
				<?php
				get_search_form();
			} else {
				?>
				<p><?php esc_html_e( 'It seems that we cannot find what you are looking for . Perhaps search can help', 'got'  ); ?></p>
				<?php
				get_search_form();
			}
		?>
	</div>
</section>
