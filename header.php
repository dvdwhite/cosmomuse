<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cosmomuse
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url"           content="<?php the_permalink(); ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Cosmomuse - <?php the_title(); ?>" />
<meta property="og:description"   content="<?php if ( ! has_excerpt() ) { echo ''; } else { the_excerpt(); }?>" />
<meta property="og:image"         content='<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>' />
</head>    
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=187188(font-family=Brandon+Grotesque+Regular)&sid=187189(font-family=Brandon+Grotesque+Light)&sid=187190(font-family=Brandon+Grotesque+Bold)&sid=187194(font-family=Brandon+Grotesque+Medium)&key=MVHUbv9r0y',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script> -->   

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1552395388350854";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>   
    
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cosmomuse' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        
        <div class="header">
            <a href="/"><div class="logo"> </div></a>
            <!--<div class="tagline"> </div>-->
            <div class="menu-icon"> </div>
            <div class="navigation">
                
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                
            </div>
            <div class="search-container">
                
                <?php get_search_form(); ?>                
                
                <!--<label><strong>SEARCH</strong></label>
                <input type="text" value="" /><br clear="all" /><br clear="all" />-->
            </div>
        </div>
        
	</header><!-- #masthead -->

    <div class="body">
        <div class="content-container"> 

              