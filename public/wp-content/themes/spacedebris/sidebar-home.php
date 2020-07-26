<div id="secondary" class="col-xs-12">

    <?php $posts_promoted = get_posts(['category' => '2']); ?>

    <!-- Marketing Icons Section -->
    <?php foreach($posts_promoted as $post) : ?>

			<div id="callout_1" class="callout col-xs-12 col-sm-4 pad_10 mb">

				<div class="col-xs-12 bg_yellow link_holder">
						<a class="sidebar_link" href="<?=get_permalink()?>"><?=esc_html($post->post_title)?></a>
				</div><!-- /caption -->

				<div class="col-xs-12 img_cont mb">
					<a href="<?=get_permalink()?>"><img src="<?=get_the_post_thumbnail_url($post->ID)?>" alt="<?=esc_html($post->post_title)?>" /></a>
				</div>

				<div class="col-xs-12 pad_0">
					<p><?=get_the_excerpt()?></p>
				</div>

				<p><a class="learn_link" href="<?=get_permalink()?>">read more &gt;&gt;</a></p>

			</div><!-- /callout -->

    <?php endforeach; ?>	

</div><!-- /secondary -->