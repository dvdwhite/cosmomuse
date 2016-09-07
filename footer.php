<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cosmomuse
 */

?>

        </div>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
    
        <div class="footer">
            <div class="footer-logo"><img src="/wp-content/themes/cosmomuse/images/footer-logo.png" /></div>
            <div class="copyright">&copy; <?php echo date("Y");?></div>
            <div class="footer-line"> </div>
            <div class="social-footer">
                <div><a href="https://instagram.com/cosmomuse/" target="_blank"><img src="/wp-content/themes/cosmomuse/images/social/instagram.png" width="20" height="20=" alt="Instagram" /></a></div>
                <div><a href="https://www.facebook.com/cosmomuse" target="_blank"><img src="/wp-content/themes/cosmomuse/images/social/facebook.png" width="20" height="20=" alt="Facebook" /></a></div>
                <div><a href="https://www.pinterest.com/CosmoMuse/" target="_blank"><img src="/wp-content/themes/cosmomuse/images/social/pinterest.png" width="20" height="20=" alt="Pinterest" /></a></div>
                <div><a href="https://twitter.com/_CosmoMuse" target="_blank"><img src="/wp-content/themes/cosmomuse/images/social/twitter.png" width="20" height="20=" alt="Twitter" /></a></div>
                <!--<div><a href="#"><img src="/wp-content/themes/cosmomuse/images/social-google.png" width="20" height="20=" alt="Google" /></a></div>-->
                <div class="footer-search"><?php get_search_form(); ?></div>                
            </div>
        </div>		
	</footer><!-- #colophon -->

</div><!-- #page -->

<div class="floating-top-button"></div>

<?php wp_footer(); ?>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us13.list-manage.com","uuid":"56cf1f5f32ac4feb071469817","lid":"c96670e6ce"}) })</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63031234-3', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
