<?php
/**
 * The template for displaying Testimonial archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soanas
 */

get_header();
?>

    <!--Page Title-->
    <section class="page-title"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Testimonials</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Testimonials Page Section -->
    <section class="testimonials-page-section">
        <div class="auto-container">

            <!-- Page Title -->
            <div class="title-box">
                <h2>What Our Clients Says</h2>
                <div class="text">Thousands of People Take Our Interior Service</div>
            </div>

            <div class="row clearfix">

                <!-- Testimonial Block -->
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="image-outer">
                                    <div class="image">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""/>
                                    </div>
                                </div>
                                <h3><?php the_title() ?></h3>
                                <div class="title"><?= get_field('title'); ?></div>
                                <div class="text"><?= get_field('testimonial'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>


            </div>

        </div>
    </section>
    <!-- End Story Section -->
<?php get_footer() ?>