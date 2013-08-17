<footer class="main-footer">
			
			<?php if(has_pagination()): ?>
			
			<nav class="pageination">
			
			<a href="<?php echo posts_prev(); ?>">&#8592;</a>
			<a href="<?php echo posts_next(); ?>">&#8594;</a>
			
			</nav>
			
			<?php endif; ?>
		
			<h2>&#169; <?php echo date('Y'); ?> <?php echo site_name(); ?> | All Rights Reserved</h2>
		
		</footer>
	
	</body>

</html>

