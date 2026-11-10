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
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
					<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
				<?php else : ?>
					<a class="site-branding__text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span class="site-title"><?php bloginfo( 'name' ); ?></span>
						<?php if ( get_bloginfo( 'description' ) ) : ?>
							<span class="site-description"><?php bloginfo( 'description' ); ?></span>
						<?php endif; ?>
					</a>
				<?php endif; ?>
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
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		</div>
	</header>
