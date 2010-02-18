<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Continue reading...</p>'); ?>

				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

			</div>
		
	  <?php endwhile; endif; ?>
	
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
	
	<div class="commentform">
		<?php comments_template(); ?>
	</div>
	
	</div>

<?php get_footer(); ?>