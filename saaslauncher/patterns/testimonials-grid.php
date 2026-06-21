<?php

/**
 * Title: Testimonials Grid
 * Slug: saaslauncher/testimonials-grid
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/star_icon.png',
    $saaslauncher_url . 'assets/images/person_1.jpg',
    $saaslauncher_url . 'assets/images/person_2.jpg',
    $saaslauncher_url . 'assets/images/person_3.jpg',
    $saaslauncher_url . 'assets/images/person_4.jpg',
    $saaslauncher_url . 'assets/images/person_5.jpg',
    $saaslauncher_url . 'assets/images/person_6.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-testimonial"],"name":"Testimonials Grid"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1230px","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-bottom:60px;padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Pricing', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","textAlign":"left"}},"textColor":"light-color","fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:64px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px">View All Reviews', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. ', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. ', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2063,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2063" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. ', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2067,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2067" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"28px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:28px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free.', 'saaslauncher') ?> </p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2075,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2075" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free.', 'saaslauncher') ?> </p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2076,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2076" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":100,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. ', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2077,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[6]) ?>" alt="" class="wp-image-2077" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, GrowthPilot', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->