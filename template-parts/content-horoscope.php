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
                    <div class="horoscope-banner-title"><h1>MONTHLY HOROSCOPE</h1></div>
                    <div class="horoscope-content-wrapper">
                        <div class="horoscope-content-sign <?php echo rwmb_meta( 'cosmo_horoscope_sign' ); ?>">
                            <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo rwmb_meta( 'cosmo_horoscope_sign' ); ?>.png" /></div>
                            <div class="horoscope-sign-name">
                                <?php echo rwmb_meta( 'cosmo_horoscope_sign' ); ?>
                                <p class="date-range"></p>
                            </div>
                        </div>
                        <div class="horoscope-content-description">
                            <?php the_content(); ?>
                        </div>
                        <br clear="all" />
                    </div>
                </div>
            </div>
            <div class="horoscope-signs-container">
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/aries.png" /></div>
                        <div class="horoscope-sign-name">
                            ARIES
                            <p>March 21 - April 19</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_aries' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/taurus.png" /></div>
                        <div class="horoscope-sign-name">
                            TAURUS
                            <p>April 20 - May 20</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_taurus' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <br clear="all" />
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/gemini.png" /></div>
                        <div class="horoscope-sign-name">
                            GEMINI
                            <p>May 21 - June 20</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_gemini' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/cancer.png" /></div>
                        <div class="horoscope-sign-name">
                            CANCER
                            <p>June 21 - June 20</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_cancer' ); ?>
                    </div>
                    <br clear="all" />
                </div>                
                
                <br clear="all" />
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/leo.png" /></div>
                        <div class="horoscope-sign-name">
                            LEO
                            <p>July 23 - August 22</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_leo' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/virgo.png" /></div>
                        <div class="horoscope-sign-name">
                            VIRGO
                            <p>August 23 - September 22</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_virgo' ); ?>
                    </div>
                    <br clear="all" />
                </div>                
                
                <br clear="all" />
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/libra.png" /></div>
                        <div class="horoscope-sign-name">
                            LIBRA
                            <p>September 23 - October 22</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_libra' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/scorpio.png" /></div>
                        <div class="horoscope-sign-name">
                            SCORPIO
                            <p>October 23 - November 21</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_scorpio' ); ?>
                    </div>
                    <br clear="all" />
                </div>                
                
                <br clear="all" />
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/sagittarius.png" /></div>
                        <div class="horoscope-sign-name">
                            SAGITTARIUS
                            <p>November 22 - December 21</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_sagittarius' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/capricorn.png" /></div>
                        <div class="horoscope-sign-name">
                            CAPRICORN
                            <p>December 22 - January 19</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_capricorn' ); ?>
                    </div>
                    <br clear="all" />
                </div>                
                
                <br clear="all" />
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/aquarius.png" /></div>
                        <div class="horoscope-sign-name">
                            AQUARIUS
                            <p>January 20 - February 18</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_aquarius' ); ?>
                    </div>
                    <br clear="all" />
                </div>
                
                <div class="horoscope-zodiac-content">
                    <div class="horoscope-sign-date">
                        <div class="horoscope-sign"><img src="/wp-content/themes/cosmomuse/images/signs/pisces.png" /></div>
                        <div class="horoscope-sign-name">
                            PISCES
                            <p>February 19 - March 20</p>
                        </div>
                    </div>
                    <div class="horoscope-sign-description">
                        <?php echo rwmb_meta( 'cosmo_horoscope_pisces' ); ?>
                    </div>
                    <br clear="all" />
                </div>                
                
                <br clear="all" />
            </div>
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

<div class="sign-name" id="<?php echo rwmb_meta( 'cosmo_horoscope_sign' ); ?>"></div>

