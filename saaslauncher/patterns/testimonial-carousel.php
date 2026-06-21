<?php

/**
 * Title: Testimonial Carousel
 * Slug: saaslauncher/testimonial-carousel
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
<!-- wp:group {"metadata":{"categories":["saaslauncher-testimonial"],"name":"Testimonial Carousel","patternName":"saaslauncher/testimonial-carousel"},"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"8rem","left":"0","right":"0"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:6rem;padding-right:0;padding-bottom:8rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"540px"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
                <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Testimonials', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"48px"}}} -->
            <h1 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php esc_html_e('See Why Customers Love Our Platform', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"saaslauncher-testimonials-carousel","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group saaslauncher-testimonials-carousel"><!-- wp:group {"className":"swiper-wrapper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group swiper-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('This platform completely changed how we manage marketing campaigns across multiple clients. Tasks that once took hours are now streamlined into a single system. Reporting, tracking, and collaboration are much faster and more organized.', 'saaslauncher') ?></p>
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
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Sarah Mitchel', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, Pilot Paper', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('We saw a clear boost in conversions within weeks of using this SaaS platform. Automation tools reduced repetitive work, while CRM features improved customer management. Our team saved time and gained better control over performance.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Daniel Brooks', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, Brook Ventures', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('The workflow system is highly intuitive and flexible, making it easy for our team to adapt quickly. It improved communication, alignment, and project tracking, helping us deliver work faster with fewer delays and much better coordination.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Emily Jonson', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, Meetra Tech', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('Onboarding new employees used to take days, but this platform reduced it to just hours. Automated workflows simplified HR processes, improved consistency, and significantly reduced manual workload for our team across every stage.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Michael Roberts', 'saaslauncher') ?></h5>
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

            <!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('Our support response time improved significantly after adopting this system. Smart ticket routing and alerts ensure no request is missed. It increased efficiency, reduced delays, and greatly improved overall customer satisfaction levels.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2055,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"color":{"duotone":"var:preset|duotone|dark-shade"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2055" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Jessica Lee', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('CEO, Lee Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"swiper-slide","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group swiper-slide has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":260,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:image {"id":1075,"width":"125px","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}},"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1075" style="aspect-ratio:5;object-fit:contain;width:125px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px;font-size:16px"><?php esc_html_e('This SaaS platform is essential for growing teams that need to scale efficiently. It is powerful yet simple, helping us reduce manual tasks, improve productivity, and maintain a structured workflow that adapts to business growth.', 'saaslauncher') ?></p>
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
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Founder, Doe Technology', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->