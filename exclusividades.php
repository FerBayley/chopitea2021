<?php 

/*
Template Name: exclusividades
*/

?>


<?php get_header(); ?>

<!-- SUBHEADER -->
<section class="subHeader">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Estás en la sección de propiedades en exclusividad</p>
            </div>
        </div>
    </div>
</section>
<!-- /SUBHEADER -->


<!-- EXCLUSIVIDADES -->
<section class="exclusividades">
      <div class="container">
        <div class="row">
          <div class="col-3">
             <?php query_posts('category_name=exclusividades-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink() ?>"><button type="button" class="btnVerMas">VER MAS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <?php query_posts('category_name=exclusividades-col2&showposts=1000'); ?>
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
             <?php query_posts('category_name=exclusividades-col3&showposts=1000'); ?>
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
             <?php query_posts('category_name=exclusividades-col4&showposts=1000'); ?>
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
    <!-- /EXCLUSIVIDADES -->

<?php get_footer(); ?>