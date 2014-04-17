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
         <h2>&#169; <?php echo date('Y'); ?> <?php echo site_name(); ?> | All Rights Reserved</h2>
      </footer>
   </body>
</html>

