<footer class="main-footer">
			
			<?php if(has_pagination()): ?>
			
			<nav class="pageination">
			
			<?php echo posts_prev(); ?>
         <?php echo posts_next(); ?>
			
			</nav>
			
			<?php endif; ?>
		
			<h2>&#169; <?php echo date('Y'); ?> <?php echo site_name(); ?> | All Rights Reserved</h2>
		
		</footer>
	
	</body>

</html>

