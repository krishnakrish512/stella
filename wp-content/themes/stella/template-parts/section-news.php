<?php
$content = get_sub_field('section_setting'); ?>
<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2><?php echo $content['title']; ?></h2>
            <div class="text"><?php echo $content['sub_title']; ?></div>
        </div>

        <div class="row clearfix">
            <?php

            $args = [
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'order' => 'DESC',
                'posts_per_page' => 3
            ];
            $posts = get_posts($args);
            foreach ($posts as $post):
                ?>


                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a
                                    href="<?php the_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($post->ID, 'full'); ?></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li>By <span><?= get_field('author_name'); ?></span></li>
                                <li><?php the_category(); ?></li>
                            </ul>
                            <h3><a href="<?php the_permalink($post->ID); ?>"><?php the_title() ?></a>
                            </h3>
                            <a href="<?php the_permalink($post->ID); ?>" class="read-more">Read more <span
                                        class="icon flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
<!-- End News Section -->