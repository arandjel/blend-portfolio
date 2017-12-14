<div class="col-md-4 fh5co-staff">
	<a href="<?php the_permalink(); ?>">
	<?php if(has_post_thumbnail()) : ?>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo bloginfo('name'); ?>" class="img-responsive">
	<?php else : ?>
		<img src="<?php bloginfo('template_url'); ?>/images/person1.jpg" alt="<?php echo bloginfo('name'); ?>" class="img-responsive">
	<?php endif; ?>
	</a>
	<?php if(is_single()) : ?>
      <h3><?php the_title(); ?></h3>
    <?php else : ?>
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
    <?php endif; ?>
	<h4>
		<?php the_time('j F, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php the_author(); ?> </a>
	</h4>
	<p><?php if(is_single()) : ?>
		<?php the_content(); ?>
	<?php else : ?>
		<?php the_excerpt(); ?>
	<?php endif; ?></p>
	<ul class="fh5co-social">
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="icon-facebook"></i></a></li>
		<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="icon-twitter"></i></a></li>
		<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="icon-google"></i></a></li>
	</ul>
  
</div>