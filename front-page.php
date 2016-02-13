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
                            
                            $home_1 = $feature_id;
                            
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

                            $home_2 = $feature_id;
                            
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
                        
                        $home_3 = $feature_id;
                            
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

                            $home_4 = $feature_id;
                            
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

                            $home_5 = $feature_id;

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
                
                <div style="margin-top:40px;">
                
                <?php

                    $exclude_posts = array( $home_1, $home_2, $home_3, $home_4, $home_5 );

                    $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'post__not_in' => $exclude_posts );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        // this is the default junk from sample site
                        //the_title();
                        //echo '<div class="entry-content">';
                        //the_content();
                        //echo '</div>';

                        // here's the start of the real loop

                        $category = get_the_category();

                    ?>

                    <div class="post-banner">
                        <div class="category <?php echo $category[0]->slug; ?>">
                            <?php echo $category[0]->cat_name; ?>
                        </div>
                        <div class="title-sign-container ink-<?php echo $category[0]->slug; ?>">
                            <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo rwmb_meta( 'cosmo_sign' ); ?>.png" /></div>
                            <div class="feature-title">
                                <h1><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h1>
                                <p><a href="<?php echo get_the_permalink() ?>">Read more</a></p>
                                <a href="<?php echo get_the_permalink() ?>">
                                    <div class="arrow"> </div>
                                </a>
                            </div>
                        </div>
                        <div class="feature-image post-feature-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
                        <br clear="all" />
                    </div> <br clear="all" /><br clear="all" />
                    <?php endwhile; ?>
          

                </div>
                
                
            </div>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
