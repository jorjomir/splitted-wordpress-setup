<?php
/* ARCHIVE PAGE */
get_header();
?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
?>
    <p>Sorry, no posts matched your criteria.</p>
<?php } ?>

<?php get_footer(); ?>