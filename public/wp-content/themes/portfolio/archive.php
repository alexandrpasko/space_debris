<?php get_header(); ?>
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase blue_on_light">Some Projects</h2>
                    <h3 class="section-subheading text-muted">My most recent projects are available on Git Hub and can be seen as Demo version</h3>
                </div>
                
                <!-- the loop with posts -->
                <div class="row">
                    <?php if(have_posts()) : // boolean true or false ?>
                      <?php while(have_posts()) : // while this is true ?>
                        <?php the_post(); // moves pointer to next post, returns $post to scope ?>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="portfolio-item">
                                    <a class="portfolio-link" href="<?php the_permalink()?>">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">Learn More</div>
                                        </div>
                                        <img class="img-fluid" src="<?php the_post_thumbnail_url()?>" alt="" />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><a class="vice_versa" href="<?php the_permalink()?>"><?php the_title() ?></a></div>
                                        <div class="portfolio-caption-subheading text-muted">Some Text</div>
                                    </div>
                                </div>
                            </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                  <li class="page-item">
                    <?php next_posts_link('<button type="button" class="btn btn-outline-secondary">&lt;&lt; older projects</button>'); ?>
                  </li>
                  <li class="page-item disabled">
                    <?php previous_posts_link('<button type="button" class="btn btn-outline-secondary">newer projects &gt;&gt;</button>'); ?>
                  </li>
                </ul>
                
            </div>
        </section>

<?php get_footer(); ?>
