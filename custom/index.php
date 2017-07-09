<?php get_header(); ?>

	<div class="content-news">
        <div class="all-news-fixed"></div>
        <div id="all-news">
            <ul>
                <li id="1page" class="first dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'top-news',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
                <li id="2page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'money',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
                <li id="3page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'tech',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
				<li id="4page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'health',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
				<li id="5page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'style',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
				<li id="6page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'travel',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
				<li id="7page" class=" dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'entertainment',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
				<li id="8page" class="last dragend-page">
                    <div class="section-items">
                        <div class="container">
							<?php							
								$lastposts = get_posts( array(
									'category_name' => 'story',
									'posts_per_page' => 5,
									'orderby' => 'date'
								));								
								if ( $lastposts ) {
									foreach ( $lastposts as $post ) :
										setup_postdata( $post ); ?>
										<div class="item">
											<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
											<div class="image"><?php the_post_thumbnail(); ?></div>
											<div class="description"><?php the_title(); ?></div>
											</a>
										</div>	

									<?php
									endforeach; 
									wp_reset_postdata();
								}
							?> 
						</div>	      
                    </div>
                </li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>