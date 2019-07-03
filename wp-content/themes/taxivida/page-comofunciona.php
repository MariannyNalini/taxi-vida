<?php /* Template Name: Como Funciona */ ?>
<?php get_header(); ?>
<main role="main">
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="container">
				<div class="col-md-12">
					<h1><?php the_title();?></h1>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					
				</div>
			</div>


		<?php endwhile; ?>
		<?php endif; ?>
	</section>
</main>
<?php get_footer(); ?>
