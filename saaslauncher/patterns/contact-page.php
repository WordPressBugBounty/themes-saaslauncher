<?php

/**
 * Title: Contact Us
 * Slug: saaslauncher/contact-page
 * Categories: saaslauncher-pages
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/google-map.jpg',
);
?>
<!-- wp:group {"tagName":"main","metadata":{"categories":["saaslauncher-pages"],"name":"Contact Us"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:pattern {"slug":"saaslauncher/contact-info-box"} /-->
    <!-- wp:pattern {"slug":"saaslauncher/contact-form"} /-->
    <!-- wp:pattern {"slug":"saaslauncher/faq-accordion"} /-->
    <!-- wp:pattern {"slug":"saaslauncher/cta-block"} /-->
</main>
<!-- /wp:group -->