<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stella
 */

get_header();
?>

    <section class="page-title"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Blog Details</h2>
            <ul class="page-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>

    <main id="primary" class="site-main">

        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

            // the_post_navigation(
            //     array(
            //         'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'stella') . '</span> <span class="nav-title">%title</span>',
            //         'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'stella') . '</span> <span class="nav-title">%title</span>',
            //     )
            // );

            // If comments are open or we have at least one comment, load up the comment template.
            // if (comments_open() || get_comments_number()) :
            //     comments_template();
            // endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();