 <!-- PREFOOTER -->
 <section class="preFooter">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8"></div>

          <div class="col-12 col-md-4 col-md-12 formularioFoter">
            <?php query_posts('category_name=form-pie&showposts=1'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /PREFOOTER -->

    <!-- FOOTER -->
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo-footer.png" alt="Logo Chopitea Estate Footer">
            <h3>Sobre nosotros</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
              Donec odio. Quisque volutpat mattis eros. Nullam malesuada 
              erat ut turpis. Suspendisse urna nibh, viverra non, semper 
              suscipit, posuere a, pede.
              Donec nec justo eget felis facilisis fermentum. Aliquam porttitor 
              mauris sit amet orci. Aenean dignissim pellentesque felis.
            </p>
          </div>

          <div class="col-12 col-md-3">
            <h3 class="link">Algún texto acá</h3>
            <p>Como trabaja Chopitea States</p>
            <p>Punta del Este</p>
            <p>Chopitea States Luxi</p>
            <p>Chopitea States Emprendimientos</p>
            <p>Careers</p>
          </div>

          <div class="col-12 col-md-3">
            <h3 class="link">Algún texto acá</h3>
            <p>Como trabaja Chopitea States</p>
            <p>Punta del Este</p>
            <p>Chopitea States Luxi</p>
            <p>Chopitea States Emprendimientos</p>
            <p>Careers</p>
          </div>

          <div class="col-12 col-md-3">
            <h3 class="link">Algún texto acá</h3>
            <p>Como trabaja Chopitea States</p>
            <p>Punta del Este</p>
            <p>Chopitea States Luxi</p>
            <p>Chopitea States Emprendimientos</p>
            <p>Careers</p>
          </div>
        </div>
      </div>
      <!-- /FOOTER -->

    <!-- LEGALES -->
    <section class="legales">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7">
            <p>2021 Chopitea States, Todos los derechos reservados. Políticas  |  Términos y condiciones</p>
          </div>

          <div class="col-12 col-md-5">
            <p>Punta del Este | Uruguay | +598.94.200.598 | info@chopiteastates.com</p>
          </div>
        </div>
      </div>
    </section>
    <!-- /LEGALES -->
    </section>
    
    <!-- /FOOTER-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>