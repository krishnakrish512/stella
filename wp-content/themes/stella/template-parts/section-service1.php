<?php
$content = get_sub_field('section_setting'); ?>
<!-- Services Section Two -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2><?php echo $content['title']; ?></h2>
            <div class="text"><?php echo $content['description']; ?></div>
        </div>

        <div class="row clearfix">

            <!-- Service Block -->
            <?php

            $args = array(
                'post_type' => 'service',
                'order' => 'ASC',
                'posts_per_page' => -1

            );

            $the_query = new WP_Query($args);

            while ($the_query->have_posts()) :
                $the_query->the_post();
                ?>
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon <?= get_field('icon'); ?>"></span>
                            </div>
                            <h3><a href="<?= get_the_permalink($post->ID); ?>"><?= get_the_title($post->ID); ?></a></h3>
                            <div class="text"><?= get_field('short_description'); ?></div>
                            <a href="<?= get_the_permalink($post->ID); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
<!-- End Services Section Two -->