<?php
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cosmomuse
 */
function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}
$home_id = get_id_by_slug('cosmo-home');


get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="home-container">
                
                <div class="relative-position">
            
                    <div class="home-feature-left">  
                        
                        <!-- Start a feature -->
                        
                        <?php 
                            $feature_id = rwmb_meta( 'cosmo_home_top_left', 'type=post', $home_id ); 

                            $category_detail=get_the_category($feature_id);//$post->ID
                            $this_cat_name = $category_detail[0]->slug;

                            $signs = rwmb_meta( 'cosmo_sign', 'multiple=false', $feature_id );
                            $sign = $signs[0];

                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($feature_id) );
                            
                        ?>                        
                        
                        <div class="home-banner small-banner banner-position">
                            <div class="category <?php echo $this_cat_name; ?>">
                                <?php echo $this_cat_name; ?>
                            </div>
                            <div class="thumbnail-image">
                                <?php 
                                    $featured_thumb = rwmb_meta( 'cosmo_post_thumb', 'type=image', $feature_id );
                                    foreach ( $featured_thumb as $image ) {
                                        echo "<a href='" . get_the_permalink($feature_id) . "'><img src='{$image['url']}' /></a>";
                                    } 
                                ?>
                            </div>
                            <div class="title-sign-container ink-be">
                                <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo $sign; ?>.png" /></div>
                                <div class="feature-title">
                                    <h1><a href="<?php echo get_the_permalink($feature_id) ?>"><?php echo get_the_title($feature_id) ?></a></h1>
                                    <p><a href="<?php echo get_the_permalink($feature_id) ?>">Read more</a></p>
                                    <a href="<?php echo get_the_permalink($feature_id) ?>">
                                        <div class="arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="feature-image"><img src="<?php echo $featured_image ?>" /></div>
                            <br clear="all" />
                        </div> 
                        
                        <!-- End a feature -->

                        <!-- Start a feature -->
                        
                        <?php 
                            $feature_id = rwmb_meta( 'cosmo_home_lower_left', 'type=post', $home_id ); 

                            $category_detail=get_the_category($feature_id);//$post->ID
                            $this_cat_name = $category_detail[0]->slug;

                            $signs = rwmb_meta( 'cosmo_sign', 'multiple=false', $feature_id );
                            $sign = $signs[0];

                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($feature_id) );
                            
                        ?>                        
                        
                        <div class="home-banner small-banner banner-position">
                            <div class="category <?php echo $this_cat_name; ?>">
                                <?php echo $this_cat_name; ?>
                            </div>
                            <div class="thumbnail-image">
                                <?php 
                                    $featured_thumb = rwmb_meta( 'cosmo_post_thumb', 'type=image', $feature_id );
                                    foreach ( $featured_thumb as $image ) {
                                        echo "<a href='" . get_the_permalink($feature_id) . "'><img src='{$image['url']}' /></a>";
                                    } 
                                ?>
                            </div>
                            <div class="title-sign-container ink-be">
                                <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo $sign; ?>.png" /></div>
                                <div class="feature-title">
                                    <h1><a href="<?php echo get_the_permalink($feature_id) ?>"><?php echo get_the_title($feature_id) ?></a></h1>
                                    <a href="<?php echo get_the_permalink($feature_id) ?>"><p>Read more</p>
                                        <div class="arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="feature-image"><img src="<?php echo $featured_image ?>" /></div>
                            <br clear="all" />
                        </div> 
                        
                        <!-- End a feature -->
                        
                    </div>
                    
                    <?php 
                        $feature_id = rwmb_meta( 'cosmo_home_main_feature', 'type=post', $home_id ); 
                        
                        $category_detail=get_the_category($feature_id);//$post->ID
                        $this_cat_name = $category_detail[0]->slug;

                        $signs = rwmb_meta( 'cosmo_sign', 'multiple=false', $feature_id );
                        $sign = $signs[0];

                        $featured_image = wp_get_attachment_url( get_post_thumbnail_id($feature_id) );
                    ?>

                    <div class="home-banner banner-position feature-banner-margin">
                        <div class="category <?php echo $this_cat_name; ?>">
                            <?php echo $this_cat_name; ?>
                        </div>
                        <div class="title-sign-container ink-<?php echo $this_cat_name; ?>">
                            <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo $sign; ?>.png" /></div>
                            <div class="feature-title">
                                <h1><a href="<?php echo get_the_permalink($feature_id) ?>"><?php echo get_the_title($feature_id) ?></a></h1>
                                <p><a href="<?php echo get_the_permalink($feature_id) ?>">Read more</a></p>
                                <a href="<?php echo get_the_permalink($feature_id) ?>">
                                    <div class="arrow"> </div>
                                </a>
                            </div>
                        </div>
                        <div class="feature-image"><img src="<?php echo $featured_image ?>" /></div>
                        <br clear="all" />
                    </div>	


                    <div class="home-horoscope-desktop">
                        <div class="home-horoscope-title">WEEKLY HOROSCOPE</div>   
                        <div class="home-horoscope-copy"><?php echo rwmb_meta( 'cosmo_home_horoscope' ); ?><span class="arrow"></span></div>
                    </div>

                    <div class="home-feature-right">            

                        <!-- Start a feature -->
                        
                        <?php 
                            $feature_id = rwmb_meta( 'cosmo_home_top_right', 'type=post', $home_id ); 

                            $category_detail=get_the_category($feature_id);//$post->ID
                            $this_cat_name = $category_detail[0]->slug;

                            $signs = rwmb_meta( 'cosmo_sign', 'multiple=false', $feature_id );
                            $sign = $signs[0];

                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($feature_id) );
                            
                        ?>                        
                        
                        <div class="home-banner small-banner banner-position">
                            <div class="category <?php echo $this_cat_name; ?>">
                                <?php echo $this_cat_name; ?>
                            </div>
                            <div class="thumbnail-image">
                                <?php 
                                    $featured_thumb = rwmb_meta( 'cosmo_post_thumb', 'type=image', $feature_id );
                                    foreach ( $featured_thumb as $image ) {
                                        echo "<a href='" . get_the_permalink($feature_id) . "'><img src='{$image['url']}' /></a>";
                                    } 
                                ?>
                            </div>
                            <div class="title-sign-container ink-be">
                                <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo $sign; ?>.png" /></div>
                                <div class="feature-title">
                                    <h1><a href="<?php echo get_the_permalink($feature_id) ?>"><?php echo get_the_title($feature_id) ?></a></h1>
                                    <p><a href="<?php echo get_the_permalink($feature_id) ?>">Read more</a></p>
                                    <a href="<?php echo get_the_permalink($feature_id) ?>">
                                        <div class="arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="feature-image"><img src="<?php echo $featured_image ?>" /></div>
                            <br clear="all" />
                        </div> 
                        
                        <!-- End a feature -->

                        <!-- Start a feature -->
                        
                        <?php 
                            $feature_id = rwmb_meta( 'cosmo_home_lower_right', 'type=post', $home_id ); 

                            $category_detail=get_the_category($feature_id);//$post->ID
                            $this_cat_name = $category_detail[0]->slug;

                            $signs = rwmb_meta( 'cosmo_sign', 'multiple=false', $feature_id );
                            $sign = $signs[0];

                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($feature_id) );
                            
                        ?>                        
                        
                        <div class="home-banner small-banner banner-position">
                            <div class="category <?php echo $this_cat_name; ?>">
                                <?php echo $this_cat_name; ?>
                            </div>
                            <div class="thumbnail-image">
                                <?php 
                                    $featured_thumb = rwmb_meta( 'cosmo_post_thumb', 'type=image', $feature_id );
                                    foreach ( $featured_thumb as $image ) {
                                        echo "<a href='" . get_the_permalink($feature_id) . "'><img src='{$image['url']}' /></a>";
                                    } 
                                ?>
                            </div>
                            <div class="title-sign-container ink-be">
                                <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo $sign; ?>.png" /></div>
                                <div class="feature-title">
                                    <h1><a href="<?php echo get_the_permalink($feature_id) ?>"><?php echo get_the_title($feature_id) ?></a></h1>
                                    <p><a href="<?php echo get_the_permalink($feature_id) ?>">Read more</a></p>
                                    <a href="<?php echo get_the_permalink($feature_id) ?>">
                                        <div class="arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="feature-image"><img src="<?php echo $featured_image ?>" /></div>
                            <br clear="all" />
                        </div> 
                        
                        <!-- End a feature -->
                        
                        
                    </div>            


                    <br clear="all" />
                
                
                </div>
            
            </div>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
