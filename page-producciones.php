<?php 
/*
Template name: Area-Producciones
*/
?>
<?php get_header(); ?>

   <main class="cuerpo">
       <div class="container">
           <div class="row">
               <div class="col-12 col-lg-8 contenido">
              
         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="articulo">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content() ?></p>					
            </article>     
                
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>
               
               <?php include(TEMPLATEPATH.'/areaproducciones.php');?>
               
               </div>
               
               <?php get_sidebar(); ?>
               
                              
           </div>          
       </div>       
   </main>
   <section class="areas">
      
      
                  
              
   </section>
   <section class="info">
     
      <?php include(TEMPLATEPATH.'/info.php');?>
             
   </section>
   
<?php get_footer(); ?>