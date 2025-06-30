<?php
namespace Estatain\Inc\Core;

class Setup {
    public static function init() {
        add_action('after_setup_theme', [__CLASS__, 'theme_supports']);
        add_action('widgets_init', [__CLASS__, 'register_sidebars']);
        add_action('customize_register', [__CLASS__, 'customize_register']);
    }

    public static function theme_supports() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
        register_nav_menus([
            'primary' => __('Primary Menu', 'estatain'),
            'secondary' => __('Secondary Menu', 'estatain'),
        ]);
    }

    public static function register_sidebars() {
        register_sidebar([
            'name'          => __('Sidebar', 'estatain'),
            'id'            => 'sidebar-1',
            'description'   => __('Main Sidebar', 'estatain'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]);
    }

    public static function customize_register($wp_customize) {
        // Add Headline section
        $wp_customize->add_section('estatain_headline_section', [
            'title'    => __('Headline', 'estatain'),
            'priority' => 30,
        ]);
        // Add Headline text field
        $wp_customize->add_setting('estatain_headline', [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_headline', [
            'label'       => __('Headline text', 'estatain'),
            'section'     => 'estatain_headline_section',
            'type'        => 'text',
            'priority'    => 1,
        ]);
        // Add Headline link field
        $wp_customize->add_setting('estatain_headline_link', [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_headline_link', [
            'label'       => __('Headline link', 'estatain'),
            'section'     => 'estatain_headline_section',
            'type'        => 'url',
            'priority'    => 2,
        ]);
        // Add Headline link label field
        $wp_customize->add_setting('estatain_headline_link_label', [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_headline_link_label', [
            'label'       => __('Headline link label', 'estatain'),
            'section'     => 'estatain_headline_section',
            'type'        => 'text',
            'priority'    => 3,
        ]);
        // Add Headline icon/image field
        $wp_customize->add_setting('estatain_headline_icon', [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field', // For emoji or short text
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_headline_icon', [
            'label'       => __('Headline icon (emoji or short text)', 'estatain'),
            'section'     => 'estatain_headline_section',
            'type'        => 'text',
            'priority'    => 0,
        ]);
        
        // Add Footer section
        $wp_customize->add_section('estatain_footer_section', [
            'title'    => __('Footer', 'estatain'),
            'priority' => 40,
        ]);
        // Add Footer text field
        $wp_customize->add_setting('estatain_footer_text', [
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_text', [
            'label'       => __('Footer text', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'textarea',
            'priority'    => 1,
        ]);
        // Add Footer year field
        $wp_customize->add_setting('estatain_footer_year', [
            'default'           => date('Y'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_year', [
            'label'       => __('Footer year', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'text',
            'priority'    => 2,
        ]);
        // Add Footer social links
        $wp_customize->add_setting('estatain_footer_facebook', [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_facebook', [
            'label'       => __('Facebook URL', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'url',
            'priority'    => 10,
        ]);
        $wp_customize->add_setting('estatain_footer_linkedin', [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_linkedin', [
            'label'       => __('LinkedIn URL', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'url',
            'priority'    => 11,
        ]);
        $wp_customize->add_setting('estatain_footer_twitter', [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_twitter', [
            'label'       => __('Twitter URL', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'url',
            'priority'    => 12,
        ]);
        $wp_customize->add_setting('estatain_footer_youtube', [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control('estatain_footer_youtube', [
            'label'       => __('YouTube URL', 'estatain'),
            'section'     => 'estatain_footer_section',
            'type'        => 'url',
            'priority'    => 13,
        ]);
    }
} 