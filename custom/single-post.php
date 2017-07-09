<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo get_the_title(); ?></title>
		<meta charset="utf-8">
		<title>Name</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	
<body style="background: #fff;">

    <div class="content-news-header">
        <div class="container">
            <div class="title">
                <span><?php echo get_the_title(); ?></span>
            </div>
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a>
            </div>
        </div>
    </div>
    <div class="content-news-news">
        <div class="item">
            <img src="<?php echo get_the_post_thumbnail(); ?>
            
            <div class="title"><?php echo get_the_title(); ?></div>
            <div class="credits">
                <div class="author">
                    By <?php the_author(the_post()); ?>,<br> CNN
                </div>
                <div class="date">
                    updated <span><?php echo time_ago(); ?><!--17 minutes ago--></span> <br>
                    <?php echo the_date(M .'. '. j .', '. o); ?> <!--apr. 10, 2017-->
                </div>
            </div>
            <div class="text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="content-news-footer">
        <div class="button">
            <i class="material-icons">add</i>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="material-icons">share</i>
                        <span> Share</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">bookmark_border</i>
                        <span> Bookmark</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="background"></div>
    </div>
    <?php wp_footer(); ?>
    
    
</body>

</html>