<?php 
	wp_nav_menu( 
		array( 
			'menu'				=>	'primary',
			'theme_location' 	=>  'primary-menu',
			'depth'				=>	3,							
			'container'			=>	'div',
			'container_class'	=>	'collapse navbar-collapse',
			'container_id'		=>	'bs-navbar-collapse',
			'menu_class'		=>	'nav navbar-nav',
			'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
			'walker'			=>	new wp_bootstrap_navwalker() 	// No Chuck Norris!!!!!
		) 
	);
?>