<?php

/**
 * Title: Service Section
 * Slug: saaslauncher/services-section
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
<!-- wp:group {"metadata":{"categories":["saaslauncher-service"],"name":"Service Section"},"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"32%"} -->
        <div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
                <p class="has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Services We Offer', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":1,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.3","fontSize":"48px","textAlign":"left"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left is-style-default has-heading-color-color has-text-color has-link-color" style="font-size:48px;line-height:1.3"><?php esc_html_e('The Complete Toolkit to Build, Launch &amp; Scale', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"has-foreground-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textAlign":"left"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:44px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Send an Enquiry', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"0px"}}}} -->
            <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2540,"width":"60px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2540" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:auto" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('Business Scaling Idea', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2541,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"width":"0px","style":"none","radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2541" style="border-style:none;border-width:0px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('Notification &amp; Alert Integration', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"28px"}}}} -->
            <div class="wp-block-columns" style="margin-top:28px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2542,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2542" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('Cloud &amp; DevOps Services', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2543,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2543" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('Product Design &amp; UX', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"28px"}}}} -->
            <div class="wp-block-columns" style="margin-top:28px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2544,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2544" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('System Integrations', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":2545,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2545" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"32px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:500"><?php esc_html_e('Managed Support &amp; Growth', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->