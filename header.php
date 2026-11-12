<?php
/**
 * Site header.
 *
 * @package Centro_Estudios_IASD
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-intro" aria-hidden="true">
	<video class="site-intro__video" autoplay muted playsinline preload="auto">
		<source src="https://lavozdelremanente.org/wp-content/uploads/2026/11/animacion1_inicio_v2.mp4" type="video/mp4">
	</video>
</div>
<a class="skip-link" href="#site-content"><?php esc_html_e( 'Saltar al contenido', 'centro-estudios-iasd' ); ?></a>
<div class="site-shell">
	<?php if ( get_theme_mod( 'announcement_enabled', centro_estudios_iasd_default( 'announcement_enabled' ) ) ) : ?>
		<div class="announcement" role="status" aria-label="<?php esc_attr_e( 'Anuncio importante', 'centro-estudios-iasd' ); ?>">
			<div class="announcement__track">
				<span class="announcement__line"><?php echo esc_html( get_theme_mod( 'announcement_text', centro_estudios_iasd_default( 'announcement_text' ) ) ); ?></span>
				<span class="announcement__line" aria-hidden="true"><?php echo esc_html( get_theme_mod( 'announcement_text', centro_estudios_iasd_default( 'announcement_text' ) ) ); ?></span>
			</div>
		</div>
	<?php endif; ?>

	<header class="site-header">
		<div class="header-inner">
			<div class="site-branding">
				<a class="site-branding__home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="site-branding__logo">
						<img
							class="site-branding__logo-image"
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/iasd-logo.jpeg' ) ); ?>"
							alt=""
							width="64"
							height="64"
							fetchpriority="high"
							decoding="async"
						>
					</span>
					<span class="site-branding__text">
						<span class="site-title">
							<span class="site-title__name"><?php esc_html_e( 'Centro de Estudio', 'centro-estudios-iasd' ); ?></span>
							<span class="site-title__location">
								<?php esc_html_e( 'Zona 10', 'centro-estudios-iasd' ); ?>
								<span class="site-title__separator" aria-hidden="true">·</span>
								<?php esc_html_e( 'Próceres', 'centro-estudios-iasd' ); ?>
							</span>
						</span>
					</span>
				</a>
			</div>

			<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
				<span class="menu-toggle__icon" aria-hidden="true"></span>
				<span><?php esc_html_e( 'Menú', 'centro-estudios-iasd' ); ?></span>
			</button>

			<nav class="primary-navigation" id="primary-menu" aria-label="<?php esc_attr_e( 'Navegación principal', 'centro-estudios-iasd' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_id'        => 'primary-menu-list',
						'fallback_cb'    => 'centro_estudios_iasd_primary_menu_fallback',
					)
				);
				?>
			</nav>
		</div>
	</header>
