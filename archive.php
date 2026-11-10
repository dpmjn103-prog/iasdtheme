<?php
/**
 * Archive and search results template.
 *
 * @package Centro_Estudios_IASD
 */

get_header();
?>
<main id="site-content" class="page-content page-content--wide">
	<header class="content-intro">
		<p class="eyebrow"><?php esc_html_e( 'Lecturas y recursos', 'centro-estudios-iasd' ); ?></p>
		<h1 class="archive-title">
			<?php
			if ( is_search() ) {
				printf(
					/* translators: %s: search query. */
					esc_html__( 'Resultados para: %s', 'centro-estudios-iasd' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
			} else {
				the_archive_title();
			}
			?>
		</h1>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
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
						<h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
			<h2><?php esc_html_e( 'No encontramos contenido', 'centro-estudios-iasd' ); ?></h2>
			<p><?php esc_html_e( 'Prueba con otros términos o vuelve más tarde para descubrir nuevos recursos.', 'centro-estudios-iasd' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>
</main>
<?php
get_footer();
