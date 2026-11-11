<?php
/**
 * Theme setup and customization.
 *
 * @package Centro_Estudios_IASD
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CENTRO_ESTUDIOS_IASD_VERSION', '1.0.1' );

/**
 * Register theme features and navigation locations.
 */
function centro_estudios_iasd_setup() {
	load_theme_textdomain( 'centro-estudios-iasd', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 320,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'editor-styles'
	);
	add_editor_style( 'style.css' );
	add_theme_support(
		'align-wide'
	);
	add_theme_support(
		'responsive-embeds'
	);
	add_theme_support(
		'wp-block-styles'
	);

	register_nav_menus(
		array(
			'primary' => __( 'Menú principal', 'centro-estudios-iasd' ),
			'footer'  => __( 'Menú Explorar del pie de página', 'centro-estudios-iasd' ),
		)
	);
}
add_action( 'after_setup_theme', 'centro_estudios_iasd_setup' );

/**
 * Display the default primary navigation when no custom menu is assigned.
 */
function centro_estudios_iasd_primary_menu_fallback() {
	$home_current_class = is_front_page() ? ' class="current-menu-item"' : '';
	?>
	<ul id="primary-menu-list">
		<li<?php echo $home_current_class; ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo is_front_page() ? ' aria-current="page"' : ''; ?>><?php esc_html_e( 'Inicio', 'centro-estudios-iasd' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/#nosotros' ) ); ?>"><?php esc_html_e( 'Nosotros', 'centro-estudios-iasd' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/#comunidad' ) ); ?>"><?php esc_html_e( 'Ministerios', 'centro-estudios-iasd' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/#programa-sabados' ) ); ?>"><?php esc_html_e( 'Actividades', 'centro-estudios-iasd' ); ?></a></li>
		<li><a href="<?php echo esc_url( 'mailto:centrodestudioiasd@gmail.com?subject=Informaci%C3%B3n%20sobre%20donaciones' ); ?>"><?php esc_html_e( 'Donaciones', 'centro-estudios-iasd' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/#ubicacion' ) ); ?>"><?php esc_html_e( 'Contacto', 'centro-estudios-iasd' ); ?></a></li>
	</ul>
	<?php
}

/**
 * Enqueue theme assets.
 */
function centro_estudios_iasd_enqueue_assets() {
	wp_enqueue_style(
		'centro-estudios-iasd-style',
		get_stylesheet_uri(),
		array(),
		CENTRO_ESTUDIOS_IASD_VERSION
	);
	wp_enqueue_script(
		'centro-estudios-iasd-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		CENTRO_ESTUDIOS_IASD_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'centro_estudios_iasd_enqueue_assets' );

/**
 * Exclude WordPress's untouched sample post from the posts page.
 *
 * @param WP_Query $query Main query.
 */
function centro_estudios_iasd_exclude_sample_post( $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! $query->is_home() ) {
		return;
	}

	$sample_post = get_page_by_path( 'hello-world', OBJECT, 'post' );
	if ( ! $sample_post ) {
		return;
	}

	$sample_content = preg_replace( '/<!--.*?-->/s', '', $sample_post->post_content );
	$sample_content = trim( preg_replace( '/\s+/', ' ', wp_strip_all_tags( $sample_content ) ) );
	if ( 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!' !== $sample_content ) {
		return;
	}

	$excluded_posts   = (array) $query->get( 'post__not_in' );
	$excluded_posts[] = $sample_post->ID;
	$query->set( 'post__not_in', array_values( array_unique( array_map( 'absint', $excluded_posts ) ) ) );
}
add_action( 'pre_get_posts', 'centro_estudios_iasd_exclude_sample_post' );

/**
 * Return the default value for a theme setting.
 *
 * @param string $setting Theme mod name.
 * @return mixed
 */
function centro_estudios_iasd_default( $setting ) {
	$defaults = array(
		'announcement_enabled'  => false,
		'announcement_text'     => __( 'Aviso importante: consulta aquí las novedades del Centro de Estudios.', 'centro-estudios-iasd' ),
		'announcement_bg'       => '#003b63',
		'announcement_color'    => '#ffffff',
		'announcement_speed'    => 18,
		'announcement_font_size'=> 14,
		'hero_image'            => '',
		'hero_eyebrow'          => __( 'Fe, comunidad y aprendizaje', 'centro-estudios-iasd' ),
		'hero_title'            => __( 'Un espacio para crecer en la Palabra.', 'centro-estudios-iasd' ),
		'hero_description'     => __( 'Estudiamos la Biblia, fortalecemos nuestra fe y compartimos esperanza en comunidad.', 'centro-estudios-iasd' ),
		'cta_visit_text'        => __( 'Visítanos este sábado', 'centro-estudios-iasd' ),
		'cta_visit_url'         => '',
		'cta_visit_style'       => 'solid',
		'cta_study_text'        => __( 'Conoce cómo estudiamos', 'centro-estudios-iasd' ),
		'cta_study_url'         => '',
		'cta_study_style'       => 'outline',
		'footer_about'          => __( 'Somos una comunidad dedicada al estudio de la Biblia, el crecimiento espiritual y el servicio.', 'centro-estudios-iasd' ),
		'footer_email'          => '',
		'footer_phone'          => '',
		'footer_facebook'       => '',
		'footer_instagram'      => '',
		'footer_youtube'        => '',
		'footer_verse'          => __( 'Acuérdate del día de reposo para santificarlo.', 'centro-estudios-iasd' ),
		'footer_verse_reference'=> __( 'Éxodo 20:8', 'centro-estudios-iasd' ),
	);

	return isset( $defaults[ $setting ] ) ? $defaults[ $setting ] : '';
}

/**
 * Sanitize a button style choice.
 *
 * @param string $value Submitted choice.
 * @return string
 */
function centro_estudios_iasd_sanitize_button_style( $value ) {
	return in_array( $value, array( 'solid', 'outline' ), true ) ? $value : 'solid';
}

/**
 * Register Customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function centro_estudios_iasd_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'centro_announcement',
		array(
			'title'    => __( 'Anuncio superior', 'centro-estudios-iasd' ),
			'priority' => 28,
		)
	);

	$wp_customize->add_setting(
		'announcement_enabled',
		array(
			'default'           => centro_estudios_iasd_default( 'announcement_enabled' ),
			'sanitize_callback' => 'wp_validate_boolean',
		)
	);
	$wp_customize->add_control(
		'announcement_enabled',
		array(
			'label'   => __( 'Mostrar el anuncio superior', 'centro-estudios-iasd' ),
			'section' => 'centro_announcement',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'announcement_text',
		array(
			'default'           => centro_estudios_iasd_default( 'announcement_text' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'announcement_text',
		array(
			'label'       => __( 'Texto del anuncio', 'centro-estudios-iasd' ),
			'description' => __( 'El texto se desplaza verticalmente y se repite para mantener el movimiento continuo.', 'centro-estudios-iasd' ),
			'section'     => 'centro_announcement',
			'type'        => 'textarea',
		)
	);

	foreach ( array( 'announcement_bg', 'announcement_color' ) as $color_setting ) {
		$wp_customize->add_setting(
			$color_setting,
			array(
				'default'           => centro_estudios_iasd_default( $color_setting ),
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$color_setting,
				array(
					'label'   => 'announcement_bg' === $color_setting ? __( 'Color de fondo', 'centro-estudios-iasd' ) : __( 'Color del texto', 'centro-estudios-iasd' ),
					'section' => 'centro_announcement',
				)
			)
		);
	}

	foreach (
		array(
			'announcement_speed'      => array( 18, 8, 60, __( 'Velocidad (segundos)', 'centro-estudios-iasd' ) ),
			'announcement_font_size'  => array( 14, 11, 22, __( 'Tamaño del texto (px)', 'centro-estudios-iasd' ) ),
		) as $setting => $control_data
	) {
		$wp_customize->add_setting(
			$setting,
			array(
				'default'           => centro_estudios_iasd_default( $setting ),
				'sanitize_callback' => 'absint',
				'validate_callback' => 'centro_estudios_iasd_validate_range',
			)
		);
		$wp_customize->add_control(
			$setting,
			array(
				'label'       => $control_data[3],
				'section'     => 'centro_announcement',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => $control_data[1],
					'max'  => $control_data[2],
					'step' => 1,
				),
			)
		);
	}

	$wp_customize->add_section(
		'centro_homepage',
		array(
			'title'       => __( 'Portada y botones', 'centro-estudios-iasd' ),
			'description' => __( 'Configura la portada de la página de inicio. El contenido adicional se organiza con bloques de Gutenberg.', 'centro-estudios-iasd' ),
			'priority'    => 30,
		)
	);

	$wp_customize->add_setting(
		'hero_image',
		array(
			'default'           => centro_estudios_iasd_default( 'hero_image' ),
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero_image',
			array(
				'label'       => __( 'Imagen de fondo de la portada', 'centro-estudios-iasd' ),
				'description' => __( 'Recomendado: imagen horizontal de al menos 1800 × 1000 px.', 'centro-estudios-iasd' ),
				'section'     => 'centro_homepage',
			)
		)
	);

	$hero_fields = array(
		'hero_eyebrow'      => array( __( 'Texto superior', 'centro-estudios-iasd' ), 'text' ),
		'hero_title'        => array( __( 'Título principal', 'centro-estudios-iasd' ), 'text' ),
		'hero_description'  => array( __( 'Descripción', 'centro-estudios-iasd' ), 'textarea' ),
	);
	foreach ( $hero_fields as $setting => $field ) {
		$wp_customize->add_setting(
			$setting,
			array(
				'default'           => centro_estudios_iasd_default( $setting ),
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			$setting,
			array(
				'label'   => $field[0],
				'section' => 'centro_homepage',
				'type'    => $field[1],
			)
		);
	}

	foreach (
		array(
			'visit' => array(
				'text'  => 'cta_visit_text',
				'url'   => 'cta_visit_url',
				'style' => 'cta_visit_style',
				'label' => __( 'Botón 1: Visítanos este sábado', 'centro-estudios-iasd' ),
			),
			'study' => array(
				'text'  => 'cta_study_text',
				'url'   => 'cta_study_url',
				'style' => 'cta_study_style',
				'label' => __( 'Botón 2: Conoce cómo estudiamos', 'centro-estudios-iasd' ),
			),
		) as $cta
	) {
		$wp_customize->add_setting(
			$cta['text'],
			array(
				'default'           => centro_estudios_iasd_default( $cta['text'] ),
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			$cta['text'],
			array(
				'label'   => sprintf( __( '%s: texto', 'centro-estudios-iasd' ), $cta['label'] ),
				'section' => 'centro_homepage',
				'type'    => 'text',
			)
		);
		$wp_customize->add_setting(
			$cta['url'],
			array(
				'default'           => centro_estudios_iasd_default( $cta['url'] ),
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			$cta['url'],
			array(
				'label'   => sprintf( __( '%s: enlace', 'centro-estudios-iasd' ), $cta['label'] ),
				'section' => 'centro_homepage',
				'type'    => 'url',
			)
		);
		$wp_customize->add_setting(
			$cta['style'],
			array(
				'default'           => centro_estudios_iasd_default( $cta['style'] ),
				'sanitize_callback' => 'centro_estudios_iasd_sanitize_button_style',
			)
		);
		$wp_customize->add_control(
			$cta['style'],
			array(
				'label'   => sprintf( __( '%s: estilo', 'centro-estudios-iasd' ), $cta['label'] ),
				'section' => 'centro_homepage',
				'type'    => 'select',
				'choices' => array(
					'solid'   => __( 'Relleno', 'centro-estudios-iasd' ),
					'outline' => __( 'Contorno', 'centro-estudios-iasd' ),
				),
			)
		);
	}

	$wp_customize->add_section(
		'centro_footer',
		array(
			'title'    => __( 'Pie de página', 'centro-estudios-iasd' ),
			'priority' => 120,
		)
	);
	$footer_fields = array(
		'footer_about'           => array( __( 'Información del Centro', 'centro-estudios-iasd' ), 'textarea' ),
		'footer_email'           => array( __( 'Correo electrónico', 'centro-estudios-iasd' ), 'email' ),
		'footer_phone'           => array( __( 'Teléfono', 'centro-estudios-iasd' ), 'text' ),
		'footer_facebook'        => array( __( 'Enlace a Facebook', 'centro-estudios-iasd' ), 'url' ),
		'footer_instagram'       => array( __( 'Enlace a Instagram', 'centro-estudios-iasd' ), 'url' ),
		'footer_youtube'         => array( __( 'Enlace a YouTube', 'centro-estudios-iasd' ), 'url' ),
		'footer_verse'           => array( __( 'Verso bíblico', 'centro-estudios-iasd' ), 'textarea' ),
		'footer_verse_reference' => array( __( 'Referencia del verso', 'centro-estudios-iasd' ), 'text' ),
	);
	foreach ( $footer_fields as $setting => $field ) {
		$sanitizer = in_array( $field[1], array( 'email', 'url' ), true )
			? ( 'email' === $field[1] ? 'sanitize_email' : 'esc_url_raw' )
			: ( 'textarea' === $field[1] ? 'sanitize_textarea_field' : 'sanitize_text_field' );
		$wp_customize->add_setting(
			$setting,
			array(
				'default'           => centro_estudios_iasd_default( $setting ),
				'sanitize_callback' => $sanitizer,
			)
		);
		$wp_customize->add_control(
			$setting,
			array(
				'label'   => $field[0],
				'section' => 'centro_footer',
				'type'    => $field[1],
			)
		);
	}
}
add_action( 'customize_register', 'centro_estudios_iasd_customize_register' );

/**
 * Validate bounded numeric Customizer settings.
 *
 * @param WP_Error               $validity Current validation result.
 * @param WP_Customize_Setting   $setting  Setting being validated.
 * @param mixed                 $value    Submitted value.
 * @return WP_Error
 */
function centro_estudios_iasd_validate_range( $validity, $setting, $value ) {
	$limits = array(
		'announcement_speed'       => array( 8, 60 ),
		'announcement_font_size'   => array( 11, 22 ),
	);
	$id = $setting->id;

	if ( isset( $limits[ $id ] ) && ( (int) $value < $limits[ $id ][0] || (int) $value > $limits[ $id ][1] ) ) {
		$validity->add(
			'invalid_range',
			sprintf(
				/* translators: 1: minimum value, 2: maximum value. */
				__( 'El valor debe estar entre %1$d y %2$d.', 'centro-estudios-iasd' ),
				$limits[ $id ][0],
				$limits[ $id ][1]
			)
		);
	}

	return $validity;
}

/**
 * Print safe theme customization variables.
 */
function centro_estudios_iasd_customizer_css() {
	$background = sanitize_hex_color( get_theme_mod( 'announcement_bg', centro_estudios_iasd_default( 'announcement_bg' ) ) );
	$text       = sanitize_hex_color( get_theme_mod( 'announcement_color', centro_estudios_iasd_default( 'announcement_color' ) ) );
	$speed      = min( 60, max( 8, absint( get_theme_mod( 'announcement_speed', centro_estudios_iasd_default( 'announcement_speed' ) ) ) ) );
	$font_size  = min( 22, max( 11, absint( get_theme_mod( 'announcement_font_size', centro_estudios_iasd_default( 'announcement_font_size' ) ) ) ) );
	$image      = esc_url( get_theme_mod( 'hero_image', centro_estudios_iasd_default( 'hero_image' ) ) );
	?>
	<style id="centro-estudios-iasd-customizer-css">
		.announcement {
			--announcement-bg: <?php echo esc_html( $background ? $background : '#003b63' ); ?>;
			--announcement-color: <?php echo esc_html( $text ? $text : '#ffffff' ); ?>;
			--announcement-speed: <?php echo esc_html( (string) $speed ); ?>s;
			--announcement-font-size: <?php echo esc_html( (string) $font_size ); ?>px;
		}
		.hero {
			<?php if ( $image ) : ?>
				--hero-image: url("<?php echo esc_url( $image ); ?>");
			<?php endif; ?>
		}
	</style>
	<?php
}
add_action( 'wp_head', 'centro_estudios_iasd_customizer_css' );

/**
 * Resolve a customizable CTA destination.
 *
 * @param string $setting Theme mod name.
 * @return string
 */
function centro_estudios_iasd_cta_url( $setting ) {
	$url = get_theme_mod( $setting, centro_estudios_iasd_default( $setting ) );
	if ( ! $url && 'cta_visit_url' === $setting ) {
		return esc_url( home_url( '/#ubicacion' ) );
	}
	if ( ! $url && 'cta_study_url' === $setting ) {
		return esc_url( home_url( '/#metodo-estudio' ) );
	}

	return $url ? esc_url( $url ) : esc_url( home_url( '/' ) );
}
