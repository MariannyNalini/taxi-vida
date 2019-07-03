<?php /* Template Name: Home */
get_header(); ?>
<?php $currentLang = pll_current_language();?>
<main role="main">
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div id="destaque">
					<div class="container-fluid">
						<div class="row">
							<div id="highlight">
								<div class="highlight_info">
									<h2><?php the_field('texto_do_destaque')?></h2>
									<?php if ($currentLang == "pt"){?>
										<a href="<?php the_field('url_download_android')?>"><?php the_field('texto_do_botao_android')?></a>
										<a href="<?php the_field('url_download_ios')?>"><?php the_field('texto_do_botao_ios')?></a>
									<?php }?>
									
								</div>								
								<?php if( get_field('imagem_de_destaque_mobile') ) { ?>
									<div class="desktop-only">
										<img src="<?php the_field('imagem_de_destaque'); ?>" alt="" class="highlight">
									</div>
									<div class="mobile-only destaque-mobile" style="background: url(<?php the_field('imagem_de_destaque_mobile'); ?>) no-repeat;">
										
									</div>
								<?php } else { ?>
									<img src="<?php the_field('imagem_de_destaque'); ?>" alt="" class="highlight">						
								<?php } ?>
							</div>					
						</div>
					</div>
				</div>
				<div id="features">
					<div class="container">
						<div class="row features">
							<div class="col-md-4">
								<img src="<?php the_field('icone_coluna1')?>" alt="">
								<h2><?php the_field('titulo_coluna1')?></h2>
								<p><?php the_field('texto_coluna1')?></p>
							</div>
							<div class="col-md-4">
								<img src="<?php the_field('icone_coluna2')?>" alt="">
								<h2><?php the_field('titulo_coluna2')?></h2>
								<p><?php the_field('texto_coluna2')?></p>
							</div>
							<div class="col-md-4">
								<img src="<?php the_field('icone_coluna3')?>" alt="">
								<h2><?php the_field('titulo_coluna3')?></h2>
								<p><?php the_field('texto_coluna3')?></p>
							</div>
						</div>
					</div>				
				</div>
				<div id="comofunciona">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-8">
								<?php the_field('texto_comofunciona')?>
								<a href="/como-funciona/"><?php the_field('texto_botao_comofunciona')?></a>
							</div>
							<div class="col-md-5 col-sm-4">
								<img src="<?php the_field('imagem_como_funciona')?>" alt="">
							</div>
						</div>
					</div>				
				</div>			

			<!-- article 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			

		<?php endwhile; ?>
		<?php endif; ?>
	</section>
</main>
<?php get_footer(); ?>
