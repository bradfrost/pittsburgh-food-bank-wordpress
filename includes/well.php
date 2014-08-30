<?php 
	$cta = get_field('cta');
	if ( $cta == 'link' ) : //If CTA custom field isn't set or the CTA is set to 'none'
?>
<div class="well">
	<div class="lc lc-single">
		<h2 class="well-title"><?php the_field('cta_title'); ?></h2>
		<p class="well-desc"><?php the_field('cta_description'); ?></p>
		<a href="<?php the_field('cta_link'); ?>" class="btn"><?php the_field('cta_link_text'); ?></a>
	</div>
</div><!--end .well-->
<?php elseif ($cta == 'none') : //Display nothing ?>


<?php else : ?>
<div class="well">
	<div class="lc lc-single">
		<h2 class="well-title">Join Our Newsletter</h2>
		<p class="well-desc">Stay up-to-date on upcoming events, program news, etc lorem ipsum dolor sit amet, consectetur adipisicing.</p>
		<?php include (TEMPLATEPATH . '/includes/newsletter-form.php');  ?>
	</div>
</div><!--end .well-->
<?php endif; ?>