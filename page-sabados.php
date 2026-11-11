<?php
/**
 * Template Name: Programa de los sábados
 * Template Post Type: page
 *
 * A dedicated overview of the Saturday program and community.
 *
 * @package Centro_Estudios_IASD
 */

$program_items = array(
	array(
		'time'        => '9:30 AM',
		'title'       => __( 'Bienvenida', 'centro-estudios-iasd' ),
		'description' => __( 'Comenzamos recibiéndote con calidez y compartiendo algo para tomar.', 'centro-estudios-iasd' ),
	),
	array(
		'time'        => '9:45 AM',
		'title'       => __( 'Repaso de la lección', 'centro-estudios-iasd' ),
		'description' => __( 'Conversamos y estudiamos en grupos pequeños, con espacio para participar.', 'centro-estudios-iasd' ),
	),
	array(
		'time'        => '10:30 AM',
		'title'       => __( 'Pausa y conversación', 'centro-estudios-iasd' ),
		'description' => __( 'Tomamos un descanso para conocernos y compartir ideas.', 'centro-estudios-iasd' ),
	),
	array(
		'time'        => '10:45 AM',
		'title'       => __( 'Estudio bíblico central', 'centro-estudios-iasd' ),
		'description' => __( 'Profundizamos juntos en las Escrituras y sus enseñanzas para la vida.', 'centro-estudios-iasd' ),
	),
	array(
		'time'        => '12:30 PM',
		'title'       => __( 'Almuerzo en comunidad', 'centro-estudios-iasd' ),
		'description' => __( 'Compartimos los alimentos y disfrutamos un tiempo de compañerismo.', 'centro-estudios-iasd' ),
	),
	array(
		'time'        => '3:30 PM',
		'title'       => __( 'Tema especial', 'centro-estudios-iasd' ),
		'description' => __( 'Cada semana exploramos un tema distinto en un espacio abierto de aprendizaje.', 'centro-estudios-iasd' ),
	),
);

$study_topics = array(
	__( 'El santuario y la Biblia', 'centro-estudios-iasd' ),
	__( 'Profecía y esperanza', 'centro-estudios-iasd' ),
	__( 'Fe y pensamiento', 'centro-estudios-iasd' ),
	__( 'Familia y relaciones', 'centro-estudios-iasd' ),
	__( 'Salud integral', 'centro-estudios-iasd' ),
	__( 'Servicio y comunidad', 'centro-estudios-iasd' ),
);

get_header();
?>
<main id="site-content" class="saturday-page">
	<section class="hero saturday-hero" aria-labelledby="saturday-title">
		<div class="hero__content">
			<p class="hero__eyebrow"><?php esc_html_e( 'Iglesia Adventista del Séptimo Día · Zona 10', 'centro-estudios-iasd' ); ?></p>
			<h1 id="saturday-title"><?php esc_html_e( 'Un sábado para aprender y compartir.', 'centro-estudios-iasd' ); ?></h1>
			<p class="hero__description"><?php esc_html_e( 'Nos reunimos para estudiar la Biblia, conversar con libertad y crecer en comunidad. No necesitas tener todas las respuestas: ven con ganas de aprender.', 'centro-estudios-iasd' ); ?></p>
			<div class="hero__actions">
				<a class="button button--solid" href="#programa"><?php esc_html_e( 'Explorar el programa', 'centro-estudios-iasd' ); ?></a>
				<a class="button button--outline" href="#ubicacion"><?php esc_html_e( 'Cómo visitarnos', 'centro-estudios-iasd' ); ?></a>
			</div>
		</div>
	</section>

	<section class="saturday-section saturday-section--light" id="filosofia" aria-labelledby="philosophy-title">
		<div class="saturday-section__inner">
			<header class="saturday-section__heading">
				<p class="eyebrow"><?php esc_html_e( 'Nuestra manera de aprender', 'centro-estudios-iasd' ); ?></p>
				<h2 id="philosophy-title"><?php esc_html_e( 'La fe también crece con buenas preguntas.', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'El estudio es una conversación compartida: leemos, escuchamos distintas perspectivas y buscamos comprender juntos la Palabra de Dios.', 'centro-estudios-iasd' ); ?></p>
			</header>
			<div class="saturday-feature-grid">
				<article class="saturday-feature">
					<span class="saturday-feature__number" aria-hidden="true">01</span>
					<h3><?php esc_html_e( 'Pregunta con libertad', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Tus dudas tienen un lugar. Participa a tu ritmo y conversemos con respeto.', 'centro-estudios-iasd' ); ?></p>
				</article>
				<article class="saturday-feature">
					<span class="saturday-feature__number" aria-hidden="true">02</span>
					<h3><?php esc_html_e( 'Aprendemos en conjunto', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Cada persona aporta experiencias e ideas que enriquecen el estudio.', 'centro-estudios-iasd' ); ?></p>
				</article>
				<article class="saturday-feature">
					<span class="saturday-feature__number" aria-hidden="true">03</span>
					<h3><?php esc_html_e( 'Explora con fundamento', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Leemos la Biblia con atención y relacionamos sus enseñanzas con la vida diaria.', 'centro-estudios-iasd' ); ?></p>
				</article>
				<article class="saturday-feature">
					<span class="saturday-feature__number" aria-hidden="true">04</span>
					<h3><?php esc_html_e( 'Forma parte', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Hay espacio para distintas edades, historias y etapas de la vida.', 'centro-estudios-iasd' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="saturday-section saturday-section--schedule" id="programa" aria-labelledby="program-title">
		<div class="saturday-section__inner saturday-schedule">
			<div class="saturday-schedule__intro">
				<p class="eyebrow"><?php esc_html_e( 'Cada sábado', 'centro-estudios-iasd' ); ?></p>
				<h2 id="program-title"><?php esc_html_e( 'Un día para estudiar, conversar y compartir.', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'Este es un vistazo a las actividades habituales. El orden o el tema especial puede variar según la semana.', 'centro-estudios-iasd' ); ?></p>
				<a class="text-link" href="#ubicacion"><?php esc_html_e( 'Visítanos de 9:30 AM a 6:00 PM', 'centro-estudios-iasd' ); ?> <span aria-hidden="true">→</span></a>
			</div>
			<ol class="saturday-timeline">
				<?php foreach ( $program_items as $item ) : ?>
					<li class="saturday-timeline__item">
						<time class="saturday-timeline__time"><?php echo esc_html( $item['time'] ); ?></time>
						<div class="saturday-timeline__body">
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['description'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="saturday-section saturday-section--topics" id="temas" aria-labelledby="topics-title">
		<div class="saturday-section__inner saturday-topics">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Aprendemos durante todo el año', 'centro-estudios-iasd' ); ?></p>
				<h2 id="topics-title"><?php esc_html_e( 'Temas que conectan la Biblia con la vida.', 'centro-estudios-iasd' ); ?></h2>
			</div>
			<ul class="saturday-topic-list">
				<?php foreach ( $study_topics as $topic ) : ?>
					<li><?php echo esc_html( $topic ); ?></li>
				<?php endforeach; ?>
				<li><?php esc_html_e( 'Y muchas otras preguntas', 'centro-estudios-iasd' ); ?></li>
			</ul>
		</div>
	</section>

	<section class="saturday-section saturday-section--community" aria-labelledby="community-title">
		<div class="saturday-section__inner">
			<header class="saturday-section__heading">
				<p class="eyebrow"><?php esc_html_e( 'Más que una reunión', 'centro-estudios-iasd' ); ?></p>
				<h2 id="community-title"><?php esc_html_e( 'Un espacio para conectar y servir.', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'Además del estudio, compartimos iniciativas y momentos cotidianos que nos ayudan a acompañarnos como comunidad.', 'centro-estudios-iasd' ); ?></p>
			</header>
			<div class="saturday-community-grid">
				<article class="saturday-community-card">
					<span class="saturday-community-card__label"><?php esc_html_e( 'En comunidad', 'centro-estudios-iasd' ); ?></span>
					<h3><?php esc_html_e( 'Compartir la mesa', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'El almuerzo es una oportunidad para conversar, conocernos y recibir a quien nos visita.', 'centro-estudios-iasd' ); ?></p>
				</article>
				<article class="saturday-community-card">
					<span class="saturday-community-card__label"><?php esc_html_e( 'Durante el año', 'centro-estudios-iasd' ); ?></span>
					<h3><?php esc_html_e( 'Campañas y temas especiales', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Organizamos encuentros y ciclos de estudio abiertos. Escríbenos para conocer las próximas fechas.', 'centro-estudios-iasd' ); ?></p>
				</article>
				<article class="saturday-community-card">
					<span class="saturday-community-card__label"><?php esc_html_e( 'Cuenta con nosotros', 'centro-estudios-iasd' ); ?></span>
					<h3><?php esc_html_e( 'Oración y acompañamiento', 'centro-estudios-iasd' ); ?></h3>
					<p><?php esc_html_e( 'Si deseas compartir una petición o hacer una consulta, puedes escribirnos con confianza.', 'centro-estudios-iasd' ); ?></p>
					<a href="mailto:centrodestudioiasd@gmail.com"><?php esc_html_e( 'centrodestudioiasd@gmail.com', 'centro-estudios-iasd' ); ?></a>
				</article>
			</div>
		</div>
	</section>

	<section class="saturday-section saturday-section--faq" id="preguntas" aria-labelledby="faq-title">
		<div class="saturday-section__inner saturday-faq">
			<header class="saturday-section__heading">
				<p class="eyebrow"><?php esc_html_e( 'Antes de venir', 'centro-estudios-iasd' ); ?></p>
				<h2 id="faq-title"><?php esc_html_e( 'Preguntas que quizá tengas.', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'Si necesitas saber algo más, contáctanos. Será un gusto ayudarte.', 'centro-estudios-iasd' ); ?></p>
			</header>
			<div class="saturday-faq__list">
				<details>
					<summary><?php esc_html_e( '¿Tengo que ser adventista para participar?', 'centro-estudios-iasd' ); ?></summary>
					<p><?php esc_html_e( 'No. Recibimos con gusto a quienes desean conocer, estudiar o simplemente escuchar.', 'centro-estudios-iasd' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( '¿Puedo hacer preguntas durante el estudio?', 'centro-estudios-iasd' ); ?></summary>
					<p><?php esc_html_e( 'Sí. La conversación y las preguntas son parte importante de nuestro aprendizaje compartido.', 'centro-estudios-iasd' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( '¿Necesito conocer la Biblia?', 'centro-estudios-iasd' ); ?></summary>
					<p><?php esc_html_e( 'No necesitas experiencia previa. Los temas se estudian en conjunto y puedes participar a tu propio ritmo.', 'centro-estudios-iasd' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( '¿Hay algún costo o debo registrarme?', 'centro-estudios-iasd' ); ?></summary>
					<p><?php esc_html_e( 'Puedes asistir sin inscripción. Escríbenos si quieres confirmar detalles de una actividad o del almuerzo de esa semana.', 'centro-estudios-iasd' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( '¿Puedo asistir con niños?', 'centro-estudios-iasd' ); ?></summary>
					<p><?php esc_html_e( 'Las familias son bienvenidas. Contáctanos para consultar qué actividades estarán disponibles para niños ese sábado.', 'centro-estudios-iasd' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="saturday-invitation" aria-labelledby="invitation-title">
		<div class="saturday-invitation__inner">
			<p class="eyebrow"><?php esc_html_e( 'Te esperamos', 'centro-estudios-iasd' ); ?></p>
			<h2 id="invitation-title"><?php esc_html_e( 'Ven tal como eres; hay lugar para ti.', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Nos reunimos los sábados de 9:30 AM a 6:00 PM en Zona 10, Ciudad de Guatemala.', 'centro-estudios-iasd' ); ?></p>
			<div class="hero__actions">
				<a class="button button--solid" href="#ubicacion"><?php esc_html_e( 'Ver ubicación y contacto', 'centro-estudios-iasd' ); ?></a>
				<a class="button button--outline" href="mailto:centrodestudioiasd@gmail.com"><?php esc_html_e( 'Escríbenos', 'centro-estudios-iasd' ); ?></a>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/location' ); ?>
</main>
<?php
get_footer();
