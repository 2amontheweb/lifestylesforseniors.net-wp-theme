<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lifestyles_For_Seniors
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <link rel="shortcut icon" href="<?#php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript & jQuery
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lifestyles-for-seniors' ); ?></a>

      <header id="header-main" class="site-header" role="banner">
        <div class="row social-bar">
          <div class="container">
            <div class="float-left">
              <div class="social-item padding-right">
                <i class="fa fa-phone"></i>
                <span class="text">1.800.517.1134</span>
              </div>
              <div class="social-item">
                <i class="fa fa-fax"></i>
                <span class="text">1.866.847.5508</span>
              </div>
            </div>
            <div class="float-right">
              <div class="social-item padding-right">
                <a href="http://www.yelp.com" target="_blank">
                  <i class="fa fa-yelp"></i>
                </a>
              </div>
              <div class="social-item padding-right">
                <a href="https://twitter.com" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="social-item">
                <a href="https://www.facebook.com" target="_blank">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <nav class="navbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Top 50 Nav Logo">
                <span class="text">Lifestyles for Seniors</span>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
              wp_nav_menu( array(

                'theme_location' => 'header',
                'container'       => 'nav',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav navbar-right row'

              ) );
            ?>
          </div><!-- /.container-fluid -->
        </nav>
      </header><!-- #masthead -->
