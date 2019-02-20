<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->


<!-- Bli medlem container -->
 
 <div id="bli-medlem" class="container-fluid">
	<div class="container py-5" style="max-width: 768px; ">
		<div id="bli-medlem-button-container" class="row justify-content-center">
    		<div class="col-md-auto text-center my-auto mx-3">
				<span class="align-middle">
					<a href="https://www.mp.se/bli-medlem" class="btn btn-primary btn-lg btn-sharp mt-3 mb-3" role="button"><i class="fas fa-check-circle"></i>Bli medlem</a></span>
				</span>
    		</div>
    		<div class="col bli-medlem-text">
				<p class="my-auto cream"><?php the_field( 'bli-medlem-text', 'option' ); ?></p>
			</div>
		</div>
	</div>
</div>

 <!-- #bli-medlem -->

    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container mx-auto py-5">
            <div class="site-info float-right">
            	<a href="https://www.mp.se/tierp" title="Milj&ouml;partiet de gr&ouml;na i Tierp"><img class="my-auto" alt="Milj&ouml;partiet de gr&ouml;na, Tierp" src="http://media.tierp2030.nu/MP_logo_Tierp_vit.png" width="250" height="57"></a><br>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
		<div class="container-fluid" id="footer_toolbar">
	    	<div class="container">
	    		<ul>
	    			<li><a href="https://www.mp.se/tierp" title="Milj&ouml;partiet de gr&ouml;na i Tierp"><i class="fa fa-arrow-circle-right"></i> Milj&ouml;partiet de gr&ouml;na i Tierp</a></li>
           			<li><a href="https://www.facebook.com/mptierp/" title="Facebook sida för Miljöpartiet de gröna i Tierp"><i class="fa fa-thumbs-up"></i> Hitta oss på Facebook</a></li>
				</ul>
	    	</div> 
       	</div>
	</div>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>