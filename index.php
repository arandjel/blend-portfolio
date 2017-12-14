<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

	<div class="fh5co-narrow-content  animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
			<?php get_search_form(); ?>
			<?php query_posts('s='.get_query_var( 's', '' ).'&post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
			<?php if(have_posts()) : ?>
				<div class="row">
					<br/>
					<?php while(have_posts()) : the_post(); ?>
						<?php get_template_part('content', get_post_format()); ?>
					<?php endwhile; ?>
				</div>
				<div class="navigation">
					<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
				</div>
			<?php else : ?>
				<p><?php __('No Posts Found'); ?></p>
			<?php endif; wp_reset_query(); ?>
			
	</div>
</div>

<?php get_footer(); ?>