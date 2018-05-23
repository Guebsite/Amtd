<?php get_header(); ?>

   <main class="cuerpo">
       <div class="container">
           <div class="row">
               <div class="col-12 col-lg-8 contenido">
              
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article class="col-12">
                <header class="art">
                  <h1 class="h1 col-md-7"><?php the_title(); ?></h1>
                  
                     </header>
                 <div class="container">
                     
                          
                   <div class="row">
                       <div class="col-12 resume">
                           <?php the_content(); ?>
                           
                           
                            

                       </div>                                              
                   </div>
                   
                   </div>
               </article>
               
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>          
               
               
               </div>
               
               <?php get_sidebar(); ?>
               
                              
           </div>          
       </div>       
   </main>
   <section class="areas">
      
      <?php include(TEMPLATEPATH.'/areas.php');?>
                  
              
   </section>
   <section class="info">
     
      <?php include(TEMPLATEPATH.'/info.php');?>
             
   </section>
   
<?php get_footer(); ?>