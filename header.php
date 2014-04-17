<!DOCTYPE html>
<html>
   <head>	
      <meta charset='UTF-8'>
      <meta name='description' content='<?php echo site_description(); ?>' />
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'>

      <title><?php echo site_name(); ?> | <?php echo page_title('Page can’t be found'); ?></title>

      <link rel='stylesheet' href='<?php echo theme_url('/assets/type/edmondsans-medium.css'); ?>' />
      <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Domine:400,700' type='text/css'>
      <link rel='stylesheet' href='<?php echo theme_url('/assets/css/main.css'); ?>' />
      <link rel='stylesheet' href='<?php echo theme_url('/assets/css/type.css'); ?>' />
      <link rel='stylesheet' media='screen and (max-width: 700px)' href='<?php echo theme_url('/assets/css/mobile.css'); ?>' />
				
      <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
      <script src='<?php echo theme_url('/assets/js/main.js'); ?>'></script>
      <?php include_once('analytics.php'); ?>
   </head>
   <body>
      <header>
         <h1><a href='/'><?php echo site_name(); ?></a></h1>
<?php 
   if (has_menu_items()) { 
?>	
         <nav class='main'>			
            <ul>
<?php 
      while (menu_items()) {
?>
               <li><a href='<?php echo menu_url(); ?>' title='<?php echo menu_title(); ?>'><?php echo menu_name(); ?></a></li>
<?php 
      } 
?>
</ul>
         </nav>
<?php 
   } 
?>		
      </header>
