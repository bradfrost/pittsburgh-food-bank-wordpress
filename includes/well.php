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
<?php else : ?>
	<?php include (TEMPLATEPATH . '/includes/well-newsletter.php');  ?>
<?php endif; ?>