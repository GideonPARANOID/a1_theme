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

               <a href="https://twitter.com/share" class="twitter-share-button" data-via="GideonPARANOID">Tweet</a>
               <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

               <div style="clear: both;"></div>
				
				</footer>
		
			</article>
			
			</div>
			
		</section>
		
<?php theme_include('footer'); ?>
