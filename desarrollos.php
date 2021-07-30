<?php 

/*
Template Name: desarrollos
*/

?>


<?php get_header(); ?>

    <!-- SUBHEADER -->
    <section class="subHeader">
        <div class="container">
            <div class="row">
                <div class="col">
                  <p>Estás en la sección propiedades en desarrollo</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /SUBHEADER -->


    <!-- DESARROLLOS -->
    <section class="desarrollos">
      <div class="container">
        <div class="row">
          <div class="col-3">
             <?php query_posts('category_name=desarrollos-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMas">VER MAS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <?php query_posts('category_name=desarrollos-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMas">VER MAS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <?php query_posts('category_name=desarrollos-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMas">VER MAS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <?php query_posts('category_name=desarrollos-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMas">VER MAS</button></a>
             <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /DESARROLLOS -->

<?php get_footer(); ?>