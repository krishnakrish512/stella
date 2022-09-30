<?php
/**
 * The template for displaying team archive pages
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
            <h2>Our Team</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Page Section -->
    <section class="team-page-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Our Dedicated Team</h2>
                <div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the
                    end
                    of the day, going forward, a new normal that has evolved from generation X is on the runway heading
                    towards a streamlined cloud solution.
                </div>
            </div>

            <div class="clearfix">

                <!-- Team Block -->
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="team-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""/>
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="<?= get_field('facebook_Url'); ?>"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li><a href="<?= get_field('linkedin_url'); ?>"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                        <li><a href="<?= get_field('twitter_url'); ?>"><i
                                                        class="fab fa-twitter-square"></i></a>
                                        </li>
                                        <li><a href="<?= get_field('skype_url'); ?>"><i class="fab fa-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#"><?php the_title() ?></a></h3>
                                <div class="designation"><?= get_field('designation'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </section>
    <!-- End Story Section -->
<?php get_footer(); ?>