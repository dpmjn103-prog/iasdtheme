<?php
/**
 * Church location and Google Maps directions.
 *
 * @package Centro_Estudios_IASD
 */

$location_query = rawurlencode( '3ª Avenida, Ciudad de Guatemala (01010)' );
$map_embed_url  = 'https://maps.google.com/maps?q=' . $location_query . '&output=embed';
$map_link_url   = 'https://www.google.com/maps/search/?api=1&query=' . $location_query;
?>
<section class="location-section" id="ubicacion" aria-labelledby="location-title">
	<div class="location-section__inner">
		<div class="location-section__content">
			<p class="eyebrow"><?php esc_html_e( 'Nos encantará recibirte', 'centro-estudios-iasd' ); ?></p>
			<h2 id="location-title"><?php esc_html_e( 'Visítanos este sábado', 'centro-estudios-iasd' ); ?></h2>
			<p class="location-section__intro"><?php esc_html_e( 'Acompáñanos; será un gusto darte la bienvenida.', 'centro-estudios-iasd' ); ?></p>
			<div class="location-address">
				<span class="location-address__icon" aria-hidden="true">
					<svg viewBox="0 0 24 24" focusable="false">
						<path d="M12 22s8-7.2 8-13a8 8 0 1 0-16 0c0 5.8 8 13 8 13Zm0-10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
					</svg>
				</span>
				<div>
					<h3><?php esc_html_e( 'Dirección', 'centro-estudios-iasd' ); ?></h3>
					<address><?php esc_html_e( '3ª Avenida, Ciudad de Guatemala (01010)', 'centro-estudios-iasd' ); ?></address>
				</div>
			</div>
			<a class="button button--solid location-section__link" href="<?php echo esc_url( $map_link_url ); ?>" target="_blank" rel="noopener noreferrer">
				<?php esc_html_e( 'Cómo llegar con Google Maps', 'centro-estudios-iasd' ); ?>
			</a>
		</div>
		<div class="location-map">
			<iframe
				src="<?php echo esc_url( $map_embed_url ); ?>"
				title="<?php esc_attr_e( 'Mapa de Google de nuestra ubicación en Ciudad de Guatemala', 'centro-estudios-iasd' ); ?>"
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				allowfullscreen
			></iframe>
		</div>
	</div>
</section>
