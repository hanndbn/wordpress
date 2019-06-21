<?php
if(!function_exists('ambient_elated_add_admin_page')) {
    /**
     * Generates admin page object and adds it to options
     * $attributes array can container:
     *      $slug - slug of the page with which it will be registered in admin, and which will be appended to admin URL
     *      $title - title of the page
     *      $icon - icon that will be added to admin page in options navigation
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassAdminPage
     */
    function ambient_elated_add_admin_page($attributes) {
        $slug = '';
        $title = '';
        $icon = '';

        extract($attributes);

        if(isset($slug) && !empty($title)) {
            $admin_page = new AmbientElatedClassAdminPage($slug, $title, $icon);
            ambient_elated_framework()->eltdOptions->addAdminPage($slug, $admin_page);

            return $admin_page;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_panel')) {
    /**
     * Generates panel object from given parameters
     * $attributes can container:
     *      $title - title of panel
     *      $name - name of panel with which it will be registered in admin page
     *      $hidden_property - name of option that hides panel
     *      $hidden_value - value of $hidden_property that hides panel
     *      $hidden_values - array of valus of $hidden_property that hides panel
     *      $page - slug of that page to which to add panel
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassPanel
     */
    function ambient_elated_add_admin_panel($attributes) {
        $title           = '';
        $name            = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();
        $page            = '';

        extract($attributes);

        if(isset($page) && !empty($title) && !empty($name) && ambient_elated_framework()->eltdOptions->adminPageExists($page)) {
            $admin_page = ambient_elated_framework()->eltdOptions->getAdminPage($page);

            if(is_object($admin_page)) {
                $panel = new AmbientElatedClassPanel($title, $name, $hidden_property, $hidden_value, $hidden_values);
                $admin_page->addChild($name, $panel);

                return $panel;
            }
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_container')) {
    /**
     * Generates container object
     * $attributes can contain:
     *      $name - name of the container with which it will be added to parent element
     *      $parent - parent object to which to add container
     *      $hidden_property - name of option that hides container
     *      $hidden_value - value of $hidden_property that hides container
     *      $hidden_values - array of valus of $hidden_property that hides container
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassContainer
     */
    function ambient_elated_add_admin_container($attributes) {
        $name            = '';
        $parent          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();

        extract($attributes);

        if(!empty($name) && is_object($parent)) {
            $container = new AmbientElatedClassContainer($name, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $container);

            return $container;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_twitter_button')) {

    /**
     * Generates twitter button field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassTwitterFramework
     */
    function ambient_elated_add_admin_twitter_button($attributes) {
        $name = '';
        $parent = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $field = new AmbientElatedClassTwitterFramework();

            if(is_object($parent)) {
                $parent->addChild($name, $field);
            }

            return $field;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_instagram_button')) {

    /**
     * Generates instagram button field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassInstagramFramework
     */
    function ambient_elated_add_admin_instagram_button($attributes) {
        $name = '';
        $parent = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $field = new AmbientElatedClassInstagramFramework();

            if(is_object($parent)) {
                $parent->addChild($name, $field);
            }

            return $field;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_container_no_style')) {
    /**
     * Generates container object
     * $attributes can contain:
     *      $name - name of the container with which it will be added to parent element
     *      $parent - parent object to which to add container
     *      $hidden_property - name of option that hides container
     *      $hidden_value - value of $hidden_property that hides container
     *      $hidden_values - array of valus of $hidden_property that hides container
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassContainerNoStyle
     */
    function ambient_elated_add_admin_container_no_style($attributes) {
        $name            = '';
        $parent          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();

        extract($attributes);

        if(!empty($name) && is_object($parent)) {
            $container = new AmbientElatedClassContainerNoStyle($name, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $container);

            return $container;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_group')) {
    /**
     * Generates group object
     * $attributes can contain:
     *      $name - name of the group with which it will be added to parent element
     *      $title - title of group
     *      $description - description of group
     *      $parent - parent object to which to add group
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassGroup
     */
    function ambient_elated_add_admin_group($attributes) {
        $name = '';
        $title = '';
        $description = '';
        $parent = '';

        extract($attributes);

        if(!empty($name) && !empty($title) && is_object($parent)) {
            $group = new AmbientElatedClassGroup($title, $description);
            $parent->addChild($name, $group);

            return $group;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_row')) {
    /**
     * Generates row object
     * $attributes can contain:
     *      $name - name of the group with which it will be added to parent element
     *      $parent - parent object to which to add row
     *      $next - whether row has next row. Used to add bottom margin class
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassRow
     */
    function ambient_elated_add_admin_row($attributes) {
        $parent = '';
        $next   = false;
        $name   = '';

        extract($attributes);

        if(is_object($parent)) {
            $row = new AmbientElatedClassRow($next);
            $parent->addChild($name, $row);

            return $row;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_field')) {
    /**
     * Generates admin field object
     * $attributes can container:
     *      $type - type of the field to generate
     *      $name - name of the field. This will be name of the option in database
     *      $default_value
     *      $label - title of the option
     *      $description
     *      $options - assoc array of option. Used only for select and radiogroup field types
     *      $args - assoc array of additional parameters. Used for dependency
     *      $hidden_property - name of option that hides field
     *      $hidden_values - array of valus of $hidden_property that hides field
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassField
     */
    function ambient_elated_add_admin_field($attributes) {
        $type            = '';
        $name            = '';
        $default_value   = '';
        $label           = '';
        $description     = '';
        $options         = array();
        $args            = array();
        $hidden_property = '';
        $hidden_values   = array();
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($type) && !empty($name)) {
            $field = new AmbientElatedClassField($type, $name, $default_value, $label, $description, $options, $args, $hidden_property, $hidden_values);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_section_title')) {
    /**
     * Generates admin title field
     * $attributes can contain:
     *      $parent - parent object to which to add title
     *      $name - name of title with which to add it to the parent
     *      $title - title text
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassTitle
     */
    function ambient_elated_add_admin_section_title($attributes) {
        $parent = '';
        $name = '';
        $title = '';

        extract($attributes);

        if(is_object($parent) && !empty($title) && !empty($name)) {
            $section_title = new AmbientElatedClassTitle($name, $title);
            $parent->addChild($name, $section_title);

            return $section_title;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_admin_notice')) {
    /**
     * Generates AmbientElatedClassNotice object from given parameters
     * $attributes array can contain:
     *      $title - title of notice object
     *      $description - description of notice object
     *      $notice - text of notice to display
     *      $hidden_property - name of option that hides notice
     *      $hidden_value - value of $hidden_property that hides notice
     *      $hidden_values - assoc array of values of $hidden_property that hides notice
     *      $name - unique name of notice with which it will be added to it's parent
     *      $parent - object to which to add notice object using addChild method
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassNotice
     */
    function ambient_elated_add_admin_notice($attributes) {
        $title           = '';
        $description     = '';
        $notice          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();
        $parent          = '';
        $name            = '';

        extract($attributes);

        if(is_object($parent) && !empty($title) && !empty($notice) && !empty($name)) {
            $notice_object = new AmbientElatedClassNotice($title, $description, $notice, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $notice_object);

            return $notice_object;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_framework')) {
    /**
     * Function that returns instance of AmbientElatedClassFramework class
     *
     * @return AmbientElatedClassFramework
     */
    function ambient_elated_framework() {
        return AmbientElatedClassFramework::get_instance();
    }
}

if(!function_exists('ambient_elated_options')) {
    /**
     * Returns instance of AmbientElatedClassOptions class
     *
     * @return AmbientElatedClassOptions
     */
    function ambient_elated_options() {
        return ambient_elated_framework()->eltdOptions;
    }
}

/**
 * Meta boxes functions
 */
if(!function_exists('ambient_elated_add_meta_box')) {
    /**
     * Adds new meta box
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassMetaBox
     */
    function ambient_elated_add_meta_box($attributes) {
        $scope = array();
        $title = '';
        $hidden_property = '';
        $hidden_values = array();
        $name = '';

        extract($attributes);

        if(!empty($scope) && $title !== '' && $name !== '') {
            $meta_box_obj = new AmbientElatedClassMetaBox($scope, $title, $hidden_property, $hidden_values, $name);
            ambient_elated_framework()->eltdMetaBoxes->addMetaBox($name, $meta_box_obj);

            return $meta_box_obj;
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_meta_box_field')) {
    /**
     * Generates meta box field object
     * $attributes can contain:
     *      $type - type of the field to generate
     *      $name - name of the field. This will be name of the option in database
     *      $default_value
     *      $label - title of the option
     *      $description
     *      $options - assoc array of option. Used only for select and radiogroup field types
     *      $args - assoc array of additional parameters. Used for dependency
     *      $hidden_property - name of option that hides field
     *      $hidden_values - array of valus of $hidden_property that hides field
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassField
     */
    function ambient_elated_add_meta_box_field($attributes) {
        $type            = '';
        $name            = '';
        $default_value   = '';
        $label           = '';
        $description     = '';
        $options         = array();
        $args            = array();
        $hidden_property = '';
        $hidden_values   = array();
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($type) && !empty($name)) {
            $field = new AmbientElatedClassMetaField($type, $name, $default_value, $label, $description, $options, $args, $hidden_property, $hidden_values);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_options_framework')) {
    /**
     * Generates meta box field object
     * $attributes can contain:
     *      $type - type of the field to generate
     *      $name - name of the field. This will be name of the option in database
     *      $default_value
     *      $label - title of the option
     *      $description
     *      $options - assoc array of option. Used only for select and radiogroup field types
     *      $args - assoc array of additional parameters. Used for dependency
     *      $hidden_property - name of option that hides field
     *      $hidden_values - array of valus of $hidden_property that hides field
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassField
     */
    function ambient_elated_add_options_framework($attributes) {
        $name            = '';
        $label           = '';
        $description     = '';
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $framework = new AmbientElatedClassOptionsFramework($label, $description);

            if(is_object($parent)) {
                $parent->addChild($name, $framework);

                return $framework;
            }
        }

        return false;
    }
}

if(!function_exists('ambient_elated_add_multiple_images_field')) {
    /**
     * Generates meta box field object
     * $attributes can contain:
     *      $name - name of the field. This will be name of the option in database
     *      $label - title of the option
     *      $description
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|AmbientElatedClassField
     */
    function ambient_elated_add_multiple_images_field($attributes) {
        $name            = '';
        $label           = '';
        $description     = '';
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $field = new AmbientElatedClassMultipleImages($name,$label,$description);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}

if(!function_exists('ambient_elated_get_yes_no_select_array')) {
	/**
	 * Returns array of yes no
	 * @return array
	 */
	function ambient_elated_get_yes_no_select_array($enable_default = true, $set_yes_to_be_first = false) {
		$select_options = array();
		
		if($enable_default) {
			$select_options[''] = esc_html__('Default', 'ambient');
		}
		
		if($set_yes_to_be_first) {
			$select_options['yes'] = esc_html__('Yes', 'ambient');
			$select_options['no'] = esc_html__('No', 'ambient');
		} else {
			$select_options['no'] = esc_html__('No', 'ambient');
			$select_options['yes'] = esc_html__('Yes', 'ambient');
		}
		
		return $select_options;
	}
}

if(!function_exists('ambient_elated_get_font_weight_array')) {
    /**
     * Returns array of font weights
     *
     * @param bool $first_empty whether to add empty first member
     * @return array
     */
    function ambient_elated_get_font_weight_array($first_empty = false) {
        $font_weights = array();

        if($first_empty) {
            $font_weights[''] = esc_html__('Default', 'ambient');
        }

        $font_weights['100'] = esc_html__('100 Thin', 'ambient');
        $font_weights['200'] = esc_html__('200 Thin-Light', 'ambient');
        $font_weights['300'] = esc_html__('300 Light', 'ambient');
        $font_weights['400'] = esc_html__('400 Normal', 'ambient');
        $font_weights['500'] = esc_html__('500 Medium', 'ambient');
        $font_weights['600'] = esc_html__('600 Semi-Bold', 'ambient');
        $font_weights['700'] = esc_html__('700 Bold', 'ambient');
        $font_weights['800'] = esc_html__('800 Extra-Bold', 'ambient');
        $font_weights['900'] = esc_html__('900 Ultra-Bold', 'ambient');

        return $font_weights;
    }
}

if(!function_exists('ambient_elated_get_text_transform_array')) {
    /**
     * Returns array of text transforms
     *
     * @param bool $first_empty
     * @return array
     */
    function ambient_elated_get_text_transform_array($first_empty = false) {
        $text_transforms = array();

        if($first_empty) {
            $text_transforms[''] = esc_html__('Default', 'ambient');
        }

        $text_transforms['none'] = esc_html__('None', 'ambient');
        $text_transforms['capitalize'] = esc_html__('Capitalize', 'ambient');
        $text_transforms['uppercase'] = esc_html__('Uppercase', 'ambient');
        $text_transforms['lowercase'] = esc_html__('Lowercase', 'ambient');
	    $text_transforms['initial'] = esc_html__('Initial', 'ambient');
	    $text_transforms['inherit'] = esc_html__('Inherit', 'ambient');

        return $text_transforms;
    }
}

if(!function_exists('ambient_elated_get_font_style_array')) {
    /**
     * Returns array of font styles
     *
     * @param bool $first_empty
     * @return array
     */
    function ambient_elated_get_font_style_array($first_empty = false) {
	    $font_styles = array();
	
	    if($first_empty) {
		    $font_styles[''] = esc_html__('Default', 'ambient');
	    }
	
	    $font_styles['normal'] = esc_html__('Normal', 'ambient');
	    $font_styles['italic'] = esc_html__('Italic', 'ambient');
	    $font_styles['oblique'] = esc_html__('Oblique', 'ambient');
	    $font_styles['initial'] = esc_html__('Initial', 'ambient');
	    $font_styles['inherit'] = esc_html__('Inherit', 'ambient');

        return $font_styles;
    }
}

if(!function_exists('ambient_elated_get_text_decorations')) {
    /**
     * Returns array of text transforms
     *
     * @param bool $first_empty
     * @return array
     */
    function ambient_elated_get_text_decorations($first_empty = false) {
	    $text_decorations = array();
	
	    if($first_empty) {
		    $text_decorations[''] = esc_html__('Default', 'ambient');
	    }
	
	    $text_decorations['none'] = esc_html__('None', 'ambient');
	    $text_decorations['underline'] = esc_html__('Underline', 'ambient');
	    $text_decorations['overline'] = esc_html__('Overline', 'ambient');
	    $text_decorations['line-through'] = esc_html__('Line-Through', 'ambient');
	    $text_decorations['initial'] = esc_html__('Initial', 'ambient');
	    $text_decorations['inherit'] = esc_html__('Inherit', 'ambient');
	
	    return $text_decorations;
    }
}

if(!function_exists('ambient_elated_get_title_tag')) {
	/**
	 * Returns array of title tags
	 *
	 * @param bool $first_empty
	 * @param array $additional_elements
	 * @return array
	 */
	function ambient_elated_get_title_tag($first_empty = false, $additional_elements = array()) {
		$title_tag = array();
		
		if($first_empty) {
			$title_tag[''] = esc_html__('Default', 'ambient');
		}
		
		$title_tag['h1'] = 'h1';
		$title_tag['h2'] = 'h2';
		$title_tag['h3'] = 'h3';
		$title_tag['h4'] = 'h4';
		$title_tag['h5'] = 'h5';
		$title_tag['h6'] = 'h6';
		
		if(!empty($additional_elements)) {
			$title_tag = array_merge($title_tag, $additional_elements);
		}
		
		return $title_tag;
	}
}

if(!function_exists('ambient_elated_is_font_option_valid')) {
    /**
     * Checks if font family option is valid (different that -1)
     *
     * @param $option_name
     *
     * @return bool
     */
    function ambient_elated_is_font_option_valid($option_name) {
        return $option_name !== '-1' &&  $option_name !== '';
    }
}

if(!function_exists('ambient_elated_get_font_option_val')) {
    /**
     * Returns font option value without + so it can be used in css
     *
     * @param $option_val
     *
     * @return mixed
     */
    function ambient_elated_get_font_option_val($option_val) {
        $option_val = str_replace('+', ' ', $option_val);

        return $option_val;
    }
}