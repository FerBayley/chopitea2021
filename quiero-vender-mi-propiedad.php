<?php 

/*
Template Name: quiero-vender-mi-propiedad
*/

?>

<?php get_header(); ?>

    <!-- SUBHEADER -->
    <section class="subHeader">
        <div class="container">
            <div class="row">
                <div class="col">
                  <p>Estás en el lugar correcto para vender tu propiedad</p>
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
                  <h2>Te pedimos unos datos para poder tasar tu propiedad</h2>
            <br>
            <form>
              <?php query_posts('category_name=vender-propiedad&showposts=1'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </form>
        </div>

        <div class="col-12 col-md-6 imagenContacto">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vende-tu-propiedad.jpg" alt="Foto de contacto">
        </div>
      </div>
        </div>
    </section>
    <!-- /CONTACTO -->

<?php get_footer(); ?>