<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Space Debris</title>

<?php wp_head(); ?>
</head>
<body class="page-template-default">

	<nav id="util">
		<div class="container">
			<span id="logo">Space Debris</span>
			<ul class="menu">
				<?php wp_nav_menu() ?>
			</ul>
		</div>
	</nav>

	<div class="container">

		<header class="main col-xs-12">
			<h1 class="text_blue text_center home_page"><?=get_the_excerpt() ?></h1>
			<p>
				<img src="<?=get_the_post_thumbnail_url()?>" alt="image" width="100%">
			</p>
		</header>