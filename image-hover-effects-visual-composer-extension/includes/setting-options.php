<?php
if (!defined('ABSPATH')) {
    exit;
}

$hover_effects = array(
    'Effect 1'  => 'effect1',
    'Effect 2'  => 'effect2',
    'Effect 3'  => 'effect3',
    'Effect 4'  => 'effect4',
    'Effect 5'  => 'effect5',
    'Effect 6'  => 'effect6',
    'Effect 7'  => 'effect7',
    'Effect 8'  => 'effect8',
    'Effect 9'  => 'effect9',
    'Effect 10' => 'effect10',
    'Effect 11' => 'effect11',
    'Effect 12' => 'effect12',
    'Effect 13' => 'effect13',
    'Effect 14' => 'effect14',
    'Effect 15' => 'effect15',
    'Effect 16' => 'effect16',
    'Effect 17' => 'effect17',
    'Effect 18' => 'effect18',
    'Effect 19' => 'effect19',
    'Effect 20' => 'effect20',
);

$scrollbar_styles = array(
    'No Scroll Bar' => 'cursor-hide',
    'Style1'        => 'cursor-style1',
    'Style2'        => 'cursor-style2',
    'Style3'        => 'cursor-style3',
    'Style4'        => 'cursor-style4',
    'Style5'        => 'cursor-style5',
    'Style6'        => 'cursor-style6',
    'Style7'        => 'cursor-style7',
    'Style8'        => 'cursor-style8',
    'Style9'        => 'cursor-style9',
    'Style10'       => 'cursor-style10',
);

$pro_link = 'https://webdevocean.com/product/image-hover-effects-wpbakery-extension/';

$settings_params = array(

    array(
        "type"          => "attach_image",
        "heading"       => __("Image"),
        "param_name"    => "ihe_image",
        "description"   => __("Use image of equal dimensions for better result. e.g: 300*300"),
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Caption Heading"),
        "param_name"    => "ihe_heading",
        "description"   => __("Give heading for caption"),
    ),

    array(
        "type"          => "textarea_html",
        "heading"       => __("Caption Description"),
        "param_name"    => "content",
        "description"   => __("Caption description. You can also use HTML."),
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("URL"),
        "param_name"    => "caption_url",
        "description"   => __("Give complete URL of link which opens when user clicks over image. Leave blank to disable link."),
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Link Target"),
        "edit_field_class" => "vc_col-sm-6",
        "param_name"    => "caption_url_target",
        "description"   => __("Write <b>_blank</b> to open the link in a new window and <b>_self</b> for the same window."),
    ),

    // Hover Effects Settings

    array(
        "type"          => "dropdown",
        "heading"       => "Image Style",
        "param_name"    => "caption_style",
        "value"         => array(
            "Circle" => "circle",
            "Square" => "square",
        ),
        "description"   => "Select image style. Image could be square or circle.",
        "group"         => 'Hover Effects',
    ),

    array(
        "type"          => "dropdown",
        "heading"       => __("Hover Animation Effect"),
        "edit_field_class" => "vc_col-sm-6",
        "param_name"    => "hover_effect",
        "description"   => __("Select animation effect which applies when hovering over the image."),
        "value"         => $hover_effects,
        "group"         => 'Hover Effects',
    ),

    array(
        "type"          => "dropdown",
        "heading"       => "Hover Animation Direction",
        "param_name"    => "caption_direction",
        "group"         => 'Hover Effects',
        "value"         => array(
            "Left To Right" => "left_to_right",
            "Right To Left" => "right_to_left",
            "Top To Bottom" => "top_to_bottom",
            "Bottom To Top" => "bottom_to_top",
        ),
        "dependency"    => array("element" => "caption_style", "value" => array("circle")),
        "description"   => "Select direction of animation when hovering over the image.",
    ),

    array(
        "type"          => "dropdown",
        "heading"       => "Hover Animation Direction",
        "param_name"    => "caption_direction_square",
        "group"         => 'Hover Effects',
        "value"         => array(
            "Top To Bottom" => "top_to_bottom",
            "Bottom To Top" => "bottom_to_top",
        ),
        "dependency"    => array("element" => "caption_style", "value" => array("square")),
        "description"   => "Select direction of animation when hovering over the image.",
    ),

    // PRO Features

    array(
        "type"          => "html",
        "heading"       => "<a style='text-decoration:none;text-align:center;' target='_blank' href='" . $pro_link . "' ><h3 style='padding: 15px;background: #81B441;color: #fff;border-radius: 5px;'>Buy Now To Unlock All Features</h3></a>",
        "param_name"    => "pro_feature",
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Image Width"),
        "param_name"    => "thumb_width",
        "edit_field_class" => "vc_col-sm-6 wdo_items_to_show",
        "description"   => __("Set custom width for the image. Give control to create gallery, banner, masonry layout etc using custom width height."),
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Image Height"),
        "param_name"    => "thumb_height",
        "edit_field_class" => "vc_col-sm-6 wdo_items_to_show",
        "description"   => __("Set custom height for the image. Give control to create gallery, banner, masonry layout etc using custom width height."),
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Heading Font Size"),
        "param_name"    => "caption_heading_size",
        "edit_field_class" => "vc_col-sm-6 wdo_row_3 wdo_items_to_show",
        "description"   => __("Font size (px) for caption heading."),
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "textfield",
        "heading"       => __("Description Font Size"),
        "param_name"    => "caption_description_size",
        "edit_field_class" => "vc_col-sm-6 wdo_row_3 wdo_items_to_show",
        "description"   => __("Font size (px) for caption description."),
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "dropdown",
        "heading"       => "Touch behaviour on Touch Devices",
        "param_name"    => "caption_touch",
        "edit_field_class" => "wdo_items_to_show wdo_padding_top",
        "value"         => array(
            "First Tap Hover & Second Tap Open link" => "hoverontap",
            "Open Link On First Tap" => "",
        ),
        "description"   => "Select how you want links to behave on touch devices when user touches over image.",
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "dropdown",
        "heading"       => "Caption Background Type",
        "param_name"    => "caption_bg_type",
        "edit_field_class" => "vc_col-sm-6 wdo_row_2 wdo_items_to_show",
        "value"         => array(
            "Color" => "color",
            "Image" => "image",
        ),
        "description"   => "Choose whether to use an image as the caption background or color. With this option enabled, you could use <a href='http://demo.webdevocean.com/#image-over-image-section' target='_blank'>image over image effect</a>",
        "group"         => 'PRO Features',
    ),

    array(
        "type"          => "colorpicker",
        "heading"       => __("Caption Background Color"),
        "param_name"    => "caption_bg_color",
        "edit_field_class" => "vc_col-sm-6 wdo_row_2 wdo_items_to_show",
        "description"   => __("Choose background color for the caption. <a style='text-decoration:none;font-weight: 500;font-style: normal;' href='http://demo.webdevocean.com/#bg-color-section' target='_blank'> (Demo)</a>"),
        "group"         => 'PRO Features',
        "dependency"    => array("element" => "caption_bg_type", "value" => array("color")),
    ),

    array(
        "type"          => "attach_image",
        "heading"       => __("Caption Background Image"),
        "param_name"    => "caption_bg_image",
        "edit_field_class" => "vc_col-sm-6 wdo_row_2 wdo_items_to_show",
        "description"   => __("Select the image <a style='text-decoration:none;font-weight: 500;font-style: normal;' href='http://demo.webdevocean.com/#image-over-image-section' target='_blank'> (Demo)</a>"),
        "group"         => 'PRO Features',
        "dependency"    => array("element" => "caption_bg_type", "value" => array("image")),
    ),
);

?>
