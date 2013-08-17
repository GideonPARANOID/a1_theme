<!DOCTYPE html>
<html>

	<head>
	
		<!-- Meta -->
		
		<title><?php echo site_name(); ?> | <?php echo page_title('Page can’t be found'); ?></title>
		<meta name="description" content="<?php echo site_description(); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		
		<!-- Styles -->
		
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/normalize.css'); ?>" />
		<link rel="stylesheet" href="<?php echo theme_url('/assets/type/edmondsans-medium.css'); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/main.css'); ?>" />
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/type.css'); ?>" />
		<link rel='stylesheet' media='screen and (max-width: 700px)' href="<?php echo theme_url('/assets/css/mobile.css'); ?>" />
		
		<!-- Scripts -->
		
		<script src="<?php echo theme_url('/assets/js/jquery.js'); ?>"></script>
		<script src="<?php echo theme_url('/assets/js/main.js'); ?>"></script>
	
	</head>
	
	<body>
	
		<header class="main-header">
		
			<h1><?php echo site_name(); ?></h1>
			
			<?php if(has_menu_items()): ?>
			
			<nav class="main-nav">
			
				<ul>
					<?php while(menu_items()): ?>
					<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			
			</nav>
			
			<?php endif; ?>
		
		</header>
