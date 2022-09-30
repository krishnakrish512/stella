<?php
$content = get_sub_field('section_setting'); ?>
<!-- Team Section -->
<section class="team-section style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <h2><?php echo $content['title']; ?></h2>
            <div class="text"><?php echo $content['sub_title']; ?></div>
        </div>

        <div class="clearfix">

            <!-- Team Block -->
            <?php
            $args = array(
                'post_type' => 'team',
                'posts_per_page' => 4,

            );

            $the_query = new WP_Query($args);

            while ($the_query->have_posts()) :
                $the_query->the_post();

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
                                    <li><a href="<?= get_field('twitter_url'); ?>"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li><a href="<?= get_field('skype_url'); ?>"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href=""><?php the_title(); ?></a></h3>
                            <div class="designation"><?= get_field('designation'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>


        </div>
</section>
<!-- End Team Section -->