<?php 
   theme_include('header'); 
?>
<section>	
	<div class='inner'>			
		<article class='page'>
   		<header>
				<h3><?php echo page_title(); ?></h3>
         </header>
			<section>
<?php 
   echo page_content(); 
?>		
			</section>
		</article>
	</div>
</section>
<?php 
   theme_include('footer'); 
?>
