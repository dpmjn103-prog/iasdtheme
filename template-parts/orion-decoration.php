<?php
/**
 * Decorative Orion Nebula image and church logo.
 *
 * @package Centro_Estudios_IASD
 */

$church_logo_id = get_theme_mod( 'custom_logo' );
?>
<section class="orion-decoration" aria-hidden="true">
	<img
		class="orion-decoration__image"
		src="<?php echo esc_url( get_theme_file_uri( '/assets/images/orion-nebula.jpg' ) ); ?>"
		alt=""
		loading="lazy"
		decoding="async"
	>
	<div class="orion-decoration__overlay"></div>
	<div class="orion-decoration__content">
		<span class="orion-decoration__orbit orion-decoration__orbit--outer"></span>
		<span class="orion-decoration__orbit orion-decoration__orbit--inner"></span>
		<div class="orion-decoration__logo">
			<?php if ( $church_logo_id ) : ?>
				<?php echo wp_get_attachment_image( $church_logo_id, 'full', false, array( 'class' => 'orion-decoration__logo-image', 'alt' => '' ) ); ?>
			<?php else : ?>
				<span class="orion-decoration__logo-fallback"><?php esc_html_e( 'Iglesia Adventista del Séptimo Día', 'centro-estudios-iasd' ); ?></span>
			<?php endif; ?>
		</div>
	</div>
	<p class="orion-decoration__credit"><?php esc_html_e( 'Nebulosa de Orión · ESA/NASA/JPL-Caltech', 'centro-estudios-iasd' ); ?></p>
</section>
