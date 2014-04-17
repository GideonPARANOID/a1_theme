<?php 
   theme_include('header'); 
?>
      <section>
         <div class='inner'>	
<?php 
   if (has_posts()) {
      $i = 0; 
      while (posts()) { 
?>	
            <article class='post'>
               <header>
                  <a href='<?php echo article_url(); ?>' title='<?php echo article_title(); ?>'>
                     <h3><?php echo article_title(); ?></h3>
                  </a>
                  <span class='time'>Posted: <?php echo article_date(); ?></span>	
               </header>
               <section class='image'>				
                  <img src='<?php echo str_replace(' ', '%20', article_custom_field('post_image', '')); ?>' alt='Post header image' />
               </section>
               <section class='text'>
<?php 
         echo article_markdown(); 
?>
               </section>
            </article>
<?php    
      } 
   }
?>	
         </div>
      </section>
<?php 
   theme_include('footer'); 
?>
