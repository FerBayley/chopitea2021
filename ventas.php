<?php 

/*
Template Name: ventas
*/

?>

<?php get_header(); ?>

        <!-- SUBHEADER -->
        <section class="subHeader">
          <div class="container">
              <div class="row">
                  <div class="col">
                    <p>Estás en la sección propiedades a la venta</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- /SUBHEADER -->

    <!-- GALERIA VENTAS -->
    <section class="galerias">
        <div class="container">
            <div class="row">
                <!-- COL VENTAS 1 -->
                <div class="col-12 col-md-3 galeria">
                    <?php query_posts('category_name=ventas-col-1&showposts=100'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      } ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <article>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">
                      <button type="button" class="btnVerMas separador">Ver Más</button>
                    </a>
                    <?php endwhile; ?>
                </div>
                <!-- /COL VENTAS 1 -->

                <!-- COL VENTAS 2 -->
                <div class="col-12 col-md-3 galeria">
                    <?php query_posts('category_name=ventas-col-2&showposts=100'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                          <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          } ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <article>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                          <button type="button" class="btnVerMas separador">Ver Más</button>
                        </a>
                        <?php endwhile; ?>
                </div>
                <!-- /COL VENTAS 2 -->


                <!-- COL VENTAS 3 -->
                <div class="col-12 col-md-3 galeria">
                    <?php query_posts('category_name=ventas-col-3&showposts=100'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                          <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          } ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <article>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                          <button type="button" class="btnVerMas separador">Ver Más</button>
                        </a>
                        <?php endwhile; ?>
                </div>
                <!-- /COL VENTAS 3 -->


            <!-- COL VENTAS 3 -->
            <div class="col-12 col-md-3 galeria">
                    <?php query_posts('category_name=ventas-col-4&showposts=100'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                          <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          } ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <article>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                          <button type="button" class="btnVerMas separador">Ver Más</button>
                        </a>
                        <?php endwhile; ?>
                </div>
                <!-- /COL VENTAS 3 -->
            </div>
            
        </div>
        
    </section>
    <!-- /GALERIA VENTAS -->

<?php get_footer(); ?>