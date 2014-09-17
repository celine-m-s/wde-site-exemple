<!DOCTYPE html>
<html>
<head>


  <title><?php wp_title( '|', true, 'right' ); ?></title>



  <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- Accents -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!-- Amazing icons -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'> <!-- Raleway font -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- Leave those next 4 lines if you care about users using IE8 -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_uri() ); ?>"> <!-- My custom stylesheet -->
  <?php wp_head(); ?>
</head>

<body class="filter">

<div class="container" id="wrapper">
  <header>
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/lhooq.jpg" class="rounded" id="logo">
    <h2><?php bloginfo('description'); ?></h2>

    <nav class="navbar navbar-default visible-xs" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- Ajouter un menu (étape 3 avec Bootstrap) et gérée par WordPress. -->
        <?php
          wp_nav_menu( array(
          'menu' => 'third-nav',
          'theme_location' => 'third-nav',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse row',
          'container_id' => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          'walker' => new wp_bootstrap_navwalker())
          );
        ?>
      </div><!-- /.container-fluid -->
    </nav>

    <nav id="main-nav" class="hidden-xs">
      <?php
        wp_nav_menu('secondary-nav');
      ?>
    </nav>

  </header>