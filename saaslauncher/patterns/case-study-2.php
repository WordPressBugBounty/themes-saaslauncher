<?php

/**
 * Title: Case Study 2
 * Slug: saaslauncher/case-study-2
 * Categories: saaslauncher-gallery
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_2.jpg',
    $saaslauncher_url . 'assets/images/about_3.jpg',
    $saaslauncher_url . 'assets/images/about_5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"84px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:84px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"60px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
                <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:60px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
                    <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Case Study', 'saaslauncher') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontSize":"60px"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:0;font-size:60px;line-height:1.3"><?php esc_html_e('Powerful Tools to Help Modern Teams Scale', 'saaslauncher') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('More Stories', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":1991,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-twelve","isDark":false,"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|dark-shade"},"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:24px;min-height:480px"><img class="wp-block-cover__image-background wp-image-1991 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-twelve-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('65% Faster Reporting with Automation - BrightEdge Agency', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Automated dashboards reduced manual reporting time and improved client delivery speed.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:24px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"color":"#ffffff14","width":"2px","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-bottom:10px"><?php esc_html_e('See Full Story', 'saaslauncher') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"},"margin":{"top":"60px","bottom":"60px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:60px;margin-bottom:60px;padding-top:60px;padding-bottom:60px"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":1991,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-twelve","isDark":false,"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|dark-shade"},"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:24px;min-height:480px"><img class="wp-block-cover__image-background wp-image-1991 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-twelve-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('50+ Hours Saved with Workflow Automation - Taskflow Startup', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Automated dashboards reduced manual reporting time and improved client delivery speed.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:24px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"color":"#ffffff14","width":"2px","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-bottom:10px"><?php esc_html_e('See Full Story', 'saaslauncher') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":1991,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-twelve","isDark":false,"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|dark-shade"},"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:24px;min-height:480px"><img class="wp-block-cover__image-background wp-image-1991 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-twelve-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('70% Faster Onboarding Process - PeopleCore HR', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Automated dashboards reduced manual reporting time and improved client delivery speed.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:24px"><!-- wp:button {"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"color":"#ffffff14","width":"2px","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-border-color wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-bottom:10px"><?php esc_html_e('See Full Story', 'saaslauncher') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
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