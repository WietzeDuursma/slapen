<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="pagina">
 *
 * @package marla
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class('homeinfinto'); ?>>
<div id="wrapper">
<div id="header" class="clearfix centrar">
  <?php if( get_theme_mod( 'social_header' ) == marla_default_settings('social_header') ) {
?>
  <?php if( get_theme_mod( 'marla_social2' ) != marla_default_settings('marla_social2') ) {
?>
  <div class="fleft" id="fb-root">
    <fb:like href="http://www.facebook.com/<?php echo get_theme_mod( 'marla_social2', marla_default_settings('marla_social2') ) ?>" layout="button_count" send="false" width="80" show_faces="false" font=""></fb:like>
  </div>
  <?php	}
	
if( get_theme_mod( 'marla_social1' ) != marla_default_settings('marla_social1') ) { ?>
  <div class="fright"><a href="http://twitter.com/<?php echo get_theme_mod( 'marla_social1', marla_default_settings('marla_social1') ) ?>" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#FFFFFF" data-lang="<?php marla_twitter_language ()?>">Follow @<?php echo get_theme_mod( 'marla_social1', marla_default_settings('marla_social1') ) ?></a></div>
  <?php }}?>
  <div class="logo centrar ">
             <div class="logoimg"> 
                <?php marla_admin_header_image() ?>
             </div>
           <div class="logomenu">
            <nav id="site-navigation" class="navigation-main clearfix" role="navigation">
             <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
           </div>
  </div>
</div>
<div class="sliderspace ">
<div class="mijnslider centrar ">
 	<?php echo ctslider_slider_template( $id ); ?>
</div>
</div>
<div id="pagina" class="clear">
