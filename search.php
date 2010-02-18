<?php get_header(); ?>

	<?php get_sidebar(); ?>
	
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>


		<div class="navigation">
			<span class="alignleft"><?php next_posts_link('&laquo; Previous') ?> <?php previous_posts_link('Next &raquo;') ?></span>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p class="cat">
				<?php the_time('M d, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?>
				</p>

				<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<span class="alignleft"><?php next_posts_link('&laquo; Previous') ?> <?php previous_posts_link('Next &raquo;') ?></span>
		</div>
		

	<?php else : ?>

		<h2 class="pagetitle">No posts found. Try a different search?</h2>

			<form name="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="commentform"><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
			<input type="image" src="<?php bloginfo(template_directory); ?>/images/searchBlack.png" size="5" width="14" height="14" id="searchsubmit" value="Search"  />
			</form>
			</div>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>