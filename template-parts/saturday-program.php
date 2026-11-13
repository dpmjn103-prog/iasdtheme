<?php
/**
 * Saturday study program.
 *
 * @package Centro_Estudios_IASD
 */
?>
<section class="saturday-program" id="programa-sabados" aria-labelledby="saturday-program-title">
	<div class="saturday-program__inner">
		<div class="saturday-program__layout">
			<header class="saturday-program__heading">
				<p class="saturday-program__eyebrow"><?php esc_html_e( 'Cada Sábado', 'centro-estudios-iasd' ); ?></p>
				<h2 id="saturday-program-title"><?php esc_html_e( 'Programa de los Sábados', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'Una mañana pensada para aprender, conversar y compartir la mesa.', 'centro-estudios-iasd' ); ?></p>
				<div class="saturday-program__art" aria-hidden="true">
					<svg viewBox="0 0 480 300" preserveAspectRatio="xMidYMid slice" focusable="false">
						<defs>
							<linearGradient id="saturday-sky" x1="0" x2="1" y1="0" y2="1">
								<stop offset="0" stop-color="#e7f3f5" />
								<stop offset="1" stop-color="#f8ecd5" />
							</linearGradient>
							<linearGradient id="saturday-book" x1="0" x2="1">
								<stop offset="0" stop-color="#fff" />
								<stop offset="1" stop-color="#f8f2e7" />
							</linearGradient>
						</defs>
						<rect x="14" y="14" width="452" height="272" rx="28" fill="url(#saturday-sky)" />
						<circle cx="353" cy="89" r="42" fill="#e8b65c" opacity=".8" />
						<path d="M53 210c47-38 87-37 130 0 37-30 75-38 113-23 42-17 84-5 131 25v41H53z" fill="#c8dce2" />
						<path d="M53 232c49-34 91-34 130 0 38-27 75-33 113-18 44-16 87-4 131 19v27H53z" fill="#8fb5bd" opacity=".72" />
						<path d="M106 176c31-18 69-17 106 5 37-22 75-23 113-5v59c-38-19-76-18-113 5-37-23-75-24-106-5z" fill="url(#saturday-book)" stroke="#567f8b" stroke-linejoin="round" stroke-width="4" />
						<path d="M212 181v59M127 190c23-9 47-4 66 5M127 204c23-9 47-4 66 5M231 195c22-10 45-14 69-8M231 210c22-10 45-14 69-8" fill="none" stroke="#90aeb3" stroke-linecap="round" stroke-width="3" />
						<path d="M82 95h35M99.5 77.5v35M397 164h24M409 152v24" fill="none" stroke="#c18b32" stroke-linecap="round" stroke-width="4" opacity=".75" />
						<path d="M75 143c8-16 18-21 30-17M375 218c10-15 20-19 32-13" fill="none" stroke="#648c78" stroke-linecap="round" stroke-width="4" />
						<circle cx="70" cy="84" r="4" fill="#c18b32" />
						<circle cx="414" cy="115" r="4" fill="#c18b32" />
					</svg>
				</div>
			</header>

			<ol class="saturday-program__grid">
				<li class="saturday-program__card">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M5 8h11v8a4 4 0 0 1-4 4H9a4 4 0 0 1-4-4V8Z" /><path d="M16 10h2a2 2 0 0 1 0 4h-2M7 4c0-1 1-1 1-2M11 4c0-1 1-1 1-2" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Bienvenida', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="09:30"><?php esc_html_e( '9:30 AM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( 'Te recibimos con té y una sonrisa.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="saturday-program__card">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M3 5.5A2.5 2.5 0 0 1 5.5 3H12v17H5.5A2.5 2.5 0 0 0 3 22.5v-17Z" /><path d="M21 5.5A2.5 2.5 0 0 0 18.5 3H12v17h6.5a2.5 2.5 0 0 1 2.5 2.5v-17Z" /><path d="M6.5 7H9M6.5 10H9M15 7h2.5M15 10h2.5" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Repaso de la Lección', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="09:45"><?php esc_html_e( '9:45 AM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( 'Estudio participativo e interactivo en grupos pequeños.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="saturday-program__card">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M4 5h16v11H9l-5 4V5Z" /><path d="M9 10h.01M12 10h.01M15 10h.01" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Receso', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="10:30"><?php esc_html_e( '10:30 AM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( 'Un espacio breve para conversar y compartir.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="saturday-program__card">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M5 3.5h14v17H5z" /><path d="M12 7v7M9 10.5h6M8 17h8" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Estudio Central', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="10:45"><?php esc_html_e( '10:45 AM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( '“El evangelio eterno”, presentado mediante un temario anual.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="saturday-program__card saturday-program__card--highlight">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="M12 3v2M5.6 5.6 7 7M3 12h2M19 12h2M17 7l1.4-1.4" /><path d="M6 17h12M8 20h8M7 15a6 6 0 1 1 10 0c-.8.6-1 1.3-1 2H8c0-.7-.2-1.4-1-2Z" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Almorcemos juntos', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="12:30"><?php esc_html_e( '12:30 PM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( 'Comida saludable gratuita. Todos invitados a la mesa.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
				<li class="saturday-program__card">
					<span class="saturday-program__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false"><path d="m12 3 1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3Z" /><path d="m19 15 .9 2.1L22 18l-2.1.9L19 21l-.9-2.1L16 18l2.1-.9L19 15ZM5 2l.7 1.3L7 4l-1.3.7L5 6l-.7-1.3L3 4l1.3-.7L5 2Z" /></svg>
					</span>
					<div class="saturday-program__details">
						<div class="saturday-program__card-top">
							<h3><?php esc_html_e( 'Tema Especial', 'centro-estudios-iasd' ); ?></h3>
							<time class="saturday-program__time" datetime="15:30"><?php esc_html_e( '3:30 PM', 'centro-estudios-iasd' ); ?></time>
						</div>
						<p><?php esc_html_e( 'Profundizamos en un tema distinto cada semana.', 'centro-estudios-iasd' ); ?></p>
					</div>
				</li>
			</ol>
		</div>
	</div>
</section>
