<?php theme_include('header'); ?>

<style>

	section.post-text {
		border-bottom: 1px #B7B7B7 solid;
		padding-bottom: 50px;
	}

</style>

<section class="main-content">
	
	<div class="main-content-inner">
			
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
				
				<footer class="post-footer">
				
					<a id="twitter" href="http://twitter.com/share?url=<?php echo current_url(); ?>&text=<?php echo article_title(); ?> door @illegibelg" target="blank">Share</a>
					<a id='facebook' href="http://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>&t=<?php echo article_title(); ?>" target="blank">Share</a>
					
					<div style="clear: both;"></div>
				
				</footer>
		
			</article>
			
			</div>
			
		</section>
		
<?php theme_include('footer'); ?>
