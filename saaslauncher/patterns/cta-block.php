<?php

/**
 * Title: Call to Action
 * Slug: saaslauncher/cta-block
 * Categories: saaslauncher-cta
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/hero_bg.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-cta"],"name":"Call to Action"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0rem","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":2536,"dimRatio":40,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0},"minHeight":640,"gradient":"dark-gradient-large","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"color":{"duotone":"unset"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-cover" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);min-height:640px"><img class="wp-block-cover__image-background wp-image-2536 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-large-gradient-background"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"is-style-default","style":{"typography":{"lineHeight":"1.3","textAlign":"center","fontSize":"68px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center is-style-default has-light-color-color has-text-color has-link-color" style="font-size:68px;line-height:1.3"><?php esc_html_e('Try It Free. Scale When You’re Ready.', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"has-foreground-alt-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textAlign":"center"}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Get started without limits. Explore all features at your own pace — upgrade only when your business grows.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:44px"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Get Started Free', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->