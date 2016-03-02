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
                    <img src="http://cosmomuse.com/wp-content/uploads/2016/02/allie-bio-pic.jpg" />
                </div>
                <div class="about-bio">
                    <h1>ALLIE COUCH<br /><span style="font-size:14px;">FOUNDER & PRESIDENT</span></h1>
                    
                    <p>Allie has been an avid student of astrology since the age of 19 and has always been a bit of a bohemian. Along with a background in fashion design with experience at brands such as Patagonia, she most recently served as the executive director of an event design firm in Salt Lake City and Park City. She has also enjoyed sitting on the steering committee for TEDx Salt Lake City and is passionate about community and innovative thinking. Allie is visual in nature and hopes to bring beautiful inspiration to Cosmo Muse through lots of imagery that gives a magical feel, while on a subtle level, opening up dialog about the use of astrology as a seasonal lifestyle guide. Having lived in several countries and states, Allie has a thirst for exploration and learning about what makes people and cultures tick, with a love of humanity.</p>

<p>*Sun in Virgo, Moon in Libra, Sagittarius Rising & Chart Ruler in Cancer</p>
                </div>
            </div>
            
            <div class="about-wrapper">
                <div class="about-photo"> 
                    <img src="http://cosmomuse.com/wp-content/uploads/2016/02/brooke-bio-pic.jpg" />
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


