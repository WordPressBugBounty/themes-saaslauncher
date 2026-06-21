<?php

/**
 * Title: About Us 3
 * Slug: saaslauncher/about-us-3
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"name":"About Us 3"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"9rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:9rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"60px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
        <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:60px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('About Us', 'saaslauncher') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontSize":"60px"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:0;font-size:60px;line-height:1.3"><?php esc_html_e('Strategic Thinking, Creative Vision, and Experience — United to Build Your Brand.', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small"} -->
            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Book an Appointtment', 'saaslauncher') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":1991,"dimRatio":0,"isUserOverlayColor":true,"minHeight":640,"gradient":"gradient-twelve","isDark":false,"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|dark-shade"},"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="border-radius:24px;min-height:640px"><img class="wp-block-cover__image-background wp-image-1991 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-twelve-gradient-background"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->