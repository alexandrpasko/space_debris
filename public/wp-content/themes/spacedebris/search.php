<?php get_header(); ?>

<div id="content" class="col-xs-12">

	<div id="primary" class="col-xs-12 col-sm-9">

		<h1 class="text_blue border_bottom">Here What We Could Find</h1>

        <?php if(have_posts()) : // boolean true or false ?>
          <?php while(have_posts()) : // while this is true ?>
            <?php the_post(); // moves pointer to next post, returns $post to scope ?>

			 <article class="border_bottom">
				<h2 class="text_blue"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_date() ?>
				<p><?php the_excerpt() ?></p>
				<p>
					<a class="learn_link float_none bg_yellow" href="<?=get_permalink()?>">read more</a>
				</p>
			</article>

          <?php endwhile; ?>
          <?php else : ?>
          	<p>Sorry, seems like nothing was found by your request ...</p>
        <?php endif; ?>

        <!-- Pagination -->
        <div class="text-center">
		   <ul class="pagination">
			  <li class="page-item link_yellow">
			    <?php next_posts_link('&lt;&lt; older'); ?>
			  </li>
			  <li class="page-item">
			    <?php previous_posts_link('newer &gt;&gt;'); ?>
			  </li>
		   </ul>       	
        </div>

	</div><!-- /primary -->

	<?php get_sidebar('index'); ?>

</div><!-- /content -->

<?php get_footer(); ?>