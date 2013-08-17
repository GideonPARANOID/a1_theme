<?php theme_include('header'); ?>

<section class="main-content">
	
	<div class="main-content-inner">
	
	<?php if(has_posts()): ?>
	
	<?php $i = 0; while(posts()): ?>
			
			<article>
				
				<header class="post-header">
			
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><h3><?php echo article_title(); ?></h3></a>
				
				<time>Posted: <?php echo article_date(); ?></time>
				
				<div style="clear:both;"></div>
				
				</header>
				
				<section class="post-image">
					
					<img src="<?php echo article_custom_field('post_image',''); ?>" />
				
				</section>
						
				<section class="post-text">
				
					<?php echo article_markdown(); ?>
						
				</section>
			</article>
			
		<?php endwhile; ?>
		
		<?php endif; ?>
		
		</div>
			
		</section>
		
<?php theme_include('footer'); ?>
