<?php

/**
 * Title: Contact Form
 * Slug: saaslauncher/contact-form
 * Categories: saaslauncher-contact
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1230px"}} -->
<div class="wp-block-group" style="margin-bottom:60px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left"}},"textColor":"light-color","fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e('Send us an enquiry', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7,"fontSize":"18px","textAlign":"left"}}} -->
                <p class="has-text-align-left" style="font-size:18px;line-height:1.7"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"}},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained","contentSize":"980px"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <h4 class="wp-block-heading has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Please insert the contact form shortcode here to display the form.', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:contact-form-7/contact-form-selector {"id":506,"hash":"b5f65b7","title":"Contact form 1"} -->
                <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="b5f65b7" title="Contact form 1"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->