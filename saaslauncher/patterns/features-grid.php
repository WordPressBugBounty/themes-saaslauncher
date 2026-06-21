<?php

/**
 * Title: Features Grid
 * Slug: saaslauncher/features-grid
 * Categories: saaslauncher-service
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/icon_101.png',
    $saaslauncher_url . 'assets/images/icon_102.png',
    $saaslauncher_url . 'assets/images/icon_103.png',
    $saaslauncher_url . 'assets/images/icon_104.png',
    $saaslauncher_url . 'assets/images/icon_105.png',
    $saaslauncher_url . 'assets/images/icon_106.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-service"],"name":"Features/Service Section"},"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"9rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:9rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
                <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Core Features', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e('Everything You Need, Streamlined into One Easy Workflow', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"580px"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
            <p class="has-text-align-center"><?php esc_html_e('Make everyday operations more efficient with smart automation that simplifies routine tasks, enhances workflows.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"},"margin":{"top":"0px"}},"border":{"width":"0px","style":"none"}}} -->
    <div class="wp-block-columns" style="border-style:none;border-width:0px;margin-top:0px"><!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2540,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2540" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('Scalability &amp; Flexibility', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2541,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2541" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('Smart Alerts &amp; Notifications', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2542,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2542" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('Seamless Integration', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"},"margin":{"top":"30px"}},"border":{"width":"0px","style":"none"}}} -->
    <div class="wp-block-columns" style="border-style:none;border-width:0px;margin-top:30px"><!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2543,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2543" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('Workflow Automation', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2544,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2544" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('AI-Powered Insights', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"right":"32px","bottom":"28px","top":"32px","left":"32px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"2px","color":"#151B31"}}} -->
        <div class="wp-block-column has-border-color" style="border-color:#151B31;border-width:2px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:32px;padding-right:32px;padding-bottom:28px;padding-left:32px"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":2545,"width":"50px","height":"49px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2545" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:contain;width:50px;height:49px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"heading-color"} -->
                <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:40px;font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e('Advanced Analytics', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"14px","bottom":"0"}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:14px;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:60px"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff24","width":"2px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff24;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Explore all Features', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->