<!-- index.php -->
<?php get_header();?>
     
<!-- START the Loop -->
	<section class="posts row">
		<div class="container">
			<header>
				<h1><?php single_cat_title(); ?></h1>
				<div class="lead"><?php echo category_description(); ?></div>
			</header>

			<!-- START the Loop -->					
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article class="clearfix">
				<div class="col-md-4">
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="news-thumb" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<?php else: ?>
						<img class="news-thumb" src="http://placehold.it/400x300" alt="This is a placeholder image, specify a featured image for this post">
					<?php endif; ?>
				</div>
				<div class="col-md-7 col-md-offset-1">
					<h3><?php the_title();?></h3>
					<p class="meta text-muted"><span class="author-meta"><?php echo get_the_date('F j, Y'); ?></span> | <span class="author-meta"><?php get_the_author();?></span></p>
					<div class="article-excerpt"><?php the_excerpt(); ?></div><!-- /.article-excerpt -->
					<p class="pull-right"><a class="btn btn-primary" href="<?php the_permalink(); ?>" title="Click to learn more about <?php the_title_attribute(); ?>"><span class="label-txt">More </span><i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			
			<?php endwhile; else: ?>
			
			<article class="container error">
				<h1 class="error-header">Oops!</h1>
				<p class="error-message">There seems to be slight issue with your request. We aplogize for the inconvenience.</p>   
			</article><!-- /.error -->
			
			<?php endif; ?>
			<!-- END the Loop -->
								
		</div><!-- /.container -->
	</section><!-- /.posts -->
<!-- END the Loop -->
		
<?php get_footer();?>
<!-- /front-page.php -->