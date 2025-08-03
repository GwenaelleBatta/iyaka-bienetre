<?php
/*
 * This template is used for displaying the Front Page (when selected in Settings > Reading).
 *
 * This template is used even when the option is selected, but a page is not. It contains fallback functionality
 * to ensure content is still displayed.
 */

get_header();

get_template_part('template-parts/home/banner');?>
<div id="content">
<?php get_template_part('template-parts/home/about');
 get_template_part('template-parts/home/cta');
get_template_part('template-parts/home/services');
get_template_part('template-parts/home/contact');
?>
</div>


 <?php get_footer(); ?>