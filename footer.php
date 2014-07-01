      <footer>	
<?php 
   if (has_pagination()) { 
?>
         <nav>
<?php 
   echo posts_prev() . PHP_EOL; 
   echo posts_next() . PHP_EOL; 
?>
         </nav>			
<?php 
   }
?>
         <span id='rights'>&#169; <?php echo date('Y'); ?> <?php echo site_name(); ?> | All Rights Reserved</span>
      </footer>
   </body>
</html>

