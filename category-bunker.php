<?php get_header(); ?>

   <main class="cuerpo">
       <div class="container">
          
           <div class="row">
               <div class="col-12 col-lg-8 contenido">
               <?php query_posts('pagename=bunker') ?>              
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="articulo">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content() ?></p>					
            </article>     
                
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>
               
               
               
               
               <h3 class="h3">Blog: Amistad Búnker</h3>
<?php query_posts('category_name=bunker&posts_per_page=6');?>              
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article class="col-12">
                <header class="art">
                  <h2 class="h2 col-md-7"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  
                     </header>
                 <div class="container">
                     
                          
                   <div class="row">
                       <div class=" col-12 col-sm-3  imageart">
                           <a href="<?php the_permalink(); ?>">
                               <?php if (has_post_thumbnail() ) { the_post_thumbnail('list_articles_thumbs' );    }  ?>             
                           </a>
                           
                       </div>
                       <div class="col-12 col-sm-9 resume">
                           <?php the_excerpt(); ?>
                           <a href="<?php the_permalink(); ?>" class="btn btn-link btn-readmore col-5 offset-sm-7 col-xl-3 offset-xl-9">Leer Más <i class="fas fa-angle-double-right"></i></a>
                           
                       </div>                       
                   </div>
                   </div>
               </article>
               
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>          
               
               
               </div>
               
               <?php get_sidebar('areas'); ?>
               
                              
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