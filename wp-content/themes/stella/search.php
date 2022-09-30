<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Stella
 */

get_header();
?>
    >


<?php if (have_posts()) : ?>

    <section class="page-title"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/5.jpg)">
        <div class="auto-container">
            <h2><?php
                /* translators: %s: search query. */
                printf(esc_html__('Search Results for: %s', 'stella'), '<span>' . get_search_query() . '</span>');
                ?></h2>

        </div>
    </section>


    <div class="sidebar-page-container">
    <div class="auto-container">
    <div class="row clearfix">
    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
    <div class="blog-classic padding-right"> <?php
    /* Start the Loop */
    while (have_posts()) :
        the_post();

        /**
         * Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called content-search.php and that will be used instead.
         */
        get_template_part('template-parts/content', 'search');

    endwhile;

    the_posts_navigation();

else :

    get_template_part('template-parts/content', 'none');

endif;
?>
    </div>
    </div>
    </div>
    </div>
    </div>


<?php
// get_sidebar();
get_footer();