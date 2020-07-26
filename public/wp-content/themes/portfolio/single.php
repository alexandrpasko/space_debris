<?php get_header(); ?>

    <?php if(have_posts()) : // boolean true or false ?>
      <?php while(have_posts()) : // while this is true ?>
        <?php the_post(); // moves pointer to next post, returns $post to scope ?>

            <div class="portfolio-modal" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="container single_container middle_shadow">

                        <h2 class="text-uppercase full_width blue_on_light"><?php the_title() ?></h2>
                        <p class="item-intro text-muted full_width">Date added: <?php the_date() ?></p>

                        <div class="row justify-content-center border-top">
                            <div class="col-lg-8">
                                <img class="img-fluid d-block mx-auto middle_shadow" src="<?php the_post_thumbnail_url()?>" alt="" />
                            </div>
                            <div class="col-lg-4 my-auto">
                                <p class="text-center">
                                    <a class="btn btn-primary btn-xl text-uppercase fixed_style" href="#">View Demo</a>
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-primary btn-xl text-uppercase fixed_style" href="#">Git Hub</a>
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-info btn-xl text-uppercase fixed_style" href="/portfolio">Portfolio</a>
                                </p>
                            </div>
                        </div>

                        <?php the_content() // output as another row ?>

                    </div>
                </div>
            </div>

      <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
