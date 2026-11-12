<?php
/**
 * Decorative Orion Nebula and church logo section.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="orion-feature" aria-labelledby="orion-feature-title">
	<div class="orion-feature__content">
		<div class="orion-feature__logo-frame">
			<img
				class="orion-feature__logo"
				src="<?php echo esc_url( get_theme_file_uri( '/assets/images/iasd-logo.jpeg' ) ); ?>"
				alt="<?php esc_attr_e( 'Logotipo del Centro de Estudio IASD', 'centro-estudios-iasd' ); ?>"
				loading="lazy"
				decoding="async"
			>
		</div>
		<div class="orion-feature__copy">
			<p class="orion-feature__eyebrow"><?php esc_html_e( 'Nuestra esperanza', 'centro-estudios-iasd' ); ?></p>
			<h2 id="orion-feature-title"><?php esc_html_e( 'Esperamos el advenimiento de Jesús', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Contemplamos la inmensidad de la creación con la esperanza puesta en la promesa de su regreso.', 'centro-estudios-iasd' ); ?></p>
		</div>
	</div>
	<p class="orion-feature__credit">
		<?php esc_html_e( 'Nebulosa de Orión: ', 'centro-estudios-iasd' ); ?>
		<a href="https://www.eso.org/public/images/eso1103a/" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'ESO/Igor Chekalin', 'centro-estudios-iasd' ); ?></a>
	</p>
</section>
