			<?php $currentLang = pll_current_language();
			if ($currentLang == "pt"){
				$page_name = 'footer';
			} elseif ($currentLang == "en"){
				$page_name = 'footer-en';
			} elseif ($currentLang == "es"){
				$page_name = 'footer-es';
			} elseif ($currentLang == "zh"){
				$page_name = 'footer-zh';
			}
			?>
			<!-- footer -->
			<?php 
			  $args = array(
			    'paged'         => $paged,
			    'pagename'			=> $page_name
			  );
			  $query = new WP_Query( $args );

			  global $wp_query;
			  // Put default query object in a temp variable
			  $tmp_query = $wp_query;
			  // Now wipe it out completely
			  $wp_query = null;
			  // Re-populate the global with our custom query
			  $wp_query = $query;
			?>
			<?php if ($query->have_posts()){?>

			<footer class="footer" role="contentinfo">
				<?php while ($query->have_posts()) : $query->the_post();?>

				<div id="download">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 col-md-offset-1">
								<a href="/motoristas" class="button <?php echo $currentLang; ?>"><?php the_field('texto_motorista');?></a>
							</div>
							<div class="col-md-2 col-xs-6" style="text-align: center;">
								<a href="<?php the_field('link_app_store');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/appstore.png" alt=""></a>
							</div>
							<div class="col-md-2 col-xs-6" style="text-align: center;">
								<a href="<?php the_field('link_google_play');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div id="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-md-offset-1 col-xs-7">
								<p><?php the_field('texto_footer');?></p>
							</div>
							<div class="col-md-2 col-md-offset-3 col-xs-5 social">
								<a href="<?php the_field('link_facebook'); ?>" class="footer-facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="<?php the_field('link_instagram'); ?>" class="footer-instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<!-- <a href="<?php the_field('link_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /copyright -->
			<?php endwhile; ?>
			</footer>
			<!-- /footer -->

<!-- 		</div>
 -->		<!-- /wrapper -->
 			<?php } ?>

		<?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/bootstrap.min.js"></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
