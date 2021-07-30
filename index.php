<?php get_header(); ?>

    <!-- HEROSECTION -->
    <section class="heroSection">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>Ingrese a nuestro catalogo de propiedades</h3>
            <br>
            <form action="/" method="get">
              <div class="form-group">
                <input 
                  type="text" 
                  class="form-control" 
                  id="exampleInputPassword1" 
                  placeholder="Qué propiedad está búscando?"
                  name="s"
                  value="<?php the_search_query(); ?>">
                <button type="submit" class="btn btn-primary btnBusqueda">Buscar</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /HEROSECTION -->

    <!-- DESTACADO -->
    <section class="destacado">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Algunas propiedades destacadas</h2>
            <p>Te esperamos con nuestras propiedades en venta y alquiler.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- /DESTACADO -->

    <!-- GALERIADESTACADA -->
    <section class="galeriaDestacada">
      <div class="container">
        <div class="row">
          <div class="col-3">
             <div class="rib">VENTAS</div>
             <?php query_posts('category_name=destacadas-ventas&showposts=1'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php echo esc_url( home_url( '/ventas' ) ); ?>"><button type="button" class="btnVerMas">VER TODAS LAS PROPIEDADES</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <div class="rib">ALQUILERES</div>
             <?php query_posts('category_name=destacadas-alquileres&showposts=1'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php echo esc_url( home_url( '/alquilers' ) ); ?>"><button type="button" class="btnVerMas">VER TODOS LOS ALQUILERES</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <div class="rib">DESARROLLO</div>
             <?php query_posts('category_name=destacadas-desarrollos&showposts=1'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php echo esc_url( home_url( '/desarrollos' ) ); ?>"><button type="button" class="btnVerMas">VER TODOS LOS DESARROOLLOS</button></a>
             <?php endwhile; ?>
          </div>

          <div class="col-3">
             <div class="rib">EXCLUSIVIDADES</div>
             <?php query_posts('category_name=destacadas-exclusividades&showposts=1'); ?>
             <?php while (have_posts()) : the_post(); ?>
             <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
             } ?>
             <h2 clas="titulo"><?php the_title(); ?></h2>
             <p class="texto"><?php the_excerpt(); ?></p>
             <a href="<?php echo esc_url( home_url( '/exclusividades' ) ); ?>"><button type="button" class="btnVerMas">VER PROPIEDADES EN EXCLUSIVIDAD</button></a>
             <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /GALERIADESTACADA -->

    <!-- LINEA DIVISORIA -->
    <div class="container">
      <div class="row">
        <div class="col">
          <hr>
        </div>
      </div>
    </div>
    <!-- /LINEA DIVISORIA -->

    <!-- DESCRIPCION -->
    <section class="descripcion">
      <div class="container">
        <div class="row">
          <div class="col">
          <?php query_posts('category_name=descripcion-punta&showposts=1'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              } ?>
            </a>
            <h2><?php the_title(); ?></h2>
            <article>
            <p>
              <?php the_content(); ?>
            </p>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /DESCRIPCION -->


    <?php get_footer(); ?>
   