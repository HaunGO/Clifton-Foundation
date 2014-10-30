<!doctype html>
<html class="no-js" lang="en" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>




  <header>
      <img id='dc-logo' src='img/site/DavidClifton_LOGO_wht.svg' alt='logo' />
  </header>


  <!-- Starting the Top-Bar -->
  <div class="sticky contain-to-grid">
    <nav class="top-bar" data-topbar >
      
      <ul class="title-area">
        <li class="name">
          <h1 id='navLogo'><img src='img/site/DavidClifton_LOGO_wht.svg'  alt='David Clifton' /></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
<?php 
  // Top navigation menu
 // wp_nav_menu( array(
    //'theme_location' => 'top-navigation'
  //)
//); 
      ?>

        <ul class="right">
          <li><a href="#" >About</a></li>
          <li class="nav-active"><a href="#">Music</a></li>
          <li><a href="#">Pottery</a></li>
          <li><a href="#">Art</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">News</a></li>
        </ul>

       </section>

    </nav>
  </div>













