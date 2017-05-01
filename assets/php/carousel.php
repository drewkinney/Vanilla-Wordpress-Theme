<!--  carousel.php -->

<!-- START Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
		<?php
			$slide_count = 0;
            $front_carousel_indicators_query = new WP_Query( array( 'category_name' => 'carousel', 'posts_per_page' => '6', 'orderby' => 'date'));
            if ( $front_carousel_indicators_query->have_posts() ) :
                while ( $front_carousel_indicators_query->have_posts() ) : $front_carousel_indicators_query->the_post();
        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $slide_count; ?>" <?php if($slide_count == 0) echo ' class="active"';?>></li>
        <?php
                    	$slide_count++;
                endwhile;
                wp_reset_postdata();
            endif; 
        ?>
    </ol>






    <div class="carousel-inner" role="listbox">
		<?php
			$the_slide_count = 0;
            $front_carousel_query = new WP_Query( array( 'category_name' => 'carousel', 'posts_per_page' => '6', 'orderby' => 'date'));
            if ( $front_carousel_query->have_posts() ) :
                while ( $front_carousel_query->have_posts() ) : $front_carousel_query->the_post();
        ?>
                    <div  class="item <?php if($the_slide_count == 0) echo ' active';?>">
						<!-- featured image -->
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('full-size'); ?>
						<?php endif; ?>
						<div class="container">
                            <div class="carousel-caption">
                                <h1><?php the_title();?></h1>
                                <div><?php the_content();?></div>
                            </div>
                        </div>
                    </div>
        <?php
                    $the_slide_count++;
                endwhile;
                wp_reset_postdata();
        
            endif; 
        ?>
    </div>
    
    
    
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<!-- END Carousel -->