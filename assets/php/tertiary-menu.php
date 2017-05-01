<?php 
	wp_nav_menu( 
		array (
			'theme_location'	=> 	'tertiary-menu',
			'menu'				=>	'tertiary',
			'depth'				=>	1,
			'container'			=>	'nav',
			'container_class'	=>	'footer-menu',
			'container_id'		=>	'footer-nav',
			'menu_class'		=>	'nav nav-pills',
			'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
			'walker'			=>	new wp_bootstrap_navwalker()  // No Chuck Norris!!
		)
	);
?>