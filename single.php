<?php get_header(); ?>

   <main class="cuerpo">
       <div class="container">
           <div class="row">
               <div class="col-12 col-lg-8 contenido">
              
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article class="col-12">
                <header class="art">
                  <h1 class="h1 col-12"><?php the_title(); ?></h1>
                  
                     </header>
                 <div class="container">
                     
                          
                   <div class="row">
                       <div class="col-12 resume">
                           <?php the_content(); ?>
                           
                           
                            

                       </div>                                              
                   </div>
                   <div class="row">
                       <div class="cats col-12 col-md-5 ">
                             <div class="catitems1 textcat">Área: 
                             </div>
                             <div class="catitems2 textatr">  &nbsp <?php the_category(); ?>
                             </div> 
                            </div>
                           
                           <div class="avatar-autor col-12 col-md-7 ">
                           <span>Autor: <?php the_author(); ?></span>
                           <?php $author_email = get_the_author_email(); echo get_avatar($author_email, '50'); ?>
                           
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
      
      <?php include(TEMPLATEPATH.'/areas2.php');?>
                  
              
   </section>
   <section class="info">
     
      <?php include(TEMPLATEPATH.'/info.php');?>
             
   </section>
   
<?php get_footer(); ?>