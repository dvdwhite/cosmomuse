<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package cosmomuse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        
        <div class="horoscope-banner-wrapper">
            <div class="horoscope-banner-bg">
                <div class="horoscope-large-bg">
                    <div class="horoscope-banner-title"><h1>ABOUT</h1></div>
                    <div class="horoscope-content-wrapper">
                        <div class="about-content-description">
                            <?php the_content(); ?>
                        </div>
                        <br clear="all" />
                    </div>
                </div>
            </div>
            
            <div class="about-wrapper">
                <div class="about-photo"> 
                    <?php
                        $lead_photos = rwmb_meta( 'cosmo_about_lead_photo' );
                        //var_dump ( $lead_photos );
                        if ( !empty( $lead_photos ) ) {
                            foreach ( $lead_photos as $lead_photo ) {
                                echo "<img src='{$lead_photo['full_url']}' /></a>";
                            }
                        }
                    ?>
                    <!--<img src="http://cosmomuse.com/wp-content/uploads/2016/02/allie-bio-pic.jpg" />-->
                </div>
                <div class="about-bio">
                    <h1><?php echo rwmb_meta( 'cosmo_about_lead_name' ); ?><br /><span style="font-size:14px;"><?php echo rwmb_meta( 'cosmo_about_lead_title' ); ?></span></h1>
                    
                    <p><?php echo rwmb_meta( 'cosmo_about_lead_bio' ); ?></p>
                </div>
            </div>
            
            
            
            
            
<!-- Comment out the contributors section for quick workaround -- Need to fix this    
            <?php
                $members = rwmb_meta( 'cosmo_members' );
                if ( ! empty( $members ) ) {
                    foreach ( $members as $member ) { 
            
                        $member_photos = $member['cosmo_about_member_photo']; 
                        var_dump ( $member_photos[0] );
?>
                        <div class="about-wrapper">
                            <div class="about-photo"> 
                                
                                <?php
                                    //$member_photos = $member['cosmo_about_member_photo']; 
                                    //var_dump ( $member_photos );
                                ?>                                
                                
                            </div>
                            <div class="about-bio">
                                <h1><?php echo $member['member_name'] ?><br /><span style="font-size:14px;"><?php echo $member['member_title'] ?></span></h1>

                                <p><?php echo $member['member_bio'] ?></p>
                            </div>
                        </div>                        
                    
                    <?php }
                }
            ?>

-->
            
            <div class="about-wrapper">
                <div class="about-photo"> 
                    <?php
                        $member_photos = rwmb_meta( 'cosmo_about_member_photo' ); 
                        if ( !empty( $member_photos ) ) {
                            foreach ( $member_photos as $member_photo ) {
                                echo "<img src='{$member_photo['full_url']}' /></a>";
                            }
                        }
                    ?>       
                </div>
                <div class="about-bio">
                    <h1>BROOKE MUSAT<br /><span style="font-size:14px;">RESIDENT YOGI</span></h1>
                    
                    <p>Training as a classical ballerina till she was 18, Brooke enjoyed finding ways to communicate stories and emotions through movement. Looking for ways to help deal with her anxiety after Brooke’s father passed away, she found yoga. One downward dog and a few sun salutations and she was hooked! Brooke received her 200 hour yoga teacher training in 2010. Recognizing both the healing powers and communicative abilities of yoga, Brooke focused her Masters research on teaching individuals about place through the art of yoga. An Aquarius at heart, Brooke is always looking for ways to inject creativity into her yoga practice. For Cosmo Muse, she enjoys customizing yoga sequences for the different astrological signs. When she’s not practicing yoga Brooke, enjoys recreating in the mountains of Utah with her fiancé and black lab Harley.</p>
                </div>
            </div>             
            
            <br clear="all" />
            
        </div>
        
        
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cosmomuse' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'cosmomuse' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


