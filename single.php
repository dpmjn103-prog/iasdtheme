<?php
/**
 * Single post template.
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
				<p class="post-meta"><?php echo esc_html( get_the_date() ); ?><?php if ( get_the_category_list( ', ' ) ) : ?> · <?php the_category( ', ' ); ?><?php endif; ?></p>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large', array( 'class' => 'entry-featured-image' ) ); ?>
			<?php endif; ?>
			<div class="entry-content"><?php the_content(); ?></div>
			<footer class="entry-footer">
				<?php the_tags( '<span>' . esc_html__( 'Temas: ', 'centro-estudios-iasd' ) . '</span>', ', ' ); ?>
			</footer>
			<?php if ( comments_open() || get_comments_number() ) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
