<?php
// Template 3 - post-final-3.psd - full image + overlay full title
//get the global sidebar position from td_single_template_vars.php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$td_mod_single = new td_module_single($post);

?>
<article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class('td-post-template-3'));?> td-container-wrap" <?php echo $td_mod_single->get_item_scope();?>>
    <div class="td-post-header td-container">
        <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>
        <div class="td-post-header-holder td-image-gradient">
            <?php
            if ( td_global::$is_boxed_layout === true ) {
                echo $td_mod_single->get_image('full');
            } else {
                echo $td_mod_single->get_image('td_1068x0');
            }
            ?>

            <header class="td-post-title">
                <?php echo $td_mod_single->get_category(); ?>
                <?php echo $td_mod_single->get_title();?>


                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                <?php } ?>


                <div class="td-module-meta-info">
                    <?php echo $td_mod_single->get_author();?>
                    <?php echo $td_mod_single->get_date(false);?>
                    <?php echo $td_mod_single->get_views();?>
                    <?php echo $td_mod_single->get_comments();?>
                </div>

            </header>
        </div>
    </div>

    <div class="td-container">
        <div class="td-pb-row">
            <?php

            //the default template
            switch ($loop_sidebar_position) {
                default:
                    ?>
                    <div class="td-pb-span8 td-main-content" role="main">
                        <div class="td-ss-main-content">
                            <?php
                            require_once('loop-single-3.php');
                            comments_template('', true);
                            ?>
                        </div>
                    </div>
                    <div class="td-pb-span4 td-main-sidebar" role="complementary">
                        <div class="td-ss-main-sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                    <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                        <div class="td-ss-main-content">
                            <?php
                            require_once('loop-single-3.php');
                            comments_template('', true);
                            ?>
                        </div>
                    </div>
	                <div class="td-pb-span4 td-main-sidebar" role="complementary">
		                <div class="td-ss-main-sidebar">
			                <?php get_sidebar(); ?>
		                </div>
	                </div>
                    <?php
                    break;

                case 'no_sidebar':
                    ?>
                    <div class="td-pb-span12 td-main-content" role="main">
                        <div class="td-ss-main-content">
                            <?php
                            require_once('loop-single-3.php');
                            comments_template('', true);
                            ?>
                        </div>
                    </div>
                    <?php
                    break;

            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</article> <!-- /.post -->

<?php

get_footer();