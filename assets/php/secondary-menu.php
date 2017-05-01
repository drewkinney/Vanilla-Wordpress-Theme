<?php 
	wp_nav_menu( 
		array( 
			'menu'				=>	'secondary',
			'theme_location' 	=>  'secondary-menu',
			'depth'				=>	1,							
			'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
			'walker'			=>	new wp_bootstrap_navwalker() 	// No Chuck Norris!!!!!
		) 
	);
?>