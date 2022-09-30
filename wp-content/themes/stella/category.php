<?php
/**
 * Template Name: Blogs
 */
/**
 * The template for displaying archive category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stella
 */

get_header();
?>

    <!--Page Title-->
    <section class="page-title"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Blog</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic padding-right">
                        <?php
                        while (have_posts()) :
                            the_post();
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
                                        <div class="link-box"><a href="<?php the_permalink(); ?>"
                                                                 class="theme-btn read-more">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        ?>

                    </div>

                    <!--Styled Pagination-->
                    <ul class="styled-pagination d-none">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                    <!--End Styled Pagination-->

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

<?php

get_footer();