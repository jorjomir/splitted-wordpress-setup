<?php
/* Main Template File */

get_header();
?>


    <?php
    while (have_posts()) {
        the_post();
        the_content();
    }
    ?>
    <?php

    ?>

<?php
get_footer();
?>