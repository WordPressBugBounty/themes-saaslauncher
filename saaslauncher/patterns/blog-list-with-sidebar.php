<?php

/**
 * Title: Blog List with Sidebar
 * Slug: saaslauncher/blog-list-with-sidebar
 * Categories: saaslauncher-blogs
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-blogs"],"patternName":"saaslauncher/blog-list-with-sidebar","name":"Blog List with Sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:query {"queryId":22,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"className":"is-style-default saaslauncher-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"28px","left":"0px","right":"0px"}},"border":{"radius":"0px","bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default saaslauncher-hover-box has-background-alt-background-color has-background" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:0px;padding-right:0px;padding-bottom:28px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center"} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"isUserOverlayColor":true,"minHeight":270,"gradient":"gradient-fourteen","contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:270px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-mixed","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /--></div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"28px","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->

                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->

                                    <!-- wp:post-date {"className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-excerpt {"excerptLength":24,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} /-->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="margin-top:28px"><!-- wp:read-more {"content":"Continue Reading","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"70px","width":"0px","style":"none"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"}}},"textColor":"light-color","gradient":"gradient-twelve"} /--></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"saaslauncher-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"28%"} -->
        <div class="wp-block-column" style="flex-basis:28%">
            <!-- wp:pattern {"slug":"saaslauncher/sidebar-default"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->