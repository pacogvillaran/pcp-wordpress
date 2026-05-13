<?php
/**
 * Plugin Name: PCP LearnWorlds Bridge
 * Description: Basic bridge settings for LearnWorlds wrapper pages.
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_init', function (): void {
    register_setting('pcp_lw_settings', 'pcp_lw_school_url', [
        'type' => 'string',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '',
    ]);

    add_settings_section('pcp_lw_main', 'LearnWorlds Settings', '__return_false', 'pcp-lw-settings');

    add_settings_field('pcp_lw_school_url', 'School URL', function (): void {
        $value = (string) get_option('pcp_lw_school_url', '');
        echo '<input type="url" class="regular-text" name="pcp_lw_school_url" value="' . esc_attr($value) . '" placeholder="https://your-school.learnworlds.com" />';
    }, 'pcp-lw-settings', 'pcp_lw_main');
});

add_action('admin_menu', function (): void {
    add_options_page('PCP LearnWorlds', 'PCP LearnWorlds', 'manage_options', 'pcp-lw-settings', function (): void {
        ?>
        <div class="wrap">
            <h1>PCP LearnWorlds</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('pcp_lw_settings');
                do_settings_sections('pcp-lw-settings');
                submit_button();
                ?>
            </form>
            <p>Use the page template <strong>LearnWorlds Wrapper</strong> to display your school URL in an iframe.</p>
        </div>
        <?php
    });
});
