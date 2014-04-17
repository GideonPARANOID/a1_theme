<?php 
   theme_include('header'); 
?>
      <section>
         <div class='inner'>
            <article class='post'>
               <header>
                  <a href='<?php echo article_url(); ?>' title='<?php echo article_title(); ?>'>
                     <h3><?php echo article_title(); ?></h3>
                  </a>				
                  <span class='time'>Posted: <?php echo article_date(); ?></span>			
               </header>
               <section class='image'>
                  <img src='<?php echo article_custom_field('post_image', ''); ?>' />
               </section>
               <section class='text-share'>
<?php 
   echo article_markdown(); 
?>
               </section>
<?php
   theme_include('share');
?>
            </article>
         </div>
      </section>		
<?php 
   theme_include('footer'); 
?>
