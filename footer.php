<?php
/**
 * Site footer.
 *
 * @package Centro_Estudios_IASD
 */
?>
	<footer class="site-footer">
		<div class="container footer-main">
			<section class="footer-column" aria-labelledby="footer-about-title">
				<h2 class="footer-brand" id="footer-about-title"><?php esc_html_e( 'Centro de Estudio IASD', 'centro-estudios-iasd' ); ?></h2>
				<p><?php echo esc_html( get_theme_mod( 'footer_about', centro_estudios_iasd_default( 'footer_about' ) ) ); ?></p>
				<div class="footer-contact">
					<?php $email = sanitize_email( get_theme_mod( 'footer_email', centro_estudios_iasd_default( 'footer_email' ) ) ); ?>
					<?php if ( $email ) : ?>
						<p><a href="<?php echo esc_url( 'mailto:' . $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
					<?php endif; ?>
					<?php $phone = sanitize_text_field( get_theme_mod( 'footer_phone', centro_estudios_iasd_default( 'footer_phone' ) ) ); ?>
					<?php if ( $phone ) : ?>
						<p><a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></p>
					<?php endif; ?>
				</div>
				<div class="social-links" aria-label="<?php esc_attr_e( 'Redes sociales', 'centro-estudios-iasd' ); ?>">
					<?php
					$social_defaults = array(
						'facebook'  => 'https://www.facebook.com/profile.php?id=61596404039270',
						'instagram' => 'https://www.instagram.com/iasdcentrodeestudio/',
						'youtube'   => '',
					);
					foreach ( array( 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'youtube' => 'YouTube' ) as $network => $label ) :
						$social_url = get_theme_mod( 'footer_' . $network, centro_estudios_iasd_default( 'footer_' . $network ) );
						if ( ! $social_url ) {
							$social_url = $social_defaults[ $network ];
						}
						if ( $social_url ) :
							?>
							<a href="<?php echo esc_url( $social_url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( $label ); ?>">
								<?php if ( 'facebook' === $network ) : ?>
									<svg class="social-links__icon social-links__icon--facebook" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5h1.7V3.9c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3V10H7.3v3h2.8v8h3.4Z" /></svg>
								<?php elseif ( 'instagram' === $network ) : ?>
									<svg class="social-links__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="5" /><circle cx="12" cy="12" r="4" /><circle class="social-links__dot" cx="17.5" cy="6.8" r="1" /></svg>
								<?php endif; ?>
								<span><?php echo esc_html( $label ); ?></span>
							</a>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="footer-column" aria-labelledby="footer-explore-title">
				<h2 id="footer-explore-title"><?php esc_html_e( 'Explorar', 'centro-estudios-iasd' ); ?></h2>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Explorar', 'centro-estudios-iasd' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_id'        => 'footer-menu',
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>
			</section>

			<section class="footer-column" aria-labelledby="footer-verse-title">
				<h2 id="footer-verse-title"><?php esc_html_e( 'Una palabra para el SÁBADO', 'centro-estudios-iasd' ); ?></h2>
				<blockquote class="footer-verse">
					<p><?php echo esc_html( get_theme_mod( 'footer_verse', centro_estudios_iasd_default( 'footer_verse' ) ) ); ?></p>
					<cite><?php echo esc_html( get_theme_mod( 'footer_verse_reference', centro_estudios_iasd_default( 'footer_verse_reference' ) ) ); ?></cite>
				</blockquote>
			</section>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<p>&copy; 2026 lavozdelremanente.org</p>
				<p><?php esc_html_e( 'Un espacio para aprender, compartir y crecer en la fe.', 'centro-estudios-iasd' ); ?></p>
			</div>
		</div>
	</footer>
	<button class="back-to-top" type="button" aria-label="<?php esc_attr_e( 'Volver al principio de la página', 'centro-estudios-iasd' ); ?>" hidden>
		<span aria-hidden="true">↑</span>
	</button>
</div>
<?php wp_footer(); ?>
</body>
</html>
