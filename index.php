<?php
/**
 * Main template fallback.
 *
 * @package Centro_Estudios_IASD
 */

get_header();
?>
<main id="site-content" class="index-page">
	<section class="hero" aria-labelledby="hero-title">
		<div class="hero__content">
			<p class="hero__eyebrow"><?php echo esc_html( get_theme_mod( 'hero_eyebrow', centro_estudios_iasd_default( 'hero_eyebrow' ) ) ); ?></p>
			<h1 id="hero-title"><?php echo esc_html( get_theme_mod( 'hero_title', centro_estudios_iasd_default( 'hero_title' ) ) ); ?></h1>
			<p class="hero__description"><?php echo esc_html( get_theme_mod( 'hero_description', centro_estudios_iasd_default( 'hero_description' ) ) ); ?></p>
			<div class="hero__actions">
				<?php
				$visit_text  = get_theme_mod( 'cta_visit_text', centro_estudios_iasd_default( 'cta_visit_text' ) );
				$visit_style = centro_estudios_iasd_sanitize_button_style( get_theme_mod( 'cta_visit_style', centro_estudios_iasd_default( 'cta_visit_style' ) ) );
				if ( $visit_text ) :
					?>
					<a class="button button--<?php echo esc_attr( $visit_style ); ?>" href="<?php echo centro_estudios_iasd_cta_url( 'cta_visit_url' ); ?>"><?php echo esc_html( $visit_text ); ?></a>
				<?php endif; ?>
				<?php
				$study_text  = get_theme_mod( 'cta_study_text', centro_estudios_iasd_default( 'cta_study_text' ) );
				$study_style = centro_estudios_iasd_sanitize_button_style( get_theme_mod( 'cta_study_style', centro_estudios_iasd_default( 'cta_study_style' ) ) );
				if ( $study_text ) :
					?>
					<a class="button button--<?php echo esc_attr( $study_style ); ?>" href="<?php echo centro_estudios_iasd_cta_url( 'cta_study_url' ); ?>"><?php echo esc_html( $study_text ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/philosophy' ); ?>
	<?php get_template_part( 'template-parts/orion-nebula' ); ?>
	<?php get_template_part( 'template-parts/study-method' ); ?>
	<?php get_template_part( 'template-parts/sanctuary' ); ?>
	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/saturday-program' ); ?>
	<?php get_template_part( 'template-parts/community-updates' ); ?>
	<?php get_template_part( 'template-parts/gallery' ); ?>

	<section class="page-content page-content--wide" aria-labelledby="index-title">
		<header class="content-intro">
			<p class="eyebrow"><?php esc_html_e( 'Centro de Estudio · Zona 10, Próceres', 'centro-estudios-iasd' ); ?></p>
			<h2 class="archive-title" id="index-title"><?php esc_html_e( 'Reflexiones y recursos', 'centro-estudios-iasd' ); ?></h2>
		</header>
		<?php if ( have_posts() ) : ?>
			<div class="post-grid">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<div class="post-card__body">
							<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h3 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="post-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
							<a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Leer más', 'centro-estudios-iasd' ); ?><span class="screen-reader-text">: <?php the_title(); ?></span></a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<nav class="pagination" aria-label="<?php esc_attr_e( 'Paginación', 'centro-estudios-iasd' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<div class="no-results">
				<h2><?php esc_html_e( 'Todavía no hay publicaciones', 'centro-estudios-iasd' ); ?></h2>
				<p><?php esc_html_e( 'Cuando se publiquen nuevos recursos, aparecerán aquí.', 'centro-estudios-iasd' ); ?></p>
			</div>
		<?php endif; ?>
	</section>
	<?php get_template_part( 'template-parts/location' ); ?>
	<?php get_template_part( 'template-parts/donations' ); ?>
	<?php get_template_part( 'template-parts/faq' ); ?>
</main>
<?php
get_footer();
