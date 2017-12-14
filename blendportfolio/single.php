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
			<h4 style="margin: 0 0 20px 0; font-weight: 300; color: rgba(0, 0, 0, 0.4);">
				<?php the_time('j F, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php the_author(); ?> </a>
			</h4>
			<div class="row">
				<div class="col-md-12">
					<?php if(has_post_thumbnail()) : ?>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo bloginfo('name'); ?>" class="img-responsive">
						<br/>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			</div>
				
		<?php 
			endwhile; // End of the loop.
		?>
	
	<?php if(is_single()) : ?>
	
	<ul class="fh5co-social">
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="icon-facebook"></i></a></li>
		<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="icon-twitter"></i></a></li>
		<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="icon-google"></i></a></li>
	</ul>
	<br/>
		<?php comments_template(); ?>
	<?php endif; ?>
	</div>
</div>

<?php get_footer();
