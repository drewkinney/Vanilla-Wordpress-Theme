<?php
wp_nav_menu( 
	array (
		'theme_location'	=> 	'social-footer-menu',
		'menu'				=>	'social',
		'depth'				=>	1,
		'container'			=>	'div',
		'container_class'	=>	'aside',
		'container_id'		=>	'aside-social',
		'menu_class'		=>	'nav nav-pills',
		'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
		'walker'			=>	new wp_bootstrap_navwalker() // No Chuck Norris!!
	)
);
?>