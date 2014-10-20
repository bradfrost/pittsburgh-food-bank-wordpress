</main><!--end .main-->
<?php 
	if (!is_page(13) && !is_page(17) && !is_page(55) ) {
		include (TEMPLATEPATH . '/includes/donate.php'); 
	}
?>
<footer class="footer" role="contentinfo">
	<div class="footer-btn-bar-container">
		<div class="footer-btn-bar">
			<a href="/get-help">Get Help<span class="icon-arrow-right5"></span></a>
			<a href="/give-help">Give Help<span class="icon-arrow-right5"></span></a>
		</div>
	</div>
	<div class="lc">
		<nav role="navigation" class="nav-footer">
			<div class="g g-4up">
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/about">About</a></h3>
					<div class="acc-panel">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'submenu' => '9' ) ); ?>
					</div>
				</div>
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/programs">What We Do</a></h3>
					<div class="acc-panel">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'submenu' => '5' ) ); ?>
					</div>
				</div><!--end .gi-->
				<div class="gi">
					<h3 class="nav-footer-item acc-handle"><a href="/resources">Learn</a></h3>
					<div class="acc-panel">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'submenu' => '19' ) ); ?>
					</div>
				</div>
				<div class="gi">			
					<h3 class="nav-footer-item acc-handle"><a href="/events">Upcoming Events</a></h3>
					<div class="acc-panel">
						<?php 
							//Get Latest Event
							global $post;
							$all_events = tribe_get_events(array(
							'eventDisplay'=>'upcoming',
							'posts_per_page'=> 1
							));
							
							foreach($all_events as $post) {
							setup_postdata($post);
							?>
							
							<div class="block block-post-small">
								<h4 class="b-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="b-timestamp">
									<?php 
										if(tribe_is_multiday()) {
											echo tribe_get_start_date($post->ID, true, 'M j')."-".tribe_get_end_date($post->ID, true, 'j, Y');
										} else {
											echo tribe_get_start_date($post->ID, true, 'M j, Y');
										}
									?>
								</p>
							</div>
							
							<?php } //endforeach ?>
							<?php wp_reset_query(); //End Events ?>
					
					
					
						
						<a href="/events">View all events</a>
						<hr>
					</div>
					<h3 class="nav-footer-item acc-handle"><a href="/blog">Latest from the Blog</a></h3>
					<div class="acc-panel">
						<?php
						
						//Get Latest Post
						$args = array( 'posts_per_page' => 1 );
						
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="block block-post-small">
								<h4 class="b-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="b-timestamp"><?php the_date(); ?></p>
							</div>
						<?php endforeach; 
						wp_reset_postdata();?>

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
							<a href="mailto:<?php the_field('email',11); ?>"><span class="icon-mail3"></span><?php the_field('email',11); ?></a>
							<a href="/contact#departments"><span class="icon-user"></span>Email a department</a>
						</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle">Call Us</h3>
						<div class="acc-panel">
							<a href="tel:+14124603663"><span class="icon-phone"></span><?php the_field('phone',11); ?></a>
							<a href="/contact#departments"><span class="icon-user"></span>Call a department</a>
						</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle"><a href="/contact">Find Us</a></h3>
							<div class="acc-panel">
								<div class="vcard">
									<div class="adr">
										<div class="org fn">
											<div class="organization-name"><?php echo get_bloginfo('name'); ?></div>
										</div>
										<div class="street-address"><?php the_field('address',11); ?></div>
										<span class="locality"><?php the_field('citystate',11); ?></span>
										<span class="postal-code"><?php the_field('zip', 11); ?></span>
									</div>
								</div>
								<a href="/contact"><span class="icon-location"></span>Get Directions</a>
							</div>
					</div><!--end .gi-->
					<div class="gi">
						<h3 class="nav-footer-item acc-handle">If you need food</h3>
						<div class="acc-panel">
							<p>If you need food, please contact Hunger Services Network of the Urban League of Pittsburgh</p>
							<a href="tel:+14123250749"><span class="icon-phone"></span><?php the_field('urban_league_phone', 11); ?></a>
							<a href="<?php the_field('urban_league_website', 11); ?>" rel="external"><span class="icon-link"></span><?php the_field('urban_league_website', 11); ?></a>
						</div>
					</div><!--end .gi-->
				</div><!--end inner .g-2up-->
			</div><!--end .gi-->
			<div class="gi">
				<h3 class="nav-footer-item acc-handle"><?php the_field('newsletter_widget_title',1832); ?></h3>
				<div class="acc-panel">
					<p><?php the_field('newsletter_widget_desc',1832); ?></p>
					<?php include (TEMPLATEPATH . '/includes/newsletter-form.php');  ?>
					<ul class="social-list">
						<?php
	
						// check if the repeater field has rows of data
						if( have_rows('social_list',3007) ):
						 
						 	// loop through the rows of data
						    while ( have_rows('social_list',3007) ) : the_row(); ?>
						    	<li><a href="<?php the_sub_field('url'); ?>" rel="external" target="_blank"><span class="icon-<?php the_sub_field('icon'); ?>"></span><?php the_sub_field('message'); ?></a></li>       
						<?php 
						    endwhile;
						    endif;
						?>
					</ul>
				</div>
			</div><!--end .gi-->
		</div><!--end .g-2up-->
		
		<div class="footer-meta">
			<a href="/" rel="home" class="logo-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo" onerror="this.src='<?php bloginfo('template_directory'); ?>/images/logo.png';" data-fallback="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Greater Pittsburgh Community Food Bank, a member of Feeding America"></a>			<p class="copyright">© 2014 All Rights Reserved. <a href="/privacy-policy">Privacy Policy</a> &nbsp; <a href="https://pww.pittsburghfoodbank.org/primariusww/login.aspx" class="btn btn-small btn-alt-2" target="_blank" rel="external">Agency Login</a></p>
		</div>
	</div>
</footer>
</div><!--end .page-->
<?php wp_footer(); ?>
<?php include (TEMPLATEPATH . '/includes/google-analytics.php'); ?>
</body>
</html>