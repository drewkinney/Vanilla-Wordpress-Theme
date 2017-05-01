<?php
////////////////////////////////////////
////////////////////////////////////////
//									  //
//			vanilla-theme Styles	  //
//									  //
////////////////////////////////////////
////////////////////////////////////////

////////////////////////////////////////
////////////////////////////////////////
//		ENQUEUE JS & CSS

function oct_scripts_styles(){



		// Enqueue Styles
		wp_enqueue_style('vanilla-bs-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false , '3.3.7');
		wp_enqueue_style('vanilla-fa-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array( 'vanilla-bs-css' ) , '4.7.0');
		wp_enqueue_style('vanilla-css', get_stylesheet_uri());


		// move jquery to footer
		wp_deregister_script( 'jquery' );
    	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    	wp_enqueue_script( 'jquery' );


		// Enqueue Scripts
		wp_enqueue_script('vanilla-bs-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.5', true);
		wp_enqueue_script('vanilla-js', get_template_directory_uri(). '/assets/js/script.js', array('jquery', 'vanilla-bs-js'), '1.0', true);

	}


// Hook into wp_enqueue_scripts action

	add_action('wp_enqueue_scripts','oct_scripts_styles');




//		/ENQUEUE JS & CSS
////////////////////////////////////////
////////////////////////////////////////


///////////////////////////////////////
////////////////////////////////////////
//		CUSTOM MENUS





	// Include Bootstrap Nav-Walker from Github
	require_once("assets/php/wp_bootstrap_navwalker.php");

	// Register Nav menus
	register_nav_menus( 
		array(
			'primary-menu'			=> __( 'Primary Menu', 'vanilla-theme' ),
			'secondary-menu' 		=> __( 'Secondary Menu', 'vanilla-theme' ),
			'tertiary-menu' 		=> __( 'Tertiary Menu', 'vanilla-theme' ),
			'social-footer-menu' 	=> __( 'Social Footer Menu', 'vanilla-theme' )
		)
	);

//		/CUSTOM MENUS
////////////////////////////////////////
////////////////////////////////////////



////////////////////////////////////////
////////////////////////////////////////
//		CUSTOM SIDEBARS

	function custom_sidebars(){

			$args = array(
			'id' 			=> 	'2-col-lt-sidebar',
			'class'			=>	'2-col-lt-sidebar',
			'name'			=>	__( '2-Column left-Sidebar', 'vanilla-theme' ),
			'description'	=>	__( 'Sidebar for 2-Column Left Template', 'vanilla-theme' ),
			'before_title'	=>	'<h3 class="sidebar-heading">',
			'after_title'	=>	'</h3>',
		);

			$args = array(
			'id' 			=> 	'2-col-rt-sidebar',
			'class'			=>	'2-col-rt-sidebar',
			'name'			=>	__( '2-Column Right-Sidebar', 'vanilla-theme' ),
			'description'	=>	__( 'Sidebar for 2-Column Right Template', 'vanilla-theme' ),
			'before_title'	=>	'<h3 class="sidebar-heading">',
			'after_title'	=>	'</h3>',
		);
	
		
		
		
		
		
		
				
		register_sidebar( $args );

		$args = array(
			'id' 			=> 	'footer-1',
			'class'			=>	'footer-1',
			'name'			=>	__( 'footer-1', 'vanilla-theme' ),
			'description'	=>	__( 'footer-1', 'vanilla-theme' ),
			'before_title'	=>	'<header class="footer-1-header">',
			'after_title'	=>	'</header>',
			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',
			'after_widget'	=>	'</aside>'
		);
		register_sidebar( $args );

		$args = array(
			'id' 			=> 	'footer-2',
			'class'			=>	'footer-2',
			'name'			=>	__( 'footer-2', 'vanilla-theme' ),
			'description'	=>	__( 'footer-2', 'vanilla-theme' ),
			'before_title'	=>	'<header class="footer-2-header"><h5>',
			'after_title'	=>	'</h5></header>',
			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',
			'after_widget'	=>	'</aside>'
		);
		register_sidebar( $args );

		
		$args = array(
			'id' 			=> 	'footer-3',
			'class'			=>	'footer-3',
			'name'			=>	__( 'footer-3', 'vanilla-theme' ),
			'description'	=>	__( 'footer-3', 'vanilla-theme' ),
			'before_title'	=>	'<header class="footer-3-header"><h5>',
			'after_title'	=>	'</h5></header>',
			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',
			'after_widget'	=>	'</aside>'
		);
		register_sidebar( $args );


	}
	add_action( 'widgets_init', 'custom_sidebars');



//		/CUSTOM SIDEBARS
////////////////////////////////////////
////////////////////////////////////////





	// Filter excerpt() length to 25 words.
	function wpdocs_custom_excerpt_length( $length ) { return 20;}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


	function max_title_length( $title ) {
		$max = 20;
		if( strlen( $title ) > $max ) {
			return substr( $title, 0, $max ). " &hellip;";
		} else {
			return $title;
		}
	}
	add_filter( 'the_title', 'max_title_length');

	// Custom background support
	$defaults = array(
		'default-image' => 'https://static.pexels.com/photos/226460/pexels-photo-226460.jpeg',
		'default-preset' => 'default',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-color' => '#fff',
		'wp-head-callback' => '_custom_background_cb',
		'admin-head-callback' => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $defaults );





////////////////////////////////////////
//               Theme Support
         add_theme_support( 'title-tag' );
         add_theme_support( 'post-thumbnails' ); 


		// Register Theme Features
		function custom_theme_features()  {

			// Add theme support for custom CSS in the TinyMCE visual editor
			add_editor_style();
		}
		add_action( 'after_setup_theme', 'custom_theme_features' );



//               /Theme Support
////////////////////////////////////////
?>