<?php get_header(); ?>



    <div class="container encabezado">
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>

<section class="contenedorPrincipal">
    <div class="container">
        <div class="row">
            <div class="col-8 imgSingle">
            <?php while (have_posts()) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) {
               the_post_thumbnail();
            } ?>
            <!-- Aca va el titutlo en caso de ser requerido -->
            <br>
            <br>
            <h2 class="infoFicha">INFORMACION BASICA</h2>
            <!-- DESCRIPCION -->
            <p class="descripcion">
              <?php 
               $cf_code = get_post_meta( get_the_ID(), 'descripcion', true );
               if ($cf_code) echo "".$cf_code. "<br>";
              ?>
            </p>
            <!-- /DESCRIPCION -->

            <h2 class="infoFicha">SUPERFICIES</h2>
            <!-- SUPERFICIE -->
            <p class="descripcion">
              <?php 
               $cf_code = get_post_meta( get_the_ID(), 'superficie', true );
               if ($cf_code) echo "".$cf_code. "<br>";
              ?>
            </p>
            <!-- /SUPERFICIE -->
            <h2 class="infoFicha">HAMBIENTES</h2>
            <!-- HAMBIENTES -->
            <p class="descripcion">
              <?php 
               $cf_code = get_post_meta( get_the_ID(), 'hambientes', true );
               if ($cf_code) echo "".$cf_code. "<br>";
              ?>
            </p>
            <!-- /HAMBIENTES -->

            <h2 class="infoFicha">ADICIONALES</h2>
            <!-- ADICIONALES -->
            <p class="descripcion">
              <?php 
               $cf_code = get_post_meta( get_the_ID(), 'adicionales', true );
               if ($cf_code) echo "".$cf_code. "<br>";
              ?>
            </p>
            <!-- /ADICIONALES -->

            <h2 class="infoFicha">DESCRIPCIONES</h2>
            <!-- DESCRIPCIONES -->
            <p class="descripcion">
              <?php 
               $cf_code = get_post_meta( get_the_ID(), 'descripciones', true );
               if ($cf_code) echo "".$cf_code. "<br>";
              ?>
            </p>
            <!-- /DESCRIPCIONES -->



            <h2 class="infoFicha">IMAGENES</h2>
            <?php endwhile; ?>
        </div>


            <div class="col-4 contactoFicha">
             <?php query_posts('category_name=contacto-ficha&showposts=1'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2><?php the_title(); ?></h2>
             <p><?php the_content(); ?></p>
             <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>