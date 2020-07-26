
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alexandr Pasko Portfolio</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/images/favicon_round.ico" />
        <!-- The Open Graph protocol for Social Sharing Posts -->
        <meta name="title" property="og:title" content="Alexandr Pasko Portfolio" />
        <meta property="og:locale" content="en_CA">
        <meta property="og:url" content="http://portfolio.alexandrpasko.com/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://portfolio.alexandrpasko.com/wp-content/uploads/2020/07/portfolio.jpg" />
        <meta property="og:description" content="Hi. I'm Alexandr Pasko, full stack web developer. Here is a link to my portfolio website where you can see some of my projects" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo_dark_bg.svg" alt="Alexandr Pasko" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php wp_nav_menu(['menu' => 'main-nav']) ?>
                </div>
            </div>
        </nav>