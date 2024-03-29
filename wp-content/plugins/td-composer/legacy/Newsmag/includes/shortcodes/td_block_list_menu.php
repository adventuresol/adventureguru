<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_list_menu extends td_block {

	private $atts = array();

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid . '_rand';

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @menu_color */
				.$unique_block_class a {
					color: @menu_color;
				}
				/* @menu_hover_color */
				.$unique_block_class a:hover {
					color: @menu_hover_color;
				}
				
				

                /* @f_header */
				.$unique_block_class .block-title a,
				.$unique_block_class .block-title span {
					@f_header
				}
				/* @f_list */
				.$unique_block_class a {
					@f_list
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        // heading text color
        $res_ctx->load_settings_raw( 'menu_color', $res_ctx->get_shortcode_att('menu_color') );

        // heading background color
        $res_ctx->load_settings_raw( 'menu_hover_color', $res_ctx->get_shortcode_att('menu_hover_color') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_list' );

    }

	function render($atts, $content = null){

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

		$this->atts = shortcode_atts(
			array(
				'menu_id' => ''
			), $atts);

		$buffy = ''; //output buffer


		$buffy .= '<div class="' . $this->get_block_classes() . ' widget" ' . $this->get_block_html_atts() . '>';

		//get the block css
		$buffy .= $this->get_block_css();

		//get the js for this block
		$buffy .= $this->get_block_js();

		// block title wrap
		$buffy .= '<div class="td-block-title-wrap">';
			$buffy .= $this->get_block_title(); //get the block title
		$buffy .= '</div>';

		// For tagDiv composer add a placeholder element
		if (empty($this->atts['menu_id'])) {
			$buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';
			$buffy .= td_util::get_block_error('List Menu', 'Render failed - please select a menu' );
			$buffy .= '</div>';

			$buffy .= '</div> <!-- ./block -->';

			return $buffy;
		}

		$buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';

		$buffy .= $this->inner($this->atts['menu_id']);  //inner content of the block
		$buffy .= '</div>';

		//get the ajax pagination for this block
		$buffy .= $this->get_block_pagination();
		$buffy .= '</div> <!-- ./block -->';
		return $buffy;
	}

	function inner($menu_id, $td_column_number = '') {
		$buffy = '';

		$td_block_layout = new td_block_layout();
		if (!empty($menu_id)) {

			ob_start();

			$td_menu_instance = td_menu::get_instance();
			remove_filter( 'wp_nav_menu_objects', array($td_menu_instance, 'hook_wp_nav_menu_objects') );

			wp_nav_menu( array( 'menu' => $menu_id ) );

			add_filter( 'wp_nav_menu_objects', array($td_menu_instance, 'hook_wp_nav_menu_objects'),  10, 2 );

			$buffy .= ob_get_clean();

		}
		$buffy .= $td_block_layout->close_all_tags();
		return $buffy;
	}
}