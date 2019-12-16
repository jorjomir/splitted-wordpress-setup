<?php

function teva_customize_theme_options_import($wp_customize)
{
    $wp_customize->add_section('fentora_options', array(
        'title'    => __('Fentora Options', 'fentora'),
        'priority' => 30
    ));

    $wp_customize->add_setting('footer_teva_logo', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_teva_logo', array(
        'label'    => __('Footer Teva Logo', 'fentora'),
        'section'  => 'fentora_options',
        'settings' => 'footer_teva_logo',
    )));

    $wp_customize->add_setting('teva_phone_number', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'teva_phone_number', array(
        'label'    => __('Phone Number', 'fentora'),
        'section'  => 'fentora_options',
        'settings' => 'teva_phone_number',
    )));

    $wp_customize->add_setting('teva_additional_info_site', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'teva_additional_info_site', array(
        'label'    => __('Additional Information Website', 'tevapharmro'),
        'section'  => 'fentora_options',
        'settings' => 'teva_additional_info_site',
    )));

    // Add pencil edit icon in customizer
    $wp_customize->selective_refresh->add_partial('footercredits', array(
        'selector' => '#selectiveFooterCredits',
    ));
}
