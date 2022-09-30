<?php
$content = get_sub_field('section_setting'); ?>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title-two centered">
            <h2><?php echo $content['title']; ?></h2>
            <div class="title-text"><?php echo $content['sub_title']; ?></div>
        </div>

        <div class="testimonial-carousel owl-carousel owl-theme">


            <?php

            $args = array(
                'post_type' => 'testimonial',
                'order' => 'ASC',
                'posts_per_page' => 2

            );

            $the_query = new WP_Query($args);
            // var_dump($the_query);

            while ($the_query->have_posts()) :
                $the_query->the_post();
                ?>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <?php $image = get_the_post_thumbnail($post->ID, 'full'); ?>
                                    <?= $image; ?>
                                </div>
                            </div>
                            <h3><?= get_the_title($post->ID); ?></h3>
                            <div class="title"><?= get_field('title'); ?></div>
                            <div class="text"><?= get_field('testimonial'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
<!-- End Testimonial Section -->