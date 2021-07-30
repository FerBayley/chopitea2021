<?php 

/*
Template Name: contacto
*/

?>

<?php get_header(); ?>

    <!-- SUBHEADER -->
    <section class="subHeader">
        <div class="container">
            <div class="row">
                <div class="col">
                  <p>Estás en la sección de contacto</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /SUBHEADER -->

    <!-- CONTACTO -->
    <section class="contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                  <h2>Contacto | ¿En qué podemos ayudarlo?</h2>
            <br>
            <form>
              <?php query_posts('category_name=form-contacto&showposts=1'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </form>
        </div>

        <div class="col-12 col-md-6 imagenContacto">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-contacto.jpg" alt="Foto de contacto">
        </div>
      </div>
        </div>
    </section>
    <!-- /CONTACTO -->

<?php get_footer(); ?>