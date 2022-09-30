<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stella
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Stylesheets -->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <?php $Header = get_field('header_setting', 'option'); ?>

        <header class="main-header header-style-one">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="top-left clearfix">
                        <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a
                                href="tel:<?php echo $Header['phone_number'] ?>"
                                class="number"><?php echo $Header['phone_number'] ?></a></div>

                    </div>
                    <div class="top-right clearfix">
                        <!-- Info List -->

                        <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Top-menu',
                            'menu_class' => 'info-list',

                        )
                    );
                    ?>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container">
                    <div class="auto-container clearfix">
                        <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');

                    } ?>
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo"><a href="<?= get_home_url(); ?>"><img src="<?php echo $logo; ?>" alt=""
                                        title=""></a>
                            </div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-1"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                    <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'Primary-menu',
                                    'menu_class' => 'navigation clearfix',
                                    'add_li_class' => 'dropdown'
                                )); ?>

                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Outer Box -->
                            <div class="outer-box clearfix">
                                <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="<?= get_home_url(); ?>"><img src="<?php echo $logo; ?>" alt=""
                                title=""></a></div>
                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <?php $footer = get_field('footer_setting', 'option'); ?>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="<?php echo $footer['twitter_url'] ?>"><span class="fab fa-twitter"></span></a>
                            </li>
                            <li><a href="<?php echo $footer['facebook_url'] ?>"><span
                                        class="fab fa-facebook-square"></span></a></li>
                            <li><a href="<?php echo $footer['linkedin_url'] ?>"><span
                                        class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="<?php echo $footer['google_plus_url'] ?>"><span
                                        class="fab fa-google-plus-g"></span></a></li>
                            <!-- <li><a href="#"><span class="fab fa-youtube"></span></a></li> -->
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->