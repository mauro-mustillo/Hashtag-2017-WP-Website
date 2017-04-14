<?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_front_page() ) :
	get_header( 'home' );
else :
	get_header();
endif;
?>
<div class="container content">
	<main role="main">
		<!-- section -->
		<section>

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

</div>

<?php get_footer(); ?>
