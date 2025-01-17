<?php
function transportex_scripts() {
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	
	wp_enqueue_style( 'transportex-style', get_stylesheet_uri() );

	wp_enqueue_style('transportex_color', get_template_directory_uri() . '/css/colors/default.css');

	wp_enqueue_style('smartmenus',get_template_directory_uri().'/css/jquery.smartmenus.bootstrap.css');	

	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');

	wp_enqueue_style('owl_transitions',get_template_directory_uri().'/css/owl.transitions.css');

	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.css');

	wp_enqueue_style('all-css',get_template_directory_uri().'/css/all.css');

	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');

	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/css/magnific-popup.css');

    wp_enqueue_style('boot-progressbar',get_template_directory_uri().'/css/bootstrap-progressbar.min.css');
	

	/* Js script */
    
	wp_enqueue_script( 'transportex-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));

  wp_enqueue_script('transportex_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));

  wp_enqueue_script('transportex_smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js' , array('jquery'));

  wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'));

  wp_enqueue_script('transportex_smartmenus_bootstrap', get_template_directory_uri() . '/js/bootstrap-smartmenus.js' , array('jquery'));

  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'));

  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'));

  wp_enqueue_script('jquery-sticky-js', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'));

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'transportex_scripts');

function transportex_footer_js()
{ 
?>
<!--==================== feature-product ====================-->
<script type="text/javascript">
(function($) {
  "use strict";
function homeslider() {
    $("#ta-slider").owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        navigation: true, // Show next and prev buttons
        slideSpeed: 200,
        pagination: true,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
}
homeslider();
})(jQuery);
</script>
<?php
}  add_action('wp_footer','transportex_footer_js'); 

/**
  * Added skip link focus
  */
  function transportex_skip_link_focus_fix() {
  ?>
  <script>
  /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
  </script>
  <?php
  }
add_action( 'wp_print_footer_scripts', 'transportex_skip_link_focus_fix' );

function transportex_customizer_selective_preview() {
  wp_enqueue_script(
    'transportex-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array(
      'jquery',
      'customize-preview',
    ), 999, true
  );
}

add_action( 'customize_preview_init', 'transportex_customizer_selective_preview' );

if ( ! function_exists( 'transportex_admin_scripts' ) ) :
function transportex_admin_scripts() {
    wp_enqueue_script( 'transportex-admin-script', get_template_directory_uri() . '/js/transportex-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'transportex-admin-script', 'transportex_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style('transportex-admin-style-css', get_template_directory_uri() . '/css/customizer-controls.css');
}
endif;
add_action( 'admin_enqueue_scripts', 'transportex_admin_scripts' );

//Site logo and font
if ( ! function_exists( 'transportex_header_font' ) ) :

function transportex_header_font() { 
  $transportex_title_font_size = get_theme_mod('transportex_title_font_size'); 
  $transportex_logo_text_color = get_header_textcolor();
  $transportex_bg_color = get_background_color(); ?>
  <style type="text/css">  

  .site-branding-text .site-title a {
    font-size: <?php echo esc_attr( $transportex_title_font_size ); ?>px;
  } 
  body .navbar-brand .site-title a, body .site-description {
    color: #<?php echo esc_attr( $transportex_logo_text_color ); ?>;
  }
  .wrapper {
    background: #<?php echo esc_attr( $transportex_bg_color ); ?>;
  }
  </style>
  <?php
}
add_action( 'wp_footer', 'transportex_header_font' );
endif;
?>