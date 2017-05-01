<!-- header.php -->

<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#footer-navbar" id="top">

<!-- ///// Page Header -->
<header class="main-page">
	<nav class="navbar navbar-fixed-top" id="myNavbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
				<a class="navbar-brand" href="<?php the_permalink();?>"><img src="http://placehol.it/175x100" alt="placeholder for logo"></a>
			</div><!-- /.navbar-header -->
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php get_template_part( 'assets/php/primary-menu' ); ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php get_template_part( 'assets/php/secondary-menu' ); ?>
				</ul>
			</div><!--/.navbar-collapse -->
		</div><!-- /.container -->
	</nav><!-- /.navbar-fixed-top -->
</header><!-- /.main-page -->

<?php if( is_front_page() ){ echo "<!-- ///// Carousel -->"; get_template_part( 'assets/php/carousel' ); } ?>

<!-- ///// Main Page Content  -->
<div id="main-content">

<!-- /header.php -->