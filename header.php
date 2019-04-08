<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php wp_title('-', true, 'right'); ?>
		<?php bloginfo('name'); ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
	<?php wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header><a href = "/wordpress/" title="Go to homepage" id="headera">
        <h1><?php bloginfo('name'); ?></h1>
        <h3><?php bloginfo('description'); ?></h3>
    </a></header>
	
	<div class="content"> <!--do zamkniecia w footer.php-->
		<div id="content" class="site-content"> <!--// do zamknięcia w index.php-->

