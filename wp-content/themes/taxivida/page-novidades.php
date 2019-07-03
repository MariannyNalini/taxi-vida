<?php /* Template Name: Novidades */ ?>
<?php get_header(); ?>
	<?php 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
    'post_per_page' => 4,
    'paged'         => $paged,
    'post_type'			=> 'post'
  );
  $query = new WP_Query( $args );

  global $wp_query;
  // Put default query object in a temp variable
  $tmp_query = $wp_query;
  // Now wipe it out completely
  $wp_query = null;
  // Re-populate the global with our custom query
  $wp_query = $query;?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title();?></h1>
      </div>
    </div>
  <?php if ($query->have_posts()){?>
      <div class="row">
        <?php while ($query->have_posts()) : $query->the_post();?>
        <div class="col-md-6"> 
          <a href="<?php the_permalink();?>"><?php 
            if ( has_post_thumbnail() ) {?>
              <div class="thumb" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
              </div>
            <?php }?>
            <h2><?php the_title();?></h2>
            <p><?php the_field('linha_fina');?></p>          
          </a>
          <div class="row share">
            <div class="col-md-12">
              <div class="date">
                <div class="row">
                  <div class="col-md-9">
                    <span><?php the_date('d/m/y');?></span>
                  </div>
                  <div class="col-md-3" style="text-align:right;">
                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="tt-share" href="https://twitter.com/home?status=<?php the_title();?> <?php the_permalink();?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile;?>


      </div>
      <div class="row">
        <div class="col-md-12">
          <?php if (function_exists('wp_corenavi')) wp_corenavi();?>                  
        </div>
      </div>
    </div>
  <?php }else{
      // no post found code 
  }

  // Restore original query object
  $wp_query = null;
  $wp_query = $tmp_query;

    ?>
<?php get_footer(); ?>