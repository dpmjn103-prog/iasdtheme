<?php
/**
 * Front page template.
 *
 * @package Centro_Estudios_IASD
 */

get_header();
?>
<main id="site-content">
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
					<a class="button button--<?php echo esc_attr( $study_style ); ?> button--study" href="<?php echo centro_estudios_iasd_cta_url( 'cta_study_url' ); ?>"><?php echo esc_html( $study_text ); ?></a>
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

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php if ( trim( get_the_content() ) ) : ?>
				<section class="page-content page-content--wide" aria-label="<?php esc_attr_e( 'Contenido de la página de inicio', 'centro-estudios-iasd' ); ?>">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/location' ); ?>
	<?php get_template_part( 'template-parts/donations' ); ?>
	<?php get_template_part( 'template-parts/faq' ); ?>
</main>
<?php
get_footer();
