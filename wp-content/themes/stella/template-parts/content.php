<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stella
 */

?>
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Classic -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-single padding-right">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></figure>
                            <span class="date"><?php the_time('jS F Y'); ?></span>
                        </div>
                        <div class="lower-content">
                            <div class="post-meta">
                                <ul class="post-info clearfix">
                                    <li><a href="#">By : <?= get_field('author_name'); ?></a></li>
                                    <li><?php the_category(); ?></li>
                                    <li><a href="blog-detail.html">Comments: <?php get_comments_number() ?></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h3><?php the_title(); ?></h3>
                                <div class="text">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Comments Area-->
                    <div class="comments-area d-none">
                        <div class="group-title">
                            <h2>Comments 4</h2>
                        </div>
                        <div class="inner-box">
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value
                                            added activity to beta test. Override the digital divide with additional
                                            clickthroughs from DevOps.
                                        </div>
                                        <ul class="post-info">
                                            <li>08 Feb, 2019</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Robert john</strong></div>
                                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value
                                            added activity to beta test. Override the digital divide with additional
                                            clickthroughs from DevOps.
                                        </div>
                                        <ul class="post-info">
                                            <li>08 Feb, 2019</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value
                                            added activity to beta test. Override the digital divide with additional
                                            clickthroughs from DevOps.
                                        </div>
                                        <ul class="post-info">
                                            <li>08 Feb, 2019</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="comment reply-comment">
                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Robert john</strong></div>
                                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value
                                            added activity to beta test. Override the digital divide with additional
                                            clickthroughs from DevOps.
                                        </div>
                                        <ul class="post-info">
                                            <li>08 Feb, 2019</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value
                                            added activity to beta test. Override the digital divide with additional
                                            clickthroughs from DevOps.
                                        </div>
                                        <ul class="post-info">
                                            <li>08 Feb, 2019</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="comment-form">

                        <div class="group-title">
                            <h2>Leave a Comment</h2>
                        </div>
                        <div class="form-inner">
                            <?php if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif; ?>

                        </div>
                    </div>
                    <!--End Comment Form -->

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">


                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <?php get_search_form() ?>

                    </div>

                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <ul class="cat-list">
                            <?php $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                            } ?>
                        </ul>
                    </div>

                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h2>Recent News</h2>
                        </div>
                        <?php
                        // Define our WP Query Parameters
                        $the_query = new WP_Query('posts_per_page=3');


                        // Start our WP Query
                        while ($the_query->have_posts()) : $the_query->the_post();

                            ?>
                            <article class="post">
                                <figure class="post-thumb"><a href="<?php the_permalink(); ?>"><img
                                                src="<?php the_post_thumbnail_url('full'); ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
                                <div class="post-info"><?php the_time('jS F Y'); ?></div>
                            </article>
                        <?php

                        endwhile;
                        wp_reset_postdata();
                        ?>

                    </div>

                    <!-- Popular Tags -->
                    <div class="sidebar-widget popular-tags">
                        <div class="sidebar-title">
                            <h2>Tags</h2>
                        </div>
                        <?php $tags = get_tags('post_tag');
                        // var_dump($tags);
                        foreach ($tags as $tag):
                            ?>
                            <a href="<?= get_tag_link($tag->term_id) ?>"> <?= $tag->name ?></a>
                        <?php endforeach; ?>

                    </div>

                </aside>
            </div>


        </div>
    </div>
</div>