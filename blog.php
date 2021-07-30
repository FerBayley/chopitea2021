<?php 

/*
Template Name: blog
*/

?>

<?php get_header(); ?>

    <!-- SUBHEADER -->
    <section class="subHeader">
        <div class="container">
            <div class="row">
                <div class="col">
                  <p>Estás en la sección de blog</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /SUBHEADER -->


<!-- BLOG -->
<section class="exclusividades">
      <div class="container">
        <div class="row">
          <div class="col-6">
             <?php query_posts('category_name=blog-col1&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMasBlog">VER MAS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-6">
             <?php query_posts('category_name=blog-col2&showposts=1000'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php the_permalink(); ?>"><button type="button" class="btnVerMasBlog">VER MAS</button></a>
             <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /BLOG -->

<?php get_footer(); ?>