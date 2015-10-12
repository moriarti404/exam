<?php
/*
The header for work page.
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div class="container-fluid header-work">
    <div class="row">

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
            array(
                'theme_location' 	=> 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'col-md-4 col-md-offset-4',
                'menu_class' 		=> 'menu menu-work',
                'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                'menu_id'			=> 'main-menu',
                'walker' 			=> new wp_bootstrap_navwalker()
            )
        ); ?>

    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5 logo-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Company's logo" class="logo"/>
        </div>
    </div>
</div>


<div class="main-content">
    <?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div class="container-fluid">
        <div class="row">
            <div id="content" class="main-content-inner col-sm-12 col-md-12 work-header">
