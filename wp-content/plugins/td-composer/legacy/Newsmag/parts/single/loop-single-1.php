<?php
/**
 * single Post template 1
 **/

if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_single($post);

    ?>


    <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
        <div class="td-post-header td-pb-padding-side">
            <?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?>

            <?php echo $td_mod_single->get_category(); ?>

            <header>
                <?php echo $td_mod_single->get_title();?>


                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                <?php } ?>


                <div class="meta-info">

                    <?php echo $td_mod_single->get_author();?>
                    <?php echo $td_mod_single->get_date(false);?>
                    <?php echo $td_mod_single->get_modified_date();?>
                    <?php echo $td_mod_single->get_views();?>
                    <?php echo $td_mod_single->get_comments();?>
                </div>
            </header>


        </div>

        <?php echo $td_mod_single->get_social_sharing_top();?>


        <div class="td-post-content td-pb-padding-side">
            <div class="td-featured-image-rec">

            <?php
            // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
            if (!empty(td_global::$load_featured_img_from_template)) {
                echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
            } else {
                echo $td_mod_single->get_image('td_300x350');
            }

            $tds_post_style_1_title = td_util::get_option('tds_post_style_1_title');

            // ad spot
            echo td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'post_style_1', 'spot_title' => $tds_post_style_1_title)); ?>
            </div>


            <?php echo $td_mod_single->get_content();?>
        </div>


        <footer>
            <?php echo $td_mod_single->get_post_pagination();?>
            <?php echo $td_mod_single->get_review();?>

            <div class="td-post-source-tags td-pb-padding-side">
                <?php echo $td_mod_single->get_source_and_via();?>
                <?php echo $td_mod_single->get_the_tags();?>
            </div>

            <?php echo $td_mod_single->get_social_sharing_bottom();?>
            <?php echo $td_mod_single->get_next_prev_posts();?>
            <?php echo $td_mod_single->get_author_box();?>
	        <?php echo $td_mod_single->get_item_scope_meta();?>
        </footer>

    </article> <!-- /.post -->

    <?php echo $td_mod_single->related_posts();?>

<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}