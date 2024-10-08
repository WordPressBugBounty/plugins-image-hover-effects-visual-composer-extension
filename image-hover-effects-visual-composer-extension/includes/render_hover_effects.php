<?php
if (!defined('ABSPATH')) {
    exit;
}

$caption_dir = ($caption_style == 'circle') ? $caption_direction : $caption_direction_square;
?>

<div class="ih-item <?php
if (($caption_style == 'square' && $hover_effect == 'effect8') || ($caption_style == 'circle' && $hover_effect == 'effect6')) {
    echo esc_attr('scale_up');
}
?> <?php echo esc_attr($caption_style); ?> <?php echo esc_attr($hover_effect); ?> <?php echo esc_attr($caption_dir); ?>">
    <a class="taphover" href="<?php
    echo esc_url($caption_url != '') ? esc_url($caption_url) : 'javascript:void(0)';
    ?>" target="<?php echo esc_attr($caption_url_target); ?>">
        <?php if ($caption_style == 'circle' && $hover_effect == 'effect1') {
            echo '<div class="spinner"></div>';
        } ?>

        <div class="img"><img class="responsiveimage" src="<?php echo esc_url($image_url); ?>" alt="img"></div>

        <?php if ($caption_style == 'square' && $hover_effect == 'effect4') {
            echo '<div class="mask1"></div><div class="mask2"></div>';
        } ?>

        <?php if ($caption_style == 'circle' && $hover_effect == 'effect8') { ?>
            <div class="info-container">
                <div class="info">
                    <h3><?php echo esc_html($ihe_heading); ?></h3>
                    <?php echo esc_html($content); ?>
                </div>
            </div>
        <?php } else { ?>
            <div class="info">
                <div class="info-back">
                    <h3><?php echo esc_html($ihe_heading); ?></h3>
                    <?php echo esc_html($content); ?>
                </div>
            </div>
        <?php } ?>
    </a>
</div>
