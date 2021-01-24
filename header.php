<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/bookstore.css') ?>">
    <link href="<?php echo esc_url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') ?>" rel="stylesheet">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>

<!-- ***********************************************************       Header Section Starts     *************************************************** -->
<header>
    <!-- *******************************************        Navbar area starts         *********************************-->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info sticky-top">
            <a href="index.html" class="navbar-brand">
                <i class="fas fa-book-reader fa-2x mx-3"></i>Books
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>

                <?php
                // Primary navigation menu.
                wp_nav_menu(array(
                    'menu_class' => 'navbar-nav nav-link',
                    'theme_location' => 'primary',
                    'container' => false,
                ));
                ?>
            </div>
        </nav>
    </div>
    <!-- *******************************************        Navbar area Ends         *********************************-->

    <!-- *******************************************        Hero area Starts         *********************************-->
    <?php if(is_front_page()): ?>
    <div class="container-fluid text-center text-white">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h5>Making Best Future</h5>
                <h1>Pupular Education</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam impedit laborum nemo
                    temporibus voluptas.</p>
                <button class="btn btn-warning px-5 py-2 mb-2">Start Now</button>
                <button class="btn btn-outline-primary px-5 py-2 ml-2 text-dark">Register Now</button>
            </div>
            <div class="col-md-5 col-sm-12">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bg.jpg') ?>" alt="bg-photo">
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- *******************************************        Hero area Ends         *********************************-->
</header>
<!-- ***********************************************************       Header Section Ends       *************************************************** -->

