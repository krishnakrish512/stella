<?php
/**
 * The template for displaying archive service pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soanas
 */

get_header();
?>
<?php $Archive = get_field('archive_setting', 'option'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $Archive['banner_image'] ?>)">
        <div class="auto-container">
            <h2>Services</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Services Page Section -->
    <section class="services-page-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2><?php echo $Archive['title'] ?></h2>
                <div class="text"><?php echo $Archive['description'] ?></div>
            </div>

            <div class="row clearfix">

                <!-- Service Block -->
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>"
                                                                         alt=""/></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                                <div class="text"><?= get_field('short_description'); ?></div>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

        </div>
    </section>
    <!-- End Story Section -->


<?php get_footer() ?>