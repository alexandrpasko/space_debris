<?php get_header(); ?>


    <?php if(have_posts()) : // boolean true or false ?>
      <?php while(have_posts()) : // while this is true ?>
        <?php the_post(); // moves pointer to next post, returns $post to scope ?>
        
        <?php $page_heading = get_post_meta( get_the_ID(), 'heading', true); //custom item in dashboard ?>

        <!-- Masthead-->
        <header class="masthead" id="home">
            <div class="container">
                <div class="masthead-subheading">
                    <span class="blue_on_dark">Alexandr</span> 
                    <span class="green_on_dark">Pasko</span>
                </div>
                <div class="masthead-heading text-uppercase"><?=$page_heading?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/portfolio">Portfolio</a>
            </div>
        </header>

      <?php endwhile; ?>
    <?php endif; ?>

    <section class="page-section bg-light" id="slider">
        <h2 class="blue_on_light text-center">Check Out My Latest Projects</h2>
        <div class="container">
            <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase blue_on_dark">Contact Me</h2>
                <h3 class="section-subheading text-muted">Feel free to leave me a message. I am currently open an internship opportunities, volunteer experience, or job offers.</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>    

<?php get_footer(); ?>
