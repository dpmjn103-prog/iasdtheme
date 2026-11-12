<?php
/**
 * Bank details for donations.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="donations-section" id="donaciones" aria-labelledby="donations-title">
	<div class="donations-section__inner">
		<header class="donations-section__heading">
			<p class="eyebrow"><?php esc_html_e( 'Gracias por apoyar esta obra', 'centro-estudios-iasd' ); ?></p>
			<h2 id="donations-title"><?php esc_html_e( 'Donaciones', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Tu generosidad ayuda a sostener este espacio de estudio, fe y comunidad.', 'centro-estudios-iasd' ); ?></p>
		</header>

		<div class="donations-card">
			<div class="donations-card__banner">
				<svg viewBox="0 0 48 48" aria-hidden="true" focusable="false">
					<path d="M5 18 24 6l19 12H5Zm4 4h6v15H9V22Zm12 0h6v15h-6V22Zm12 0h6v15h-6V22ZM5 41h38v3H5v-3Zm2-6h34v3H7v-3Z" />
				</svg>
				<p><?php esc_html_e( 'Puedes realizar tu ofrenda a la cuenta bancaria institucional', 'centro-estudios-iasd' ); ?></p>
			</div>

			<div class="donations-card__account">
				<div class="donations-card__bank">
					<img
						class="donations-card__bank-logo"
						src="<?php echo esc_url( 'https://lavozdelremanente.org/wp-content/uploads/2026/11/Nuevo_Logo_Banrural.png' ); ?>"
						alt="<?php esc_attr_e( 'Banrural', 'centro-estudios-iasd' ); ?>"
						loading="lazy"
						decoding="async"
					>
				</div>

				<div class="donations-card__details">
					<p class="donations-card__label"><?php esc_html_e( 'Cuenta monetaria', 'centro-estudios-iasd' ); ?></p>
					<p class="donations-card__number">03103200416078</p>
					<p class="donations-card__recipient">
						<?php esc_html_e( 'A nombre de', 'centro-estudios-iasd' ); ?>
						<strong><?php esc_html_e( 'Iglesia Adventista del Séptimo Día Centro de Estudio', 'centro-estudios-iasd' ); ?></strong>
					</p>
				</div>
			</div>

			<div class="donations-card__thanks">
				<svg viewBox="0 0 48 48" aria-hidden="true" focusable="false">
					<path d="M24 42 6.7 25.8C-1 18.5 4.1 6 14 6c4.2 0 7.5 2.2 10 5.5C26.5 8.2 29.8 6 34 6c9.9 0 15 12.5 7.3 19.8L24 42Zm0-4.1 14.5-13.6c5.4-5.1 1.8-14.4-5.5-14.4-3.6 0-6.2 2.4-9 6.1-2.8-3.7-5.4-6.1-9-6.1-7.3 0-10.9 9.3-5.5 14.4L24 37.9Z" />
				</svg>
				<p><?php esc_html_e( '¡Gracias por ser parte de esta obra!', 'centro-estudios-iasd' ); ?></p>
			</div>
		</div>
	</div>
</section>
