<?php
/**
 * Template Name: Homepage
 */

get_header();
?>
<?php echo do_shortcode( '[google-calendar-events id="1" type="list" max="3"]' ); ?>


<?php get_footer();
