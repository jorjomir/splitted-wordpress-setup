<?php
/* Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();
    ?>
               
            <?php
            wp_nav_menu(array(
                'container'      => 'ul',
                'menu_class'     => 'menu',
                'theme_location' => 'primary',
                'menu_id'        => 'topMenu',
                'walker'         => new Primary_Menu_Output_Header(),
            ));
            ?>
        </div>
    </div>
    
    