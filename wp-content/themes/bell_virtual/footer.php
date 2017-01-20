<?php
/**
 * The template for displaying the footer.
 *
 * @package white_canvas_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<div class="footer-block">
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="//bellvirtualsolutions.us14.list-manage.com/subscribe/post?u=c341da7e2e442e53fc7346d24&amp;id=fa015e1618" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							<p>Sign up for our newsletter</p>
						<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
						<div class="mc-field-group">							
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
						</div>					
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c341da7e2e442e53fc7346d24_fa015e1618" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup-->
						<div class="footer-info">
							<nav id="site-navigation" class="footer-navigation" role="navigation">
							<?php wp_nav_menu( array( 
								'theme_location' => 'footer', 
								'menu_id' => 'footer-menu' 
							)); 
							?>
							</nav><!-- #site-navigation -->							
							<div class="social">
								<div class="social-inner">
									<div class="social-01">
										<a href="mailto:info@bellvirtualsolutions.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@bellvirtualsolutions.com</a>										
									</div>									
									<div class="social-02">
										<a href="https://ca.linkedin.com/in/shannon-bell-a36520126" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>Connect with us on LinkedIn</a>
									</div>
									<div class="social-03">
										<a href="https://www.facebook.com/Bell-Virtual-Solutions-1219343464769095/?fref=ts" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i>Like us on Facebook</a>
									</div>									
								</div>
							</div>
						</div>	
					</div>	
					<div class="copyright">
						<p>Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Website design by <a href="http://whitecanvasdesign.ca/" target="_blank">www.whitecanvasdesign.ca</a></p>
					</div>
				</div><!-- .site-info -->				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
