<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skokov
 */

get_header(); ?>


<section>
    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
</section>

<?php
get_footer();
