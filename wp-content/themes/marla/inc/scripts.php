<?php 

/**
 * Enqueue scripts and styles
 */
function marla_scripts() {
	wp_enqueue_style( 'marla-style', get_stylesheet_uri() );

	wp_enqueue_script( 'marla-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

 if (is_home() || is_archive() || is_search()) {
	 wp_enqueue_script( 'marla-infinite-scroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array( 'jquery' ) );
	 wp_enqueue_script( 'marla-float', get_template_directory_uri() . '/js/float.js', array( 'jquery' )  );
	 wp_enqueue_script( 'marla-custom-float', get_template_directory_uri() . '/js/custom-float.js', array( 'jquery' )  ); }
     
	 wp_enqueue_script( 'marla-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' )  );
	 


	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'marla-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'marla_scripts' ); 
add_action('wp_footer', 'marla_wp_footer');
function marla_wp_footer() { ?>
<script src="http://connect.facebook.net/<?php marla_fb_language(); ?>/all.js#xfbml=1"></script><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<?php } ?>