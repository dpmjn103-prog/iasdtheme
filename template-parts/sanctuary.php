<?php
/**
 * Biblical sanctuary and Adventist beliefs.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="sanctuary-section" id="santuario" aria-labelledby="sanctuary-title">
	<div class="sanctuary-section__inner">
		<header class="sanctuary-section__heading">
			<p class="sanctuary-section__eyebrow"><?php esc_html_e( 'Creemos en', 'centro-estudios-iasd' ); ?></p>
			<h2 id="sanctuary-title"><?php esc_html_e( 'El santuario: una imagen del plan de salvación', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Para la fe adventista, el santuario bíblico ayuda a comprender cómo Jesús ofrece su vida por nosotros y hoy intercede por la humanidad en el santuario celestial.', 'centro-estudios-iasd' ); ?></p>
		</header>

		<div class="sanctuary-section__stages">
			<article class="sanctuary-stage">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sanctuary-court.svg' ) . '?ver=' . CENTRO_ESTUDIOS_IASD_VERSION ); ?>" alt="<?php esc_attr_e( 'Ilustración del atrio del santuario con altar y fuente', 'centro-estudios-iasd' ); ?>" loading="lazy" decoding="async">
				<div class="sanctuary-stage__copy">
					<p class="sanctuary-stage__number"><?php esc_html_e( '01 · El atrio', 'centro-estudios-iasd' ); ?></p>
					<h3><?php esc_html_e( 'El sacrificio', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'El altar recuerda que el perdón y la esperanza se encuentran en el sacrificio de Jesucristo.', 'centro-estudios-iasd' ); ?></p>
				</div>
			</article>

			<article class="sanctuary-stage">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sanctuary-holy-place.svg' ) . '?ver=' . CENTRO_ESTUDIOS_IASD_VERSION ); ?>" alt="<?php esc_attr_e( 'Ilustración del lugar santo con candelabro, mesa y altar de incienso', 'centro-estudios-iasd' ); ?>" loading="lazy" decoding="async">
				<div class="sanctuary-stage__copy">
					<p class="sanctuary-stage__number"><?php esc_html_e( '02 · El lugar santo', 'centro-estudios-iasd' ); ?></p>
					<h3><?php esc_html_e( 'La presencia de Dios', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'La luz, el pan y el incienso evocan la guía de Dios, su Palabra y la oración de su pueblo.', 'centro-estudios-iasd' ); ?></p>
				</div>
			</article>

			<article class="sanctuary-stage">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sanctuary-most-holy.svg' ) . '?ver=' . CENTRO_ESTUDIOS_IASD_VERSION ); ?>" alt="<?php esc_attr_e( 'Ilustración del arca del pacto en el lugar santísimo', 'centro-estudios-iasd' ); ?>" loading="lazy" decoding="async">
				<div class="sanctuary-stage__copy">
					<p class="sanctuary-stage__number"><?php esc_html_e( '03 · El lugar santísimo', 'centro-estudios-iasd' ); ?></p>
					<h3><?php esc_html_e( 'Justicia y misericordia', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'El arca señala la importancia de la ley de Dios y su carácter justo y misericordioso.', 'centro-estudios-iasd' ); ?></p>
				</div>
			</article>
		</div>

		<aside class="sanctuary-section__hope">
			<span class="sanctuary-section__hope-mark" aria-hidden="true">
				<svg viewBox="0 0 24 24" focusable="false"><path d="m12 2.8 2.7 5.5 6.1.9-4.4 4.3 1 6.1-5.4-2.9-5.4 2.9 1-6.1-4.4-4.3 6.1-.9L12 2.8Z" /></svg>
			</span>
			<p><strong><?php esc_html_e( 'Nuestra esperanza es Jesús.', 'centro-estudios-iasd' ); ?></strong> <?php esc_html_e( 'Como adventistas, estudiamos el santuario porque sus símbolos y servicios revelan el plan de salvación y el ministerio de Jesús como nuestro Sumo Sacerdote. Comprenderlo fortalece nuestra confianza en su gracia y nuestra esperanza en su regreso.', 'centro-estudios-iasd' ); ?></p>
		</aside>

		<details class="sanctuary-scriptures">
			<summary><?php esc_html_e( 'Citas bíblicas', 'centro-estudios-iasd' ); ?></summary>
			<div class="sanctuary-scriptures__content">
				<blockquote>
					<cite><?php esc_html_e( 'Daniel 8:14', 'centro-estudios-iasd' ); ?></cite>
				</blockquote>
				<blockquote>
					<cite><?php esc_html_e( 'Hebreos 4:14–16', 'centro-estudios-iasd' ); ?></cite>
				</blockquote>
				<blockquote>
					<cite><?php esc_html_e( 'Hebreos 8:1–2', 'centro-estudios-iasd' ); ?></cite>
				</blockquote>
			</div>
		</details>
	</div>
</section>
