<!doctype html>
<html lang="es-ES">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content=""/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/600d9c40f5.js"></script>
    <?php wp_head(); ?>
    <?php wp_footer(); ?>

    <title>Bienvenidos a Chopitea Estates</title>
  </head>
  <body>

    <!-- PREHEADER -->
    <section class="preHeader">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-7"></div>
          <div class="col-12 col-sm-5">Punta del Este | Uruguay | +598.94.200.598 | <a href="mailto:info@chopiteastates.com">info@chopiteastates.com</a></div>
        </div>
      </div>
    </section>
    <!-- /PREHEADER -->
    
    <!-- HEADER -->
    <section class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col cabezal">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="Logo Shopitea Estates">
              </a>
              <button class="navbar-toggler hamburguesa" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="burger"><i class="fas fa-bars"></i></div>
              </button>
            
              <div class="collapse navbar-collapse menuList" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <?php
                      $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                      );
                      wp_nav_menu($args);
                      ?>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- /HEADER -->