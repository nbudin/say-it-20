<?php get_header(); ?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="date">
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?> 
						<?php the_time('l, F jS, Y') ?> @ <?php the_time() ?>
						| <?php the_category(', ') ?></div>
			<div class="entry">
				<p class="attachment">
					<? $portimg = wp_get_attachment_image( $post->ID, 'full');
						$portimg = preg_replace('#(width)="\d+"#', 'width="100%"', $portimg); 
						echo preg_replace('#(height)="\d+"#', '', $portimg); ?>
				</p>
				<p><?php if (!empty($post->post_content)) the_content(); ?></p>

				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		<table style="width: 100%" class="navigation">
			<tr>
				<td><?php previous_image_link('&laquo; %link') ?></td>
				<td style="text-align: right"><?php next_image_link('%link &raquo;') ?></td>
			</tr>
		</table>

				<p class="postmetadata2" style="clear: both;">
					<small>
						
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
							<br />
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
				</p>

			</div>
		</div>

	<div class="commentform">
		<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
