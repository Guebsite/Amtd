<h3 class="h3">Blog: Hombres Trabajando</h3>
<?php query_posts('category_name=hombres&posts_per_page=6');?>              
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article class="col-12">
                <header class="art">
                  <h2 class="h2 col-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  
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