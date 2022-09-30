<?php
/**
 * List of all the avialble sections for flexible content.
 */
if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
        switch (get_row_layout()) {
            case 'banner_section':
                get_template_part('template-parts/section', 'banner');
                break;
            case 'services_section':
                get_template_part('template-parts/section', 'services');
                break;
            case 'contact_section':
                get_template_part('template-parts/section', 'contact');
                break;
            case 'about_section':
                get_template_part('template-parts/section', 'about');
                break;
            case 'interior_section':
                get_template_part('template-parts/section', 'interior');
                break;
            case 'team_section':
                get_template_part('template-parts/section', 'team');
                break;
            case 'mission_section':
                get_template_part('template-parts/section', 'mission');
                break;
            case 'action_section':
                get_template_part('template-parts/section', 'action');
                break;
            case 'service1_section':
                get_template_part('template-parts/section', 'service1');
                break;
            case 'project_section':
                get_template_part('template-parts/section', 'project');
                break;
            case 'fluid_section':
                get_template_part('template-parts/section', 'fluid');
                break;
            case 'testimonial_section':
                get_template_part('template-parts/section', 'testimonial');
                break;
            case 'featured_section':
                get_template_part('template-parts/section', 'featured');
                break;
            case 'news_section':
                get_template_part('template-parts/section', 'news');
                break;
        }
    endwhile;
endif;