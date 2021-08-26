<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 


?>

<main class="home main wrapper public" role="main">
	
	
				<?php query_posts('post_type=films&post_status=publish&posts_per_page=40,future');?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $count++;  $index = $wp_query->current_post + 1; ?>				
												
						<a href="<?php the_permalink(); ?>" id="slide_<?php echo $index; ?>">
						<div class="block">
							<?php the_post_thumbnail('full' , array('class' => 'img-parallax', 'data-speed' => '-1')); ?>
							<div class="info">
								<h3 class="category"><?php the_title(); ?></h3>
								<h2 class="title-movie"><?php the_field('cliente'); ?></h2>
							</div>
						</div>				
						</a>	
				
							
					<?php endwhile; else: endif; ?> 
					<?php wp_reset_query();?>			
				
				
</main>	



<?php
get_footer() ;?>


