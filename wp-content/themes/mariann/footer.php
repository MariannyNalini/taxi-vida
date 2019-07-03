<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mariann
 */
?>
<?php 

$mariann_theme_options = mariann_get_theme_options();

$show_footer_sidebar_1 = true;

if(isset($mariann_theme_options['footer_sidebar_1_homepage_only']) && ($mariann_theme_options['footer_sidebar_1_homepage_only']) && is_front_page()) {
  $show_footer_sidebar_1 = true;
} 
if(isset($mariann_theme_options['footer_sidebar_1_homepage_only']) && ($mariann_theme_options['footer_sidebar_1_homepage_only']) && !is_front_page()) {
  $show_footer_sidebar_1 = false;
}
?>

<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
  <?php if($show_footer_sidebar_1): ?>
  <div class="footer-sidebar-wrapper clearfix">
    <div class="footer-sidebar sidebar container">
      <ul id="footer-sidebar">
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
      </ul>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php 
// Site Above Footer Banner
mariann_banner_show('above_footer'); 
?>

<?php if(is_front_page()): ?>

<?php mariann_footer_shortcode_show(); ?>

<?php mariann_footer_instagram_show(); ?>

<?php mariann_footer_htmlblock_show(); ?>

<?php endif; ?>

<div class="container-fluid container-fluid-footer">
  <div class="row">
    <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
    <div class="footer-sidebar-2-wrapper">
      <div class="footer-sidebar-2 sidebar container footer-container">
      
        <ul id="footer-sidebar-2" class="clearfix">
          <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
        </ul>
      
      </div>
    </div>
    <?php endif; ?>
    <footer>
      <?php if(isset($mariann_theme_options['footer_enable_social']) && ($mariann_theme_options['footer_enable_social'])): ?>
      <div class="container-fluid">
      <div class="row footer-social-row">
        
          <div class="col-md-12 footer-social col-sm-12">
          <?php mariann_social_show(true, true); ?>
          </div>
          
      </div>
      </div>
      <?php endif; ?>
      <div class="container">
      <div class="row">
          <?php 
          // Site Footer Banner
          mariann_banner_show('footer'); 
          ?>
          
          <?php if(isset($mariann_theme_options['footer_enable_menu']) && ($mariann_theme_options['footer_enable_menu'])): ?>
          <div class="col-md-12 footer-menu">
          <?php
            wp_nav_menu(array(
              'theme_location'  => 'footer',
              'menu_class'      => 'footer-links',
              'fallback_cb'    => false,
              ));
          ?>
          </div>
          <?php endif; ?>
          <div class="col-md-12 col-sm-12 footer-copyright">
              <?php if(isset($mariann_theme_options['footer_copyright_editor'])) { 
                echo wp_kses_post($mariann_theme_options['footer_copyright_editor']);
              }
              ?>
          </div>
   
      </div>
      </div>
      <a id="top-link" href="#top"></a>
    </footer>

  </div>
</div>

<?php

    // Demo settings
    if ( defined('DEMO_MODE') && isset($_GET['enable_offcanvas_sidebar']) ) {
      $mariann_theme_options['enable_offcanvas_sidebar'] = $_GET['enable_offcanvas_sidebar'];
    }
    
    if(isset($mariann_theme_options['enable_offcanvas_sidebar'])&&($mariann_theme_options['enable_offcanvas_sidebar'])): 
?>
      <nav id="offcanvas-sidebar-nav" class="st-sidebar-menu st-sidebar-effect-2">
      <div class="st-sidebar-menu-close-btn">×</div>
        <?php if ( is_active_sidebar( 'offcanvas-sidebar' ) ) : ?>
          <div class="offcanvas-sidebar sidebar">
          <ul id="offcanvas-sidebar" class="clearfix">
            <?php dynamic_sidebar( 'offcanvas-sidebar' ); ?>
          </ul>
          </div>
        <?php endif; ?>
      </nav>
<?php endif; ?>
<?php if(isset($mariann_theme_options['search_button_position']) && ($mariann_theme_options['search_button_position'] !== 'disabled')): ?>
<div class="search-fullscreen-wrapper">
  <div class="search-fullscreen-form">
    <div class="search-close-btn"><?php esc_html_e('Fechar', 'mariann'); ?></div>
    <?php get_template_part( 'searchform-popup' ); ?>
  </div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<script>
  jQuery(document).ready(function(){
    jQuery(".fa-facebook").toggleClass('fa-facebook fa-facebook-square');
  });
</script>
</body>
</html>