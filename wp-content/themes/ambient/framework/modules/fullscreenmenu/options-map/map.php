<?php

if ( ! function_exists('ambient_elated_fullscreen_menu_options_map')) {

	function ambient_elated_fullscreen_menu_options_map() {

		ambient_elated_add_admin_page(
			array(
				'slug' => '_fullscreen_menu_page',
				'title' => esc_html__('Fullscreen Menu', 'ambient'),
				'icon' => 'fa fa-th-large'
			)
		);

		$fullscreen_panel = ambient_elated_add_admin_panel(
			array(
				'title' => esc_html__('Fullscreen Menu', 'ambient'),
				'name' => 'fullscreen_menu',
				'page' => '_fullscreen_menu_page'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $fullscreen_panel,
				'type' => 'select',
				'name' => 'fullscreen_menu_animation_style',
				'default_value' => 'fade-push-text-right',
				'label' => esc_html__('Fullscreen Menu Overlay Animation', 'ambient'),
				'description' => esc_html__('Choose animation type for fullscreen menu overlay', 'ambient'),
				'options' => array(
					'fade-push-text-right' => esc_html__('Fade Push Text Right', 'ambient'),
					'fade-push-text-top' => esc_html__('Fade Push Text Top', 'ambient'),
					'fade-text-scaledown' => esc_html__('Fade Text Scaledown', 'ambient')
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $fullscreen_panel,
				'type' => 'yesno',
				'name' => 'fullscreen_in_grid',
				'default_value' => 'no',
				'label' => esc_html__('Fullscreen Menu in Grid', 'ambient'),
				'description' => esc_html__('Enabling this option will put fullscreen menu content in grid', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $fullscreen_panel,
				'type' => 'selectblank',
				'name' => 'fullscreen_alignment',
				'default_value' => '',
				'label' => esc_html__('Fullscreen Menu Alignment', 'ambient'),
				'description' => esc_html__('Choose alignment for fullscreen menu content', 'ambient'),
				'options' => array(
					'' => esc_html__('Default', 'ambient'),
					'left' => esc_html__('Left', 'ambient'),
					'center' => esc_html__('Center', 'ambient'),
					'right' => esc_html__('Right', 'ambient')
				)
			)
		);

		$background_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'background_group',
				'title' => esc_html__('Background', 'ambient'),
				'description' => esc_html__('Select a background color and transparency for fullscreen menu (0 = fully transparent, 1 = opaque)', 'ambient')
			)
		);

		$background_group_row = ambient_elated_add_admin_row(
			array(
				'parent' => $background_group,
				'name' => 'background_group_row'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_background_color',
				'label' => esc_html__('Background Color', 'ambient')
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_background_transparency',
				'label' => esc_html__('Background Transparency', 'ambient')
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $fullscreen_panel,
				'type' => 'image',
				'name' => 'fullscreen_menu_background_image',
				'label' => esc_html__('Background Image', 'ambient'),
				'description' => esc_html__('Choose a background image for fullscreen menu background', 'ambient')
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $fullscreen_panel,
				'type' => 'image',
				'name' => 'fullscreen_menu_pattern_image',
				'label' => esc_html__('Pattern Background Image', 'ambient'),
				'description' => esc_html__('Choose a pattern image for fullscreen menu background', 'ambient')
			)
		);

		//1st level style group
		$first_level_style_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'first_level_style_group',
				'title' => esc_html__('1st Level Style', 'ambient'),
				'description' => esc_html__('Define styles for 1st level in Fullscreen Menu', 'ambient')
			)
		);

		$first_level_style_row1 = ambient_elated_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name' => 'first_level_style_row1'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_color',
				'default_value' => '',
				'label' => esc_html__('Text Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_hover_color',
				'default_value' => '',
				'label' => esc_html__('Hover Text Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_active_color',
				'default_value' => '',
				'label' => esc_html__('Active Text Color', 'ambient'),
			)
		);

		$first_level_style_row3 = ambient_elated_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name' => 'first_level_style_row3'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row3,
				'type' => 'fontsimple',
				'name' => 'fullscreen_menu_google_fonts',
				'default_value' => '-1',
				'label' => esc_html__('Font Family', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row3,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_fontsize',
				'default_value' => '',
				'label' => esc_html__('Font Size', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row3,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_lineheight',
				'default_value' => '',
				'label' => esc_html__('Line Height', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		$first_level_style_row4 = ambient_elated_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name' => 'first_level_style_row4'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row4,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontstyle',
				'default_value' => '',
				'label' => esc_html__('Font Style', 'ambient'),
				'options' => ambient_elated_get_font_style_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row4,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontweight',
				'default_value' => '',
				'label' => esc_html__('Font Weight', 'ambient'),
				'options' => ambient_elated_get_font_weight_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row4,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_letterspacing',
				'default_value' => '',
				'label' => esc_html__('Lettert Spacing', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $first_level_style_row4,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_texttransform',
				'default_value' => '',
				'label' => esc_html__('Text Transform', 'ambient'),
				'options' => ambient_elated_get_text_transform_array()
			)
		);

		//2nd level style group
		$second_level_style_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'second_level_style_group',
				'title' => esc_html__('2nd Level Style', 'ambient'),
				'description' => esc_html__('Define styles for 2nd level in Fullscreen Menu', 'ambient')
			)
		);

		$second_level_style_row1 = ambient_elated_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name' => 'second_level_style_row1'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_color_2nd',
				'default_value' => '',
				'label' => esc_html__('Text Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_hover_color_2nd',
				'default_value' => '',
				'label' => esc_html__('Hover/Active Text Color', 'ambient'),
			)
		);

		$second_level_style_row2 = ambient_elated_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name' => 'second_level_style_row2'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row2,
				'type' => 'fontsimple',
				'name' => 'fullscreen_menu_google_fonts_2nd',
				'default_value' => '-1',
				'label' => esc_html__('Font Family', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row2,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_fontsize_2nd',
				'default_value' => '',
				'label' => esc_html__('Font Size', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row2,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_lineheight_2nd',
				'default_value' => '',
				'label' => esc_html__('Line Height', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		$second_level_style_row3 = ambient_elated_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name' => 'second_level_style_row3'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontstyle_2nd',
				'default_value' => '',
				'label' => esc_html__('Font Style', 'ambient'),
				'options' => ambient_elated_get_font_style_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontweight_2nd',
				'default_value' => '',
				'label' => esc_html__('Font Weight', 'ambient'),
				'options' => ambient_elated_get_font_weight_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row3,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_letterspacing_2nd',
				'default_value' => '',
				'label' => esc_html__('Lettert Spacing', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $second_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_texttransform_2nd',
				'default_value' => '',
				'label' => esc_html__('Text Transform', 'ambient'),
				'options' => ambient_elated_get_text_transform_array()
			)
		);

		$third_level_style_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'third_level_style_group',
				'title' => esc_html__('3rd Level Style', 'ambient'),
				'description' => esc_html__('Define styles for 3rd level in Fullscreen Menu', 'ambient')
			)
		);

		$third_level_style_row1 = ambient_elated_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name' => 'third_level_style_row1'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_color_3rd',
				'default_value' => '',
				'label' => esc_html__('Text Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_hover_color_3rd',
				'default_value' => '',
				'label' => esc_html__('Hover/Active Text Color', 'ambient'),
			)
		);

		$third_level_style_row2 = ambient_elated_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name' => 'second_level_style_row2'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row2,
				'type' => 'fontsimple',
				'name' => 'fullscreen_menu_google_fonts_3rd',
				'default_value' => '-1',
				'label' => esc_html__('Font Family', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row2,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_fontsize_3rd',
				'default_value' => '',
				'label' => esc_html__('Font Size', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row2,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_lineheight_3rd',
				'default_value' => '',
				'label' => esc_html__('Line Height', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		$third_level_style_row3 = ambient_elated_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name' => 'second_level_style_row3'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontstyle_3rd',
				'default_value' => '',
				'label' => esc_html__('Font Style', 'ambient'),
				'options' => ambient_elated_get_font_style_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_fontweight_3rd',
				'default_value' => '',
				'label' => esc_html__('Font Weight', 'ambient'),
				'options' => ambient_elated_get_font_weight_array()
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row3,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_letterspacing_3rd',
				'default_value' => '',
				'label' => esc_html__('Lettert Spacing', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $third_level_style_row3,
				'type' => 'selectblanksimple',
				'name' => 'fullscreen_menu_texttransform_3rd',
				'default_value' => '',
				'label' => esc_html__('Text Transform', 'ambient'),
				'options' => ambient_elated_get_text_transform_array()
			)
		);

		$icon_colors_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'fullscreen_menu_icon_colors_group',
				'title' => esc_html__('Full Screen Menu Icon Style', 'ambient'),
				'description' => esc_html__('Define styles for Fullscreen Menu Icon', 'ambient')
			)
		);

		$icon_colors_row1 = ambient_elated_add_admin_row(
			array(
				'parent' => $icon_colors_group,
				'name' => 'icon_colors_row1'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_icon_color',
				'label' => esc_html__('Color', 'ambient'),
			)
		);
		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_icon_hover_color',
				'label' => esc_html__('Hover Color', 'ambient'),
			)
		);
		
		$icon_colors_row2 = ambient_elated_add_admin_row(
			array(
				'parent' => $icon_colors_group,
				'name' => 'icon_colors_row2',
				'next' => true
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row2,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_light_icon_color',
				'label' => esc_html__('Light Menu Icon Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row2,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_light_icon_hover_color',
				'label' => esc_html__('Light Menu Icon Hover Color', 'ambient'),
			)
		);

		$icon_colors_row3 = ambient_elated_add_admin_row(
			array(
				'parent' => $icon_colors_group,
				'name' => 'icon_colors_row3',
				'next' => true
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row3,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_dark_icon_color',
				'label' => esc_html__('Dark Menu Icon Color', 'ambient'),
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row3,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_dark_icon_hover_color',
				'label' => esc_html__('Dark Menu Icon Hover Color', 'ambient'),
			)
		);
		
		$icon_colors_row4 = ambient_elated_add_admin_row(
			array(
				'parent' => $icon_colors_group,
				'name' => 'icon_colors_row4'
			)
		);
		
		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row4,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_close_icon_color',
				'label' => esc_html__('Close Icon Color', 'ambient'),
			)
		);
		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_colors_row4,
				'type' => 'colorsimple',
				'name' => 'fullscreen_menu_close_icon_hover_color',
				'label' => esc_html__('Close Icon Hover Color', 'ambient'),
			)
		);

		$icon_spacing_group = ambient_elated_add_admin_group(
			array(
				'parent' => $fullscreen_panel,
				'name' => 'icon_spacing_group',
				'title' => esc_html__('Full Screen Menu Icon Spacing', 'ambient'),
				'description' => esc_html__('Define padding and margin for full screen menu icon', 'ambient')
			)
		);

		$icon_spacing_row = ambient_elated_add_admin_row(
			array(
				'parent' => $icon_spacing_group,
				'name' => 'icon_spacing_row'
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_icon_padding_left',
				'default_value' => '',
				'label' => esc_html__('Padding Left', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_icon_padding_right',
				'default_value' => '',
				'label' => esc_html__('Padding Right', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_icon_margin_left',
				'default_value' => '',
				'label' => esc_html__('Margin Left', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		ambient_elated_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'fullscreen_menu_icon_margin_right',
				'default_value' => '',
				'label' => esc_html__('Margin Right', 'ambient'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);
	}

	add_action('ambient_elated_options_map', 'ambient_elated_fullscreen_menu_options_map', 8);
}