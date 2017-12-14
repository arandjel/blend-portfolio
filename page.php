<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="fh5co-main">
	<div class="fh5co-narrow-content animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
		
		<?php
			while ( have_posts() ) : the_post();
		?>
		
			<h2 class="fh5co-heading" > <?php the_title(); ?></span></h2>
			<div class="row">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
				
		<?php 
			endwhile; // End of the loop.
		?>
	</div>
</div>

<?php get_footer();
