</main><!--end .main-->
<?php 
	if (! is_page( 17 ) ) {
		include (TEMPLATEPATH . '/includes/donate.php'); 
	}
?>
<footer class="footer" role="contentinfo">
	<div class="footer-btn-bar-container">
		<div class="footer-btn-bar">
			<a href="/get-help">Get Help<span class="icon-arrow-right5"></span></a>
			<a href="/get-involved">Give Help<span class="icon-arrow-right5"></span></a>
		</div>
	</div>
	<div class="lc">
		<nav role="navigation" class="nav-footer">
			<div class="g g-4up">
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/programs">Programs</a></h3>
					<ul class="acc-panel">
					<?php 			
						$args = array(
							'child_of'     => 5, //Programs page ID
							'title_li'     => '',
							'depth'        => 1
						);
						
						wp_list_pages( $args );
					?>
					</ul>
				</div><!--end .gi-->
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/about">About</a></h3>
					<ul class="acc-panel">
						<?php 			
							$args = array(
								'child_of'     => 9, //About page ID
								'title_li'     => '',
								'depth'        => 1
							);
							
							wp_list_pages( $args );
						?>
					</ul>
				</div>
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/resources">Resources</a></h3>
					<ul class="acc-panel">
						<?php 			
							$args = array(
								'child_of'     => 19, //Resources page ID
								'title_li'     => '',
								'depth'        => 1
							);
							
							wp_list_pages( $args );
						?>
					</ul>
				</div>
				<div class="gi">			
					<h3 class="nav-footer-item acc-handle"><a href="/events">Upcoming Events</a></h3>
					<div class="acc-panel">
						<div class="block block-post-small">
							<h4 class="b-title"><a href="#">Corpus Christi Parish Fish Fry</a></h4>
							<p class="b-timestamp">March 5 - April 18, 2014</p>
						</div>
						<a href="/events">View all events</a>
						<hr>
					</div>
					<h3 class="nav-footer-item acc-handle"><a href="/blog">Latest from the Blog</a></h3>
					<div class="acc-panel">
						<div class="block block-post-small">
							<h4 class="b-title"><a href="#">Brad Paisley Concert Food Drive</a></h4>
							<p class="b-timestamp">March 23, 2014</p>
						</div>
						<a href="/blog">View all news</a>
					</div>
				</div>
			</div>
		</nav>
		<hr>
		<div class="g g-2up footer-contact">
			<div class="gi">
				<div class="g g-2up footer-contact-area">
					<div class="gi">
						<h3 class="nav-footer-item acc-handle"><a href="/contact">Email Us</a></h3>
						<div class="acc-panel">
							<a href="mailto:info@pittsburghfoodbank.org"><span class="icon-mail3"></span>info@pittsburghfoodbank.org</a>
							<a href="/contact#departments"><span class="icon-user"></span>Email a department</a>
						</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle">Call Us</h3>
						<div class="acc-panel">
							<a href="tel:+14124603663"><span class="icon-phone"></span>412-460-3663</a>
							<a href="/contact#departments"><span class="icon-user"></span>Call a department</a>
						</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle"><a href="/contact">Find Us</a></h3>
							<div class="acc-panel">
								<div class="vcard">
									<div class="adr">
										<div class="org fn">
											<div class="organization-name">Greater Pittsburgh Community Food Bank</div>
										</div>
										<div class="street-address">1 North Linden Street</div>
										<span class="locality">Duquesne</span>, 
										<abbr title="Pennsylvania" class="region">PA</abbr>
										<span class="postal-code">15110</span>
									</div>
								</div>
								<a href="/contact"><span class="icon-location"></span>Get Directions</a>
							</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle">If you need food</h3>
						<div class="acc-panel">
							<p>If you need food, please contact Hunger Services Network of the Urban League of Pittsburgh</p>
							<a href="tel:+14123250749"><span class="icon-phone"></span>412-325-0749</a>
							<a href="http://ulpgh.org/" rel="external"><span class="icon-link"></span>ulpgh.org</a>
						</div>
					</div><!--end .gi-->
				</div><!--end inner .g-2up-->
			</div><!--end .gi-->
			<div class="gi">
				<h3 class="nav-footer-item acc-handle">Stay Up to Date</h3>
				<div class="acc-panel">
					<p>Stay informed about our organization, upcoming events, stories of lives we have touched and news that impacts what we do.</p>
					<?php include (TEMPLATEPATH . '/includes/newsletter-form.php');  ?>
					<ul class="social-list">
						<li><a href="http://www.facebook.com/pages/Greater-Pittsburgh-Community-Food-Bank/145889928474" rel="external" target="_blank"><span class="icon-facebook"></span>Like us on Facebook</a></li>
						<li><a href="http://www.twitter.com/pghfoodbank" rel="external" target="_blank"><span class="icon-twitter"></span>Follow us on Twitter</a></li>
						<li><a href="http://www.youtube.com/pittsburghfoodbank" rel="external" target="_blank"><span class="icon-youtube"></span>Watch our videos on Youtube</a></li>
					</ul>				</div>
			</div><!--end .gi-->
		</div><!--end .g-2up-->
		
		<div class="footer-meta">
			<a href="/" rel="home" class="logo-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo" alt="Greater Pittsburgh Community Food Bank, a member of Feeding America"></a>			<p class="copyright">© 2014 All Rights Reserved. <a href="/privacy-policy">View our Privacy Policy</a></p>
		</div>
	</div>
</footer>
</div><!--end .page-->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.inputmask.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/single-cc-field.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/parsley.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/init.js"></script>
<?php wp_footer(); ?>
</body>
</html>