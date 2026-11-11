<?php
/**
 * Bible study method, principles, and welcome message.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="study-method" id="metodo-estudio" aria-labelledby="study-method-title">
	<div class="study-method__inner">
		<header class="study-method__heading" id="estudio-biblico">
			<p class="study-method__eyebrow"><?php esc_html_e( 'Nuestro método', 'centro-estudios-iasd' ); ?></p>
			<h2 id="study-method-title"><?php esc_html_e( 'Cómo estudiamos la Biblia', 'centro-estudios-iasd' ); ?></h2>
			<p class="study-method__lead"><?php esc_html_e( 'No tenemos una persona que habla y todos escuchan. Tenemos una mesa, un texto y una conversación honesta.', 'centro-estudios-iasd' ); ?></p>
		</header>

		<div class="study-method__principles">
			<h3><?php esc_html_e( 'Nuestros principios', 'centro-estudios-iasd' ); ?></h3>
			<ul class="study-principles">
				<li class="study-principle">
					<span class="study-principle__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M20 11.5a7.5 7.5 0 0 1-7.5 7.5H7l-4 2v-6a7.5 7.5 0 1 1 17-3.5Z" /><path d="M9.5 9a2 2 0 1 1 3.5 1.3c-.8.8-1.5 1.1-1.5 2.2M11.5 15.5h.01" /></svg>
					</span>
					<div>
						<h4><?php esc_html_e( 'Preguntar es bueno', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Una buena pregunta abre más Biblia que diez respuestas dadas sin pensar.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-principle">
					<span class="study-principle__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M9.5 18h5M10 22h4M8.2 14.5A7 7 0 1 1 15.8 14.5c-.9.7-1.3 1.5-1.3 2.5h-5c0-1-.4-1.8-1.3-2.5Z" /><path d="M12 3v1M4.9 5.9l.7.7M19.1 5.9l-.7.7" /></svg>
					</span>
					<div>
						<h4><?php esc_html_e( 'Pensar es bueno', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Te invitamos a razonar, comparar y volver al texto. Nada se cree por presión.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-principle">
					<span class="study-principle__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><circle cx="10.8" cy="10.8" r="6.8" /><path d="m16 16 5 5M8 10h5M8 13h3M8 7h5" /></svg>
					</span>
					<div>
						<h4><?php esc_html_e( 'Investigar es bueno', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Usamos contexto, idiomas originales cuando aporta, y referencias cruzadas.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-principle">
					<span class="study-principle__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M12 21s-8-4.4-8-11a4.5 4.5 0 0 1 8-2.9A4.5 4.5 0 0 1 20 10c0 6.6-8 11-8 11Z" /><path d="M12 8v6M9 11h6" /></svg>
					</span>
					<div>
						<h4><?php esc_html_e( 'Fe y razón caminan juntas', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'No hay que apagar el cerebro para creer, ni cerrar el corazón para pensar.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
			</ul>
		</div>

		<div class="study-method__steps">
			<div class="study-method__steps-heading">
				<p class="study-method__eyebrow"><?php esc_html_e( 'Un espacio para todos', 'centro-estudios-iasd' ); ?></p>
				<h3><?php esc_html_e( 'Cómo es un estudio', 'centro-estudios-iasd' ); ?></h3>
			</div>
			<ol class="study-steps">
				<li class="study-step">
					<span class="study-step__number" aria-hidden="true">01</span>
					<div>
						<h4><?php esc_html_e( 'Llegamos sin prisa', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Té, saludo, y un breve momento para conocernos. No hay “visitantes”, solo personas.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-step">
					<span class="study-step__number" aria-hidden="true">02</span>
					<div>
						<h4><?php esc_html_e( 'Leemos el texto juntos', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Antes de cualquier interpretación, leemos en voz alta el pasaje del día.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-step">
					<span class="study-step__number" aria-hidden="true">03</span>
					<div>
						<h4><?php esc_html_e( 'Hacemos preguntas', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Cada uno aporta dudas, observaciones, contradicciones aparentes. Todo cabe.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-step">
					<span class="study-step__number" aria-hidden="true">04</span>
					<div>
						<h4><?php esc_html_e( 'Buscamos en la Biblia', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( 'Comparamos con otros pasajes. El facilitador acompaña, no impone.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="study-step">
					<span class="study-step__number" aria-hidden="true">05</span>
					<div>
						<h4><?php esc_html_e( 'Aplicamos a la vida', 'centro-estudios-iasd' ); ?></h4>
						<p><?php esc_html_e( '¿Qué cambia esto en mi semana? Salimos con algo concreto, no solo con teoría.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
			</ol>
		</div>

		<aside class="study-welcome">
			<span class="study-welcome__mark" aria-hidden="true">“</span>
			<div>
				<h3><?php esc_html_e( 'Toda persona es bienvenida', 'centro-estudios-iasd' ); ?></h3>
				<p><?php esc_html_e( 'Niños, jóvenes, adultos, personas mayores, profesionales, sin importar el nivel academico o social, y también quienes nunca han abierto una Biblia. Aquí no hay nivel mínimo.', 'centro-estudios-iasd' ); ?></p>
				<p class="study-welcome__closing"><?php esc_html_e( 'Tampoco hay espectadores: todos somos parte de la conversación."', 'centro-estudios-iasd' ); ?></p>
			</div>
		</aside>
	</div>
</section>
