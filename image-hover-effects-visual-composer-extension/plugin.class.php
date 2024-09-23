<?php
/**
 * Plugin Main Class
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class VC_Image_Hover_Effects_Free
{

    public function __construct()
    {
        add_action('vc_before_init', array($this, 'register_shortcode'));
        add_shortcode('image-hover-effects-vc-free', array($this, 'render_image_hover_shortcode'));
        add_action('init', array($this, 'check_if_vc_is_install'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
    }

    public function enqueue_admin_styles()
    {
    	wp_enqueue_style('ihe-admin-styles', plugins_url('css/admin-styles.css', __FILE__), array(), '1.0.0');
    }

    public function register_shortcode()
    {
        include plugin_dir_path(__FILE__) . 'includes/setting-options.php';

        $ihe_main_var = array(
            'name' => __('Image Hover Effects', 'vc-image-hover'),
            'base' => 'image-hover-effects-vc-free',
            'category' => __('by labibahmed', 'vc-image-hover'),
            'description' => __('Insert Images with Hover Effects', 'vc-image-hover'),
            'params' => $settings_params,
        );

        vc_map($ihe_main_var);
    }

    public function render_image_hover_shortcode($attrs, $content = null)
    {
        extract(shortcode_atts(array(
            'ihe_heading' => '',
            'caption_url' => '',
            'caption_url_target' => '',
            'ihe_image' => '',
            'caption_style' => 'circle',
            'hover_effect' => 'effect1',
            'caption_direction' => 'left_to_right',
            'caption_direction_square' => 'top_to_bottom',
        ), $attrs));

        wp_enqueue_style('image-hover-css-free', plugins_url('css/image-hover.css', __FILE__), array(), '1.0.0');

        if (!empty($ihe_image)) {
            $image_url = wp_get_attachment_url($ihe_image);
        }

        ob_start();
        include plugin_dir_path(__FILE__) . 'includes/render_hover_effects.php';
        return ob_get_clean();
    }

    public function check_if_vc_is_install()
    {
        if (!defined('WPB_VC_VERSION')) {
            add_action('admin_notices', array($this, 'show_vc_version_notice'));
            return;
        }
    }

    public function show_vc_version_notice()
    {
        /* translators: %s: Plugin name */
        $plugin_name = __('Image Hover Effects - WPBakery Addon Free Version', 'vc-image-hover');
        /* translators: %s: Plugin name */
        echo '<div class="notice notice-error"><p>' . sprintf(esc_html__('The %s plugin requires <a href="https://1.envato.market/XPX54" target="_blank">WPBakery Page Builder</a> plugin to be installed and activated on your site.', 'vc-image-hover'), esc_html($plugin_name)) . '</p></div>';
    }

}

new VC_Image_Hover_Effects_Free();
