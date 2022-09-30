<?php
/**
 * The template for displaying all Service single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stella
 */

get_header();
?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?= get_field('banner_image'); ?>)">
        <div class="auto-container">
            <h2><?php the_title(); ?></h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Services</li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <?php
                while (have_posts()):
                    the_post();
                    ?>
                    <!--Content Side / Services Detail -->
                    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="services-detail">

                            <div class="inner-box">
                                <div class="bold-text"><?= get_field('main_heading'); ?></div>
                                <div class="text">
                                    <?= get_field('main_description'); ?>

                                    <!-- Two Column -->
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                                <?php while (have_rows('image_repeater')):
                                                    the_row(); ?>
                                                    <div class="image">
                                                        <img src="<?php the_sub_field('image_url'); ?>" alt=""/>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>

                                            </div>
                                            <div class="content-column col-lg-8 col-md-8 col-sm-12">
                                                <div class="inner-column">
                                                    <h3><?= get_field('sub_heading'); ?></h3>
                                                    <?= get_field('sub_description'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><?= get_field('heading'); ?></h4>
                                    <ul class="list-style-four">
                                        <?= get_field('listing'); ?>
                                    </ul>
                                    <div class="service-contact-box"> Our experienced Designers help for your home
                                        interior.
                                        <br> <a href="http://localhost/stella/contact/">Contact our team</a> to learn
                                        more!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Sidebar Widget / List Widget-->
                        <div class="sidebar-widget list-widget">
                            <!-- Services List -->
                            <ul class="services-list">
                                <li class="active"><a href="residental-interior.html">Residential Interior</a></li>
                                <li><a href="commercial-interior.html">Commercial Interior</a></li>
                                <li><a href="office-interior.html">Office Designs</a></li>
                                <li><a href="hospitality-design.html">Hospitality Design</a></li>
                                <li><a href="modern-furniture.html">Modern Furniture</a></li>
                                <li><a href="modular-kitchen.html">Modular Kitchen</a></li>
                                <li><a href="wardrobe.html">Wordrobe</a></li>
                                <li><a href="false-celling-design.html">False Celling Designs</a></li>
                            </ul>
                        </div>

                        <!-- Sidebar Widget / Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                            <div class="widget-content"
                                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg);">
                                <h3>Get Free Quote</h3>
                                <a href="http://localhost/stella/contact/" class="theme-btn btn-style-one"><span
                                            class="txt">contact
                                    us</span></a>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>


<?php
get_footer();