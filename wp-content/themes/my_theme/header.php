<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!--    <link rel="shortcut icon" href="--><?php //echo THEME_URL; ?><!--img/favicon.png">-->

    <title><?php bloginfo('name').' '. wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
<?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php the_field('logo','options'); ?>"></a>
            </div>
            <!--<div class="navbar-collapse collapse ">-->
                <?php wp_nav_menu( [
                    'theme_location'  => 'head_menu',
                    'container'       => 'div',
                    'container_class' => 'navbar-collapse collapse',
                    'container_id'    => '',
                    'menu_class'      => 'nav navbar-nav',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] ); ?>

                <!--<ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Service</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Feature <b class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="button.html">Buttons</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="price.html">Price</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="dropdown language">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="<?php /*echo THEME_URL; */?>img/flags/us.png">
                            <span class="username">US</span>
                            <b class=" fa fa-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img alt="" src="<?php /*echo THEME_URL; */?>img/flags/es.png"> Spanish</a></li>
                            <li><a href="#"><img alt="" src="<?php /*echo THEME_URL; */?>img/flags/de.png"> German</a></li>
                            <li><a href="#"><img alt="" src="<?php /*echo THEME_URL; */?>img/flags/ru.png"> Russian</a></li>
                            <li><a href="#"><img alt="" src="<?php /*echo THEME_URL; */?>img/flags/fr.png"> French</a></li>
                        </ul>
                    </li>
                    <li><input type="text" placeholder=" Search" class="form-control search"></li>
                </ul>-->
<!--            </div>-->
        </div>
    </div>
</header>
<!--header end-->