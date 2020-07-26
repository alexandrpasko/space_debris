<?php get_header(); ?>


    <?php if(have_posts()) : // boolean true or false ?>
      <?php while(have_posts()) : // while this is true ?>
        <?php the_post(); // moves pointer to next post, returns $post to scope ?>

        <?php $page_heading = get_post_meta( get_the_ID(), 'heading', true); ?>

        <!-- Masthead-->
        <header class="masthead page" id="home">
            <div class="container">
                <?php the_content() ?>
            </div>
        </header>

      <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
