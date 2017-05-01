<!-- footer.php -->

<!-- START the front-info Loop -->
		<?php get_template_part( 'assets/php/front-info' ); ?>
<!-- END the front-info Loop -->



</div><!-- /#main-content -->

<footer class="main">

	<!-- gallery  -->
	<?php get_template_part( 'assets/php/gallery-footer' ); ?>
	<!-- /gallery  -->
	
	<!-- columns  -->
	<div class="footer-widgets row">
		<div class="container">
		
			<!-- footer column 1 -->
			<?php  if(is_active_sidebar('footer-1')): ?>
				<div class="col-md-4"><?php  dynamic_sidebar('footer-1'); ?></div>
			<?php  endif ?>
			<!-- /footer column 1 -->
						
			<!-- footer column 2 -->
			<?php  if(is_active_sidebar('footer-2')): ?>
				<div class="col-md-4"><?php  dynamic_sidebar('footer-2'); ?></div>
			<?php  endif ?>
			<!-- /footer column 2 -->
			
			<!-- footer column 3 -->
			<?php  if(is_active_sidebar('footer-3')): ?>
				<div class="col-md-4"><?php dynamic_sidebar('footer-3'); ?></div>
			<?php  endif ?>	

			<!-- /footer column 3 -->
			
		</div><!-- /.container -->
	</div><!-- /columns  -->  
	
	<div class="footer">	
		<nav class="container">
			<ul class="nav navbar-nav">
				<?php get_template_part( 'assets/php/primary-menu' ); ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php get_template_part( 'assets/php/social-footer-menu' ); ?>
			</ul>
			<p class="clearfix copyright pull-right">&copy;<?php echo date('Y');?> <?php get_bloginfo( 'name' ); ?>. All rights reserved.</p>
		</nav>		
	</div>
	      
</footer><!-- /.main -->

<?php wp_footer();?>

</body>
</html>

<!-- /footer.php -->