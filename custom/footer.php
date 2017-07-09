	
    
	<div class="content-footer">
        <div class="container">
            <!--<div class="floating-menu"><i class="material-icons">menu</i></div>-->
            <div class="footer">
                <div class="backgroud-button"></div>
                <div class="container">
                    <div class="nav run">
                        <div class="item top-news">
                            <span><a href="javascript:void(0)" class="underline active">TOP NEWS</a></span>
                        </div>
                        <div class="item live-news">
                            <span><a href="javascript:void(0)" class="underline">LIVE NEWS</a></span>
                        </div>
                        <div class="menu-button">
                            <span class="menu-button"><a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a> </span>
                        </div>
                        <div class="main-menu">
                            <nav>
                                <div class="category-list">
                                    <ul class="category-list-items">
                                        <li data-page="1" data-type="top news" class="active-menu-element">
                                            <a href="#">top news</a>
                                        </li>
                                        <li data-page="2" data-type="money">
                                            <a href="#">money</a>
                                        </li>
                                        <li data-page="3" data-type="tech">
                                            <a href="#">tech</a>
                                        </li>
                                        <li data-page="4" data-type="health">
                                            <a href="#">health</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category-list">
                                    <ul class="category-list-items">
                                        <li data-page="5" data-type="style">
                                            <a href="#">style</a>
                                        </li>
                                        <li data-page="6" data-type="travel">
                                            <a href="#">travel</a>
                                        </li>
                                        <li data-page="7" data-type="entertainment">
                                            <a href="#">entertainment</a>
                                        </li>
                                        <li data-page="8" data-type="story">
                                            <a href="#">story</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php //wp_nav_menu(array('theme_location'=>'secondary')); ?>
	<?php wp_footer(); ?>
	<?php //customtheme_script_enqueue('wp_enqueue_scripts'); ?>	
	<!--<script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/dragend.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/swipe-controls.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/customtheme.js"></script>-->
	</body>
</html>
