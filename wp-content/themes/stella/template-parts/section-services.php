<?php
$content = get_sub_field('section_setting'); ?>
<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <!-- Title Box -->
        <div class="title-box">
            <h2><?php echo $content['title']; ?></h2>
        </div>

        <div class="row clearfix">
            <?php

            $args = array(
                'post_type' => 'service',
                'order' => 'ASC',
                'posts_per_page' => 3

            );

            $the_query = new WP_Query($args);

            while ($the_query->have_posts()) :
                $the_query->the_post();
                ?>

                <!-- Service Block -->

                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <?php $image = get_the_post_thumbnail($post->ID, 'full'); ?>
                        <div class="image">
                            <a href="<?= get_the_permalink($post->ID); ?>"><?= $image; ?></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="<?= get_the_permalink($post->ID); ?>"><?= get_the_title($post->ID); ?></a></h3>
                            <div class="text"><?= get_field('short_description'); ?></div>
                            <a href="<?= get_the_permalink($post->ID); ?>" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
<!-- End Services Section -->