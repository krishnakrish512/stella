<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stella
 */

?>


<!-- News Block Three-->
<div class="news-block-three">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image"><a href="<?php the_permalink(); ?>"><img
                            src="<?php the_post_thumbnail_url('full'); ?>" alt=""></a>
            </figure>
            <span class="date"><?php the_time('jS F Y'); ?></span>
        </div>
        <div class="lower-content">
            <div class="post-meta">
                <ul class="post-info clearfix">
                    <li><a href="">By : <?= get_field('author_name'); ?></a></li>
                    <li>
                        <?php the_category(); ?></li>

                    <li><a href="#">Comments: <?php get_comments_number() ?></a></li>
                </ul>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="text"><?= get_field('short_description'); ?></div>
            <div class="link-box"><a href="<?php the_permalink(); ?>" class="theme-btn read-more">Read
                    more</a></div>
        </div>
    </div>
</div>