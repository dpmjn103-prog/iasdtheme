<?php
/**
 * Comments template.
 *
 * @package Centro_Estudios_IASD
 */

if ( post_password_required() ) {
	return;
}
?>
<section class="comments-area" id="comments">
	<?php if ( have_comments() ) : ?>
		<h2><?php esc_html_e( 'Conversación', 'centro-estudios-iasd' ); ?></h2>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php the_comments_pagination(); ?>
	<?php endif; ?>
	<?php
	comment_form(
		array(
			'title_reply' => __( 'Comparte tu comentario', 'centro-estudios-iasd' ),
		)
	);
	?>
</section>
