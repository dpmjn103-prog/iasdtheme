<?php
/**
 * Default page template.
 *
 * @package Centro_Estudios_IASD
 */

get_header();
?>
<main id="site-content" class="page-content page-content--reading">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article <?php post_class(); ?>>
			<header class="entry-header">
				<p class="eyebrow"><?php esc_html_e( 'Centro de Estudio · Zona 10, Próceres', 'centro-estudios-iasd' ); ?></p>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php
				the_content();
				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Páginas', 'centro-estudios-iasd' ) . '">',
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
