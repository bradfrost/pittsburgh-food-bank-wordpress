<?php
/*
 * Template Name: About - History
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body lc lc-single">
	
	<ol class="timeline">
		<?php
		
			$rowsArray = get_field('timeline_event');
			$rows = array_reverse($rowsArray);

			if( $rows ):
			 
			 	// loop through the rows of data
			    foreach($rows as $row): ?> 
			    
			    	<?php 
						$timelineeventname = $row['timeline_event_title'];
						$timelineeventnamedash = str_replace(' ', '-', $timelineeventname);
						$timelineeventnamepath = strtolower($timelineeventnamedash);
						$img = $row['timeline_event_thumbnail'];
						$imgSrc = $img['url'];
					?>  
			        
			        <li class="timeline-node" id="<?php echo $timelineeventnamepath; ?>">
						<p class="timeline-timestamp"><?php echo $row['timeline_event_date']; ?></p>
						<h3 class="timeline-desc"><a href="#<?php echo $timelineeventnamepath; ?>"><?php echo $timelineeventname; ?></a></h3>
						<p class="timeline-"><?php echo $row['timline_event_description']; ?></p>
						<img src="<?php echo $imgSrc; ?>" alt="" />
					</li>
		<?php 
		    endforeach;
		    endif;
		?>
	</ol>
	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>