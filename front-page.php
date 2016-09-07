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
                            <div class="cm-category-name <?php echo $this_cat_name; ?>">
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
                            <div class="cm-category-name <?php echo $this_cat_name; ?>">
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
                        <div class="cm-category-name <?php echo $this_cat_name; ?>">
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
                        <a href="/horoscope/week-of-march-14-20-2016/">
                            <div class="home-horoscope-title">MONTHLY HOROSCOPE</div>   
                            <div class="home-horoscope-copy"><?php echo rwmb_meta( 'cosmo_home_horoscope' ); ?><span class="arrow"></span></div>
                        </a>    
                    </div>
                    
                    <div class="home-horoscope-desktop">
                        
                        <?php
                            $args = array( 'numberposts' => '1', 'post_type' => 'horoscope' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){ 
                                echo '<a href="' . get_permalink($recent["ID"]) . '">';
                            }
                            wp_reset_query();
                        ?>
                        
                        
                            <div class="home-horoscope-title">MONTHLY HOROSCOPES</div>   
                            <div class="home-horoscope-copy"><?php echo rwmb_meta( 'cosmo_home_horoscope' ); ?><span class="arrow"></span></div>
                        </a>    
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
                            <div class="cm-category-name <?php echo $this_cat_name; ?>">
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
                            <div class="cm-category-name <?php echo $this_cat_name; ?>">
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
                                           
                    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
                    $args = array( 'post_type' => 'post', 'posts_per_page' => 8, 'post__not_in' => $exclude_posts, 'paged' => $paged );

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
                        <div class="cm-category-name <?php echo $category[0]->slug; ?>">
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
                    
                    <div class="home-nav-container">
                        <div class="home-nav-previous"><?php echo get_previous_posts_link( 'NEWER POSTS' ); ?></div>
                        <div class="home-nav-next"><?php echo get_next_posts_link( 'OLDER POSTS', $loop->max_num_pages ); ?></div>
                    </div>

                    <div class="floating-nav-widget">
                        <div class="floating-nav-previous floating-nav-item"><?php echo get_previous_posts_link( 'PREVIOUS' ); ?></div>
                        <div class="floating-nav-next floating-nav-item"><?php echo get_next_posts_link( 'NEXT', $loop->max_num_pages ); ?></div>
                        <div class="floating-archives-button"><a href="/categories"></a></div>
                    </div>                    
                        
                    <?php 
                    // clean up after the query and pagination
                    wp_reset_postdata(); 
                    ?>

                </div>
                
                
            </div>
            
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
