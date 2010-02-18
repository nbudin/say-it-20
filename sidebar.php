	<div id="sidebar">
		
			<!-- This is commented out because I put the search box in the header.  If you want you can put it back in the side bar easily.-->
			<!--?php include (TEMPLATEPATH . '/searchform.php'); ?-->
				
		<ul>
		
		<!--Color Chooser-->
		<li>
		<a href="#" onClick="setActiveStyleSheet('color1')"><img class="chooser" src="<?php bloginfo(template_directory); ?>/images/colorBlue.png" alt="Switch to blue" /></a>
		<a href="#" onClick="setActiveStyleSheet('color2')"><img class="chooser" src="<?php bloginfo(template_directory); ?>/images/colorGrn.png" alt="Switch to green" /></a>
		<a href="#" onClick="setActiveStyleSheet('color3')"><img class="chooser" src="<?php bloginfo(template_directory); ?>/images/colorOrg.png" alt="Switch to orange" /></a>
		<a href="#" onClick="setActiveStyleSheet('color4')"><img class="chooser" src="<?php bloginfo(template_directory); ?>/images/colorBurg.png" alt="Switch to burgundy" /></a>
		<p class="choosertext">Choose a color</p>
		</li>
		<!--/Color Chooser-->
		
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
			
			<li>
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>

		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
			</li>

			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<li><h2>Categories</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php get_links_list(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
				
			<?php } ?>
			
		<?php endif; ?>
			
		</ul>
		
		<br />
		<?php get_calendar(); ?>
		
	</div>