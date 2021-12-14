<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ts-photography
 */
?>
<footer role="contentinfo">
  <?php //Set widget areas classes based on user choice
    $ts_photography_widget_areas = get_theme_mod('ts_photography_footer_widget_areas', '4');
    if ($ts_photography_widget_areas == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($ts_photography_widget_areas == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($ts_photography_widget_areas == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <div  id="footer" class="copyright-wrapper">
    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>     
      </div>
    </div>
  </div>
  <div class="abovecopyright">
    <div class="container">
      <div class="row">
        <div class="copyright col-lg-6 col-md-6">
          <p><?php ts_photography_credit(); ?> <?php echo esc_html(get_theme_mod('ts_photography_footer_copy',__('By Themeshopy','ts-photography'))); ?></p>
        </div>
        <div class="social-media col-lg-6 col-md-6 text-end">
          <?php if( get_theme_mod( 'ts_photography_facebook_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_facebook_url','' ) ); ?>"><i class="fab fa-facebook-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','ts-photography' );?></span></a>
          <?php } ?>                       
          <?php if( get_theme_mod( 'ts_photography_twitter_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_twitter_url','' ) ); ?>"><i class="fab fa-twitter-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','ts-photography' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_photography_youtube_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_youtube_url','' ) ); ?>"><i class="fab fa-youtube-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','ts-photography' );?></span></a>
          <?php } ?> 
          <?php if( get_theme_mod( 'ts_photography_rss_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_rss_url','' ) ); ?>"><i class="fas fa-rss-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS','ts-photography' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_photography_insta_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_insta_url','' ) ); ?>"><i class="fab fa-instagram me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','ts-photography' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_photography_pint_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_pint_url','' ) ); ?>"><i class="fab fa-pinterest-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','ts-photography' );?></span></a>
          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>       
  </div>
</footer>
<?php if( get_theme_mod( 'ts_photography_enable_disable_scroll',true) != '' || get_theme_mod( 'ts_photography_responsive_scroll',true) != '') { ?>
  <?php $ts_photography_theme_lay = get_theme_mod( 'ts_photography_scroll_setting','Right');
    if($ts_photography_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','ts-photography'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'ts-photography'); ?></span></button>
    <?php }else if($ts_photography_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','ts-photography'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'ts-photography'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','ts-photography'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'ts-photography'); ?></span></button>
  <?php }?>
<?php }?>

<?php wp_footer(); ?>
</body>
</html>