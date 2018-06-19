<h3 class="h3 text-center">Intégrate a nuestras áreas</h3>
       <div class="container">
           <div class="row">
<?php query_posts('tag=areas&posts_per_page=10');?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              
               <div class="col-12 col-sm-6 offset-sm-3 col-md-4 offset-md-0 areas-items">
                   <a href="<?php the_permalink(); ?>">
                       <?php if (has_post_thumbnail() ) { the_post_thumbnail('list_articles_thumbs' );    }  ?>
                   </a>
               </div>
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>                
           </div>
           <h6 class="h6 text-center">Quieres servir a dios</h6>
           <a href="#" class="btn btn-info btn-serv col-8 offset-2 col-md-4 offset-md-4 col-xl-2 offset-xl-5">Quiero Servir</a>
       </div>
          