<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Custom Theme</title>
		<meta charset="utf-8">
		<title>Name</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	
	<body>

    <div class="content-info">
        <i class="material-icons">arrow_forward</i>
        <h2>swipe for categories</h2>
    </div>
	<div class="content-header">
        <header id="header">
            <div class="container black">
                <div class="item">
                    <span><?php echo date("l"); ?></span>
                </div>
                <div class="item">
                    <span class="news-type">top news</span>
                </div>
                <div class="item">
                    <span><?php echo date("M j"); ?></span>
                </div>
            </div>
        </header>
    </div>