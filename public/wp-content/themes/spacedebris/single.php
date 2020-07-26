<?php get_header(); ?>

<div id="content" class="col-xs-12">

	<div id="primary" class="col-xs-12 col-sm-9">

        <?php if(have_posts()) : // boolean true or false ?>
          <?php while(have_posts()) : // while this is true ?>
            <?php the_post(); // moves pointer to next post, returns $post to scope ?>

			 <article>
				<h1 class="text_blue border_bottom"><?php the_title() ?></h1>
				<p><?php the_date() ?></p>
				<div class="text_grey">
					<img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title() ?>" class="alignleft post_thumb">
					<?php the_content() ?>
				</div>
			</article>

          <?php endwhile; ?>
        <?php endif; ?>

	</div><!-- /primary -->

	<?php get_sidebar(); ?>

</div><!-- /content -->

<?php get_footer(); ?>