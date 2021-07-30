<?php 

/*
Template Name: nosotros
*/

?>


<?php get_header(); ?>

    <!-- CONTACTO -->
    <section class="contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                  <?php query_posts('category_name=nosotros&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <article>
                      <p>
                        <?php the_content(); ?>
                      </p>
                    </article>
                  <?php endwhile; ?>
                  </article>

                  <div class="container imgQuienesSomos">
                    <div class="row">
                      <div class="col-12 col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros1.jpg" alt="Nosotros 1">
                        <h2>Nombre y apellido</h2>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam veritatis commodi sunt? Autem minus totam expedita possimus atque veniam.
                        </p>
                      </div>
                      <div class="col-12 col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros2.jpg" alt="Nosotros 2">
                        <h2>Nombre y apellido</h2>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam veritatis commodi sunt? Autem minus totam expedita possimus atque veniam. 
                        </p>
                      </div>
                      <div class="col-12 col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros3.jpg" alt="Nosotros 3">
                        <h2>Nombre y apellido</h2>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam veritatis commodi sunt? Autem minus totam expedita possimus atque veniam.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 imagenContacto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros.jpg" alt="Foto de contacto">
                </div>
            </div>
        </div>
    </section>
    <!-- /CONTACTO -->

<?php get_footer(); ?>