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
                    <h2><?php echo rwmb_meta( 'cosmo_about_lead_name' ); ?><br /><span style="font-size:14px;"><?php echo rwmb_meta( 'cosmo_about_lead_title' ); ?></span></h2>
                    
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
            <br clear="all" /><br clear="all" />
            <div class="tile-break"> </div>
            
            <h2>Cosmo Muses</h2>
            
            <div class="about-wrapper">

                <div class="about-wrapper-sub">
                    <div class="about-photo-sub"> 
                        <img src="http://cosmomuse.com/wp-content/uploads/2016/02/brooke-bio-pic.jpg" />
                    </div>
                    <div class="about-bio-sub">
                        <h3>BROOKE MUSAT<br /><span style="font-size:14px;">THE YOGI MUSE</span></h3>

                        <p>Training as a classical ballerina till she was 18, Brooke enjoyed finding ways to communicate stories and emotions through movement. Looking for ways to help deal with her anxiety after Brooke’s father passed away, she found yoga. One downward dog and a few sun salutations and she was hooked! Brooke received her 200 hour yoga teacher training in 2010. Recognizing both the healing powers and communicative abilities of yoga, Brooke focused her Masters research on teaching individuals about place through the art of yoga. An Aquarius at heart, Brooke is always looking for ways to inject creativity into her yoga practice. For Cosmo Muse, she enjoys customizing yoga sequences for the different astrological signs. When she’s not practicing yoga Brooke, enjoys recreating in the mountains of Utah with her fiancé and black lab Harley.</p>
                        
                        <p>*Sun in Aquarius, Moon in Sagittarius & Cancer Rising</p>
                    </div>
                </div>             
                
                <div class="about-wrapper-sub">
                    <div class="about-photo-sub"> 
                        <img src="http://cosmomuse.com/wp-content/uploads/2016/09/ash-bio-photo.jpg" />
                    </div>
                    <div class="about-bio-sub">
                        <h3>ASH BONELLI<br /><span style="font-size:14px;">THE COUNSELOR MUSE</span></h3>

                        <p>Ash Bonelli is an astrologer, writer and private yoga instructor located in Seattle. She has worked in the holistic field for the past 13 years with additional studies in photography. She brings her education, intuition and creativity to all of her client sessions. She focuses her work with women to show them how to better understand themselves, their lives and how to become more empowered. Her love of alternative healing blossomed when she received a reflexology chart at age 12 and began working on her parents. It was a natural course in life to be of service in some way. She believes everything begins within and we each have the power to operate from our best selves. She is thrilled to be sharing astrology with the readers of CosmoMuse!</p>

                        <p>*Sun in Pisces, Moon in Capricorn & Libra Rising</p>
                    </div>
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


