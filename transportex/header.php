<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package transportex
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'transportex' ); ?></a>
<div class="wrapper">
<!--
<?php esc_html_e( 'Skip to content', 'transportex' ); ?>
<div class="wrapper">
<header class="transportex-trhead">
	<!-=================== Header ====================-->
  <div class="transportex-main-nav" style="display: none;">
      <nav class="navbar navbar-default navbar-wp">
        <div class="container">
          <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-header-logo">
              <!-- Display the Custom Logo -->
              <div class="site-logo">
                  <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
              </div>
              <?php if (display_header_text()) : ?>
                <div class="site-branding-text navbar-brand">
                  <?php if (is_front_page() || is_home()) { ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                  <?php } else { ?>
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <?php } ?>
                      <p class="site-description"><?php echo esc_html(bloginfo('description')); ?></p>
                  </div>
              <?php endif; ?>
            </div>
            <!-- Logo -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wp-navbar"> <span class="sr-only">
			<?php echo _e('Toggle Navigation','transportex'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
        <!-- /navbar-toggle --> 
        
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="wp-navbar">
         <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'transportex_custom_navwalker::fallback' , 'walker' => new transportex_custom_navwalker() ) ); ?>
        </div>
        <!-- /Navigation --> 
      </div>
    </nav>
  </div>
</header>
<!-- #masthead --> 


<header class="transportex-headwidget"> 
  <!--==================== TOP BAR ====================-->
  <div class="transportex-head-detail hidden-xs hidden-sm" style="display: none;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
         <ul class="info-left">
            <?php 
              $transportex_head_info_one = get_theme_mod('transportex_head_info_one','<a><i class="fa fa-clock-o "></i>Open-Hours:10 am to 7pm</a>','transportex');
              $transportex_head_info_two = get_theme_mod('transportex_head_info_two','<a href="mailto:info@themeansar.com" title="Mail Me"><i class="fa fa-envelope"></i> info@themeansar.com</a>','transportex');
            ?>
            <li><?php echo wp_kses_post($transportex_head_info_one); ?></li>
            <li><?php echo wp_kses_post($transportex_head_info_two); ?></li>
          </ul>
        </div>
        <div class="col-md-6 col-xs-12">
        <?php if ( has_nav_menu( 'social' ) ) : ?>
          <nav class="transportex-social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'transportex' ); ?>">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'social',
                'menu_class'     => 'social-links-menu info-right',
                'depth'          => 1,
                'link_before'    => '<span class="screen-reader-text">',
                'link_after'     => '</span>' . transportex_include_svg_icons( array( 'icon' => 'chain' ) ),
              ) );
            ?>
          </nav><!-- .social-navigation -->
          <?php endif; ?>
       
          </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="transportex-nav-widget-area d-none d-lg-block">
      <div class="container">
      <div class="row align-items-center">
          <div class="col-md-3 text-center-xs">
           <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-header-logo">
              <!-- Display the Custom Logo -->
              <div class="site-logo">
                  <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
              </div>
              <?php if (display_header_text()) : ?>
                <div class="site-branding-text navbar-brand">
                  <?php if (is_front_page() || is_home()) { ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                  <?php } else { ?>
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <?php } ?>
                    <p class="site-description"><?php echo esc_html(bloginfo('description')); ?></p>
                  </div>
              <?php endif; ?>
            </div>
            <!-- Logo -->
            </div>
          </div>
          <div class="col-md-9">
            <div class="header-widget row">
              <div class="col-md-3 col-xs-6 hidden-sm hidden-xs">
                <div class="transportex-header-box wow animated flipInX">
                  <div class="transportex-header-box-icon header-info-one">
                    <?php $transportex_header_widget_one_icon = get_theme_mod('transportex_header_widget_one_icon','fa-phone');
                    if( !empty($transportex_header_widget_one_icon) ):
                      echo '<i class="fa '.$transportex_header_widget_one_icon.'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="transportex-header-box-info">
                    <?php $transportex_header_widget_one_title = get_theme_mod('transportex_header_widget_one_title',__('Call Us:','transportex')); 
                    if( !empty($transportex_header_widget_one_title) ):
                      echo '<h4>'.$transportex_header_widget_one_title.'</h4>';
                    endif; ?>
                    <?php $transportex_header_widget_one_description = get_theme_mod('transportex_header_widget_one_description','1800-6666-8888');
                    if( !empty($transportex_header_widget_one_description) ):
                      echo '<p>'.$transportex_header_widget_one_description.'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-xs-6 hidden-sm hidden-xs">
                <div class="transportex-header-box">
                  <div class="transportex-header-box-icon header-info-two">
                    <?php $transportex_header_widget_two_icon = get_theme_mod('transportex_header_widget_two_icon','fa-envelope');
                    if( !empty($transportex_header_widget_two_icon) ):
                      echo '<i class="fa '.$transportex_header_widget_two_icon.'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="transportex-header-box-info">
                    <?php $transportex_header_widget_two_title = get_theme_mod('transportex_header_widget_two_title',__('Email Us:','transportex')); 
                    if( !empty($transportex_header_widget_two_title) ):
                      echo '<h4>'.$transportex_header_widget_two_title.'</h4>';
                    endif; ?>
                    <?php $transportex_header_widget_two_description = get_theme_mod('transportex_header_widget_two_description','info@company.com');
                    if( !empty($transportex_header_widget_two_description) ):
                      echo '<p>'.$transportex_header_widget_two_description.'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>
			  <div class="col-md-3 col-xs-6 hidden-sm hidden-xs">
                <div class="transportex-header-box">
                  <div class="transportex-header-box-icon header-info-three">
                    <?php $transportex_header_widget_three_icon = get_theme_mod('transportex_header_widget_three_icon','fa-clock-o');
                    if( !empty($transportex_header_widget_three_icon) ):
                      echo '<i class="fa '.$transportex_header_widget_three_icon.'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="transportex-header-box-info">
                    <?php $transportex_header_widget_three_title = get_theme_mod('transportex_header_widget_three_title',__('Opening Time:','transportex')); 
                    if( !empty($transportex_header_widget_three_title) ):
                      echo '<h4>'.$transportex_header_widget_three_title.'</h4>';
                    endif; ?>
                    <?php $transportex_header_widget_three_description = get_theme_mod('transportex_header_widget_three_description','08:00 - 18:00');
                    if( !empty($transportex_header_widget_three_description) ):
                      echo '<p>'.$transportex_header_widget_three_description.'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>
              
              <div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
                <div class="transportex-header-box wow animated flipInX text-right header-info-four"> 
                  <?php $transportex_header_widget_four_label = get_theme_mod('transportex_header_widget_four_label',__('Get a Quote','transportex')); 
                  $transportex_header_widget_four_link = get_theme_mod('transportex_header_widget_four_link','#');
                  $transportex_header_widget_four_target = get_theme_mod('transportex_header_widget_four_target','true'); 

                    if( !empty($transportex_header_widget_four_label) ):?>
                      <a href="<?php echo $transportex_header_widget_four_link; ?>" <?php if( $transportex_header_widget_four_target ==true) { echo "target='_blank'"; } ?> class="btn btn-theme"><?php echo $transportex_header_widget_four_label; ?></a> 
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></div>

    <div class="container mobi-menu"> 
          <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-header-logo">
              <!-- Display the Custom Logo -->
              <div class="site-logo">
                  <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
              </div>
              <?php if (display_header_text()) : ?>
                <div class="site-branding-text navbar-brand">
                  <?php if (is_front_page() || is_home()) { ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                  <?php } else { ?>
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <?php } ?>
                    <p class="site-description"><?php echo esc_html(bloginfo('description')); ?></p>
                  </div>
              <?php endif; ?>
            </div>
            <!-- Logo -->
            <!-- navbar-toggle -->
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-wp">
              <span class="fa fa-times"></span>
            </button>
            <!-- /navbar-toggle --> 
          </div>
        </div>  
  <?php $nav_menu_sticky = get_theme_mod('nav_menu_sticky','sticky'); ?>
    <div class="container desk-menu"> 
    <div class="transportex-menu-full <?php if($nav_menu_sticky == 'sticky'){echo 'header-sticky'; } else {echo 'header-static'; }  ?>">
      <nav class="navbar navbar-expand-lg navbar-wp">
          <!-- Navigation -->
          
          <div class="collapse navbar-collapse" id="navbar-wp">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'transportex_custom_navwalker::fallback' , 'walker' => new transportex_custom_navwalker() ) ); ?>
            <!-- Right nav -->
            
            <!-- /Right nav -->
          </div>

          <!-- /Navigation --> 
      </nav>
      </div>
  </div>
</header>
<!-- #masthead --> 