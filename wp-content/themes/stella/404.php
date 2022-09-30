<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stella
 */

get_header();
?>

    <!--Page Title-->
    <section class="page-title"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/5.jpg)">
        <div class="auto-container">
            <h2>404</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>404</li>
            </ul>
        </div>
    </section>
    <br>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row align-items-center col-mb-80 justify-content-between">

                    <div class="col-lg-6 text-center">

                        <div class="heading-block text-center border-bottom-0">
                            <h1>Ooopps.! </h1>
                            <h4 class="nott">The Page you were looking for, couldn't be found.</h4>
                            <br>
                            <a class="site-btn" href="<?php echo home_url('/'); ?>">
                                <?php echo esc_html('Go to Home'); ?>
                            </a>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </section><!-- #content end -->

    <br>
<?php
get_footer();