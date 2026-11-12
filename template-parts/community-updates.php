<?php
/**
 * Community news, projects, and ways to connect.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="community-section" id="comunidad" aria-labelledby="community-title">
	<div class="community-section__inner">
		<header class="community-section__heading">
			<p class="community-section__eyebrow"><?php esc_html_e( 'Novedades y comunidad', 'centro-estudios-iasd' ); ?></p>
			<h2 id="community-title"><?php esc_html_e( 'Lo que estamos viviendo juntos', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Proyectos, campañas y espacios de conexión abiertos para ti.', 'centro-estudios-iasd' ); ?></p>
		</header>

		<div class="community-grid">
			<article class="community-card community-card--featured" id="a-quien-apoyamos">
				<div class="community-card__top">
					<span class="community-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M4 4.5a2.5 2.5 0 0 1 2.5-2.5H21v17H6.5A2.5 2.5 0 0 0 4 21.5v-17Z" /><path d="M4 18.5A2.5 2.5 0 0 1 6.5 16H21M8 7h9M8 10h6" /></svg>
					</span>
					<span class="community-card__label"><?php esc_html_e( 'A quién apoyamos', 'centro-estudios-iasd' ); ?></span>
				</div>
				<div class="community-card__brand">
					<img
						class="community-card__logo"
						src="<?php echo esc_url( 'https://lavozdelremanente.org/wp-content/uploads/2026/11/XtmhqwyTQ2WbPykyZpHz_Rf3654MF4NPTikiv.avif' ); ?>"
						alt="<?php esc_attr_e( 'Logotipo de Open Minds GT', 'centro-estudios-iasd' ); ?>"
						width="80"
						height="80"
						loading="lazy"
						decoding="async"
					>
					<h3><?php esc_html_e( 'OpenMindsGT', 'centro-estudios-iasd' ); ?></h3>
				</div>
				<div class="community-card__photos">
					<img
						src="<?php echo esc_url( 'https://lavozdelremanente.org/wp-content/uploads/2026/11/Gracias-a-los-que-llegaron-Los-esperamos-para-el-proximo-Open-Minds-%F0%9F%99%8C%F0%9F%8F%BB.jpg' ); ?>"
						alt="<?php esc_attr_e( 'Conversatorio de Open Minds GT con un expositor y público', 'centro-estudios-iasd' ); ?>"
						loading="lazy"
						decoding="async"
					>
					<img
						src="<?php echo esc_url( 'https://lavozdelremanente.org/wp-content/uploads/2026/11/836277595_18022855586939939_905877585876962257_n.jpg' ); ?>"
						alt="<?php esc_attr_e( 'Público reunido durante un evento de Open Minds GT', 'centro-estudios-iasd' ); ?>"
						loading="lazy"
						decoding="async"
					>
				</div>
				<p><?php esc_html_e( 'Apoyamos este canal que busca transmitir a los espectadores el mayor entendimiento sobre el mundo que nos rodea desde una perspectiva espiritual respecto a la economía, política, ciencia y religión, basados en argumentos y fundamentos históricos.', 'centro-estudios-iasd' ); ?></p>
				<a class="community-card__link" href="https://www.youtube.com/@OpenMindsGT" target="_blank" rel="noopener noreferrer">
					<svg class="community-card__youtube-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="2.5" y="5" width="19" height="14" rx="4" /><path d="m10 9 5 3-5 3z" /></svg>
					<?php esc_html_e( 'Visitar el canal de YouTube', 'centro-estudios-iasd' ); ?>
					<span aria-hidden="true">↗</span>
				</a>
			</article>

			<article class="community-card community-card--campaigns" id="lo-nuevo">
				<div class="community-card__top">
					<span class="community-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" /><path d="M8 7h8M8 11h8" /></svg>
					</span>
					<span class="community-card__label"><?php esc_html_e( 'Lo nuevo', 'centro-estudios-iasd' ); ?></span>
				</div>
				<h3><?php esc_html_e( 'Campañas', 'centro-estudios-iasd' ); ?></h3>
				<p><?php esc_html_e( 'Series especiales de estudio abiertas al público, con temas centrales de la Biblia. Fechas y detalles se anuncian por nuestras redes.', 'centro-estudios-iasd' ); ?></p>
			</article>

			<a class="community-card community-card--prayer" id="peticion-oracion" href="mailto:iasdcentrodeestudio@gmail.com?subject=Quiero%20que%20oren%20por%20mi">
				<div class="community-card__top">
					<span class="community-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M12 21s-8-4.4-8-11a4.5 4.5 0 0 1 8-2.9A4.5 4.5 0 0 1 20 10c0 6.6-8 11-8 11Z" /><path d="M12 8v6M9 11h6" /></svg>
					</span>
					<span class="community-card__label"><?php esc_html_e( 'Estamos contigo', 'centro-estudios-iasd' ); ?></span>
				</div>
				<h3><?php esc_html_e( 'Queremos orar por ti', 'centro-estudios-iasd' ); ?></h3>
				<p><?php esc_html_e( 'Envíanos tu petición al correo de la iglesia. Oramos como comunidad.', 'centro-estudios-iasd' ); ?></p>
				<span class="community-card__link">
					<?php esc_html_e( 'iasdcentrodeestudio@gmail.com', 'centro-estudios-iasd' ); ?>
					<span aria-hidden="true">→</span>
				</span>
			</a>

			<a class="community-card community-card--contact" href="mailto:iasdcentrodeestudio@gmail.com?subject=Contacto%20-%20IASD%20Centro%20de%20Estudio">
				<div class="community-card__top">
					<span class="community-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M4 5h16v14H4z" /><path d="m4 7 8 6 8-6" /></svg>
					</span>
					<span class="community-card__label"><?php esc_html_e( 'Conversemos', 'centro-estudios-iasd' ); ?></span>
				</div>
				<h3><?php esc_html_e( 'Contáctanos', 'centro-estudios-iasd' ); ?></h3>
				<p><?php esc_html_e( 'Escríbenos con cualquier pregunta o duda. Respondemos con gusto.', 'centro-estudios-iasd' ); ?></p>
				<span class="community-card__link">
					<?php esc_html_e( 'iasdcentrodeestudio@gmail.com', 'centro-estudios-iasd' ); ?>
					<span aria-hidden="true">→</span>
				</span>
			</a>
		</div>
	</div>
</section>
