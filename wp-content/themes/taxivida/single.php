<?php get_header(); ?>

<div class="container">
	<main role="main">
		<section>
			<div class="row">
				<div class="col-md-12">
					<span class="title">Novidades</span>
				</div>
			</div>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<div class="col-md-12">
						<h1>
							<?php the_title(); ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>
							<?php the_field('linha_fina');?>
							<hr>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 thumb_interna">
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="row content">
					<div class="col-md-12">
						<?php the_content();?>
					</div>
				</div>
				<div class="row share">
					<div class="col-md-12">
						<div class="date">
							<div class="row">
								<div class="col-md-10">
									<span><?php the_date('d/m/y');?></span>
								</div>
								<div class="col-md-2" style="text-align:right;">
									<a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">
								    <i class="fa fa-facebook"></i>
									</a>
									<a class="tt-share" href="https://twitter.com/home?status=<?php the_title();?> <?php the_permalink();?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<div class="row nextprev">
				<div class="col-md-6">
					<a href="/novidades" class="back"><i class="fa fa-arrow-left"></i> Todos os artigos</a>
				</div>
				<div class="col-md-6">
					<?php previous_post_link( '%link', 'Próximo artigo <i class="fa fa-arrow-right"></i>', TRUE ); ?>
				</div>
			</div>
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>
		</section>
	</main>
</div>



<?php get_footer(); ?>
