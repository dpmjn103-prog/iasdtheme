<?php
/**
 * Church location and contact details.
 *
 * @package Centro_Estudios_IASD
 */

$location_address = __( '3ª Avenida, Ciudad de Guatemala, Zona 10, Guatemala, muy cerca del Centro Comercial Los Próceres', 'centro-estudios-iasd' );
$location_query   = rawurlencode( '14.5945581,-90.5144678' );
$map_embed_url    = 'https://maps.google.com/maps?q=' . $location_query . '&output=embed';
$map_link_url     = 'https://www.google.com/maps/place/Iglesia+Adventista+Centro+de+Estudio/@14.5948618,-90.515335,484m/data=!3m1!1e3!4m15!1m8!3m7!1s0x8589a21a720c2ffb:0xc874cabdb47d6e2a!2s3A+Av,+Cdad.+de+Guatemala,+Guatemala!3b1!8m2!3d14.6423941!4d-90.5169375!16s%2Fg%2F1vd3w3jq!3m5!1s0x8589a30046d59307:0x54548a7be7873091!8m2!3d14.5945581!4d-90.5144678!16s%2Fg%2F11zbnpn319?hl=es-US&entry=ttu&g_ep=EgoyMDI2MTEwOC4wIKXMDSoASAFQAw%3D%3D';
?>
<section class="location-section" id="ubicacion" aria-labelledby="location-title">
	<div class="location-section__inner">
		<header class="location-section__heading">
			<p class="eyebrow"><?php esc_html_e( 'Nos encantará recibirte', 'centro-estudios-iasd' ); ?></p>
			<h2 id="location-title"><?php esc_html_e( 'Visítanos este sábado', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Ven a compartir, aprender y crecer en comunidad. Aquí tienes todo lo que necesitas para encontrarnos.', 'centro-estudios-iasd' ); ?></p>
		</header>
		<div class="location-section__layout">
			<div class="location-section__details">
				<article class="location-card">
					<span class="location-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M12 22s8-7.2 8-13a8 8 0 1 0-16 0c0 5.8 8 13 8 13Zm0-10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" /></svg>
					</span>
					<div>
						<h3><?php esc_html_e( 'Dirección', 'centro-estudios-iasd' ); ?></h3>
						<address><?php echo esc_html( $location_address ); ?></address>
					</div>
				</article>
				<article class="location-card">
					<span class="location-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="m6.6 10.8 2.5-2.5-3.2-5L2.7 5c-.6.4-.9 1.1-.7 1.8 1.6 7.3 7.3 13 14.6 14.6.7.2 1.4-.1 1.8-.7l1.7-3.2-5-3.2-2.5 2.5a15.6 15.6 0 0 1-6-6Z" /></svg>
					</span>
					<div>
						<h3><?php esc_html_e( 'Teléfono', 'centro-estudios-iasd' ); ?></h3>
						<a href="tel:+50252747332">+502 5274 7332</a>
					</div>
				</article>
				<article class="location-card">
					<span class="location-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M3 5h18v14H3V5Zm9 7L4 6v12h16V6l-8 6Zm0-2 7-5H5l7 5Z" /></svg>
					</span>
					<div>
						<h3><?php esc_html_e( 'Correo electrónico', 'centro-estudios-iasd' ); ?></h3>
						<a href="mailto:iasdcentrodeestudio@gmail.com">iasdcentrodeestudio@gmail.com</a>
					</div>
				</article>
				<article class="location-card">
					<span class="location-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm1 5v4.6l3.2 1.9-1 1.7-4.2-2.5V7h2Z" /></svg>
					</span>
					<div>
						<h3><?php esc_html_e( 'Horario de atención', 'centro-estudios-iasd' ); ?></h3>
						<p><?php esc_html_e( 'Sábados de 9:30 AM a 6:00 PM', 'centro-estudios-iasd' ); ?></p>
					</div>
				</article>
				<a class="button button--solid location-section__directions" href="<?php echo esc_url( $map_link_url ); ?>" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Cómo llegar con Google Maps', 'centro-estudios-iasd' ); ?>
					<span aria-hidden="true">↗</span>
				</a>
			</div>
			<div class="location-map">
				<iframe
					src="<?php echo esc_url( $map_embed_url ); ?>"
					title="<?php esc_attr_e( 'Mapa de Google de nuestra ubicación en Zona 10, Ciudad de Guatemala', 'centro-estudios-iasd' ); ?>"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
					allowfullscreen
				></iframe>
				<div class="location-map__caption">
					<span><?php esc_html_e( 'Centro de Estudios IASD', 'centro-estudios-iasd' ); ?></span>
					<span><?php esc_html_e( 'Zona 10 · Ciudad de Guatemala', 'centro-estudios-iasd' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>