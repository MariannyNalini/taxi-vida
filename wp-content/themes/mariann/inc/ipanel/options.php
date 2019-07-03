<?php
/**
 * SETTINGS TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'General Settings',
	'id' => 'main_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "main_settings"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable theme CSS3 animations', 'mariann'),
	"id" => "enable_theme_animations",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable colors and background colors fade effects', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable theme images animations on hover', 'mariann'),
	"id" => "enable_images_animations",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable scale effects on some featured images hover in posts', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body background image or pattern', 'mariann'),
	"id" => "body_bg_image",
	"field_options" => array(
		"std" => ''
	),
	"desc" => wp_kses_post(__('Upload your site body background image if you want to show it. Remove image to remove background.', 'mariann')),
	"type" => "qup",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body background image behaviour', 'mariann'),
	"id" => "body_bg_style",
	"std" => "cover",
	"options" => array(
		"none" => esc_html__('Default', 'mariann'),
		"repeat" => esc_html__('Repeat (for pattern)', 'mariann'),
		"cover" => esc_html__('Cover (for large image)', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label"><label>Favicon</label></div><div class="ipanel-input">You can upload your website favicon (site icon) in WordPress Customizer (in "Site Identity" section at the left sidebar).<br/><br/><br/></div>', 'mariann'))
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);
/**
 * Header TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'Header & Logo',
	'id' => 'header_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "header_settings"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Logo settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label"><label>Logo upload</label></div><div class="ipanel-input">You can upload your website logo in WordPress Customizer (in "Header Image" section at the left sidebar).<br/><br/><br/></div>', 'mariann')),
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Logo width (px)', 'mariann'),
	"id" => "logo_width",
	"std" => "220",
	"desc" => wp_kses_post(__('Default: 220. Upload retina logo (2x size) and input your regular logo width here. For example if your retina logo have 400px width put 200 value here. If you does not use retina logo input regular logo width here (your logo image width).', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable text logo', 'mariann'),
	"id" => "logo_text_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Use this option to disable image logo on site and replace it with text specified below.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Text logo title', 'mariann'),
	"id" => "logo_text",
	"std" => "",
	"desc" => wp_kses_post(__('Add your site text logo. HTML tags allowed.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Text logo font', 'mariann'),
	"id" => "logo_text_font",
	"std" => "body",
	"options" => array(
		"body" => esc_html__('Body font', 'mariann'),
		"header" => esc_html__('Header font', 'mariann'),
		"additional" => esc_html__('Additional font', 'mariann')
	),
	"desc" => wp_kses_post(__('Choose font face that will be used for logo text. You can select fonts in Fonts tab at the left.', 'mariann')),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Disable text tagline below logo', 'mariann'),
	"id" => "disable_header_tagline",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will disable text tagline in header', 'mariann')),
	"type" => "checkbox",
);
// Header
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);

$ipanel_mariann_option[] = array(
	
	"name" => esc_html__('Header settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Disable entire header', 'mariann'),
	"id" => "disable_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will disable ALL header (with menu below header, logo, etc). Useful for minimalistic themes with left/right sidebar used to show logo and menu.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Header Background image or pattern', 'mariann'),
	"id" => "header_bg_image",
	"field_options" => array(
		"std" => ''
	),
	"desc" => wp_kses_post(__('Upload your site header background image if you want to show it. Remove image to remove background.', 'mariann')),
	"type" => "qup",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Header Background image behaviour', 'mariann'),
	"id" => "header_bg_style",
	"std" => "cover",
	"options" => array(
		"none" => esc_html__('Default', 'mariann'),
		"repeat" => esc_html__('Repeat (for pattern)', 'mariann'),
		"cover" => esc_html__('Cover (for large image)', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Header height in pixels', 'mariann'),
	"id" => "header_height",
	"std" => "160",
	"desc" => wp_kses_post(__('Default: 160', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Sticky/Fixed top header (with menu, search, social icons)', 'mariann'),
	"id" => "enable_sticky_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Top Header will be fixed to top if enabled', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable header banner/HTML content', 'mariann'),
	"id" => "header_banner_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('If you enabled this content are it will replace and disable your header main menu. Disable this option to show header main menu.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Header banner content', 'mariann'),
	"id" => "header_banner_editor",
	"std" => '',
	"desc" => wp_kses_post(__('You can use any HTML here to show your banner or other content in header instead of main menu.', 'mariann')),
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);

$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);

$ipanel_mariann_option[] = array(
	
	"name" => esc_html__('Main menu and Top menu settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
// Menus
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Disable top menu', 'mariann'),
	"id" => "disable_top_menu",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will disable top menu (first menu with social icons and additional links)', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Top menu style', 'mariann'),
	"id" => "header_top_menu_style",
	"std" => "menu_black",
	"options" => array(
		"menu_white" => esc_html__('White menu', 'mariann'),
		"menu_black" => esc_html__('Black menu', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Search toggle button position', 'mariann'),
	"id" => "search_button_position",
	"std" => "top_menu",
	"options" => array(
		"main_menu" => esc_html__('Main Menu (right side)', 'mariann'),
		"top_menu" => esc_html__('Top menu (inside social icons)', 'mariann'),
		"disable" => esc_html__('Disable search button', 'mariann'),
	),
	"desc" => wp_kses_post(__('Note: Top Menu position will not work if you disabled social icons display in top menu.', 'mariann')),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => "Enable left side offcanvas floating sidebar menu",
	"id" => "enable_offcanvas_sidebar",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => esc_html__('Sidebar can be opened by toggle button near header mini cart. You can add widgets to this sidebar in "Offcanvas Right sidebar" in Appearance > Widgets', 'mariann'),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Social Icons in top menu', 'mariann'),
	"id" => "header_enable_social",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main menu align', 'mariann'),
	"id" => "header_main_menu_align",
	"std" => "right",
	"options" => array(
		"left" => esc_html__('Left', 'mariann'),
		"center" => esc_html__('Center', 'mariann'),
		"right" => esc_html__('Right', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main menu font decoration', 'mariann'),
	"id" => "header_menu_font_decoration",
	"std" => "uppercase",
	"options" => array(
		"uppercase" => esc_html__('Uppercase letters', 'mariann'),
		"italic" => esc_html__('Italic letters', 'mariann'),
		"none" => esc_html__('None', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main menu font size', 'mariann'),
	"id" => "header_menu_font_size",
	"std" => "normalfont",
	"options" => array(
		"largefont" => esc_html__('Large font', 'mariann'),
		"normalfont" => esc_html__('Normal font', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main menu font weight', 'mariann'),
	"id" => "header_menu_font_weight",
	"std" => "boldfont",
	"options" => array(
		"boldfont" => esc_html__('Bold font', 'mariann'),
		"regularfont" => esc_html__('Regular font', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main menu dropdown arrows style for submenus', 'mariann'),
	"id" => "header_menu_arrow_style",
	"std" => "noarrow",
	"options" => array(
		"rightarrow" => esc_html__('Right arrow', 'mariann'),
		"downarrow" => esc_html__('Down arrow', 'mariann'),
		"noarrow" => esc_html__('Disable arrow', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);
/**
 * FOOTER TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'Footer',
	'id' => 'footer_settings'
);
$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "footer_settings"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Instagram in Footer', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Display Instagram Feed in Footer', 'mariann'),
	"id" => "footer_instagram_display",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('<a href="https://wordpress.org/plugins/instagram-feed/" target="_blank">Instagram Feed</a> plugin must be installed and configured by theme documentation before enabling this option.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer Instagram title', 'mariann'),
	"id" => "footer_instagram_title",
	"std" => "Instagram",
	"desc" => wp_kses_post(__('Leave empty if you don\'t want to show text title.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer Instagram subtitle', 'mariann'),
	"id" => "footer_instagram_subtitle",
	"std" => "Connect with Mariann",
	"desc" => wp_kses_post(__('Leave empty if you don\'t want to show text subtitle.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer HTML Block', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Display Footer HTML Block in Footer', 'mariann'),
	"id" => "footer_htmlblock_display",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable block with any HTML and background image in footer.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer HTML Block background image', 'mariann'),
	"id" => "footer_htmlblock_bg_image",
	"field_options" => array(
		"std" => ''
	),
	"desc" => wp_kses_post(__('Upload your footer HTML Block background image (1600x1200px JPG recommended). Remove image to remove background.', 'mariann')),
	"type" => "qup",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer HTML Block content', 'mariann'),
	"id" => "footer_htmlblock_content",
	"std" => '<a class="btn btn-white" href="#" target="_blank">Learn more</a>',
	"desc" => wp_kses_post(__('You can use any HTML here to display any content in your footer block.', 'mariann')),
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer Shortcode Block', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Display Shortcode Block in Footer', 'mariann'),
	"id" => "footer_shortcode_display",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => wp_kses_post(__('Enable block with any shortcode from any plugin on grey background in footer.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer Shortcode code', 'mariann'),
	"id" => "footer_shortcode_code",
	"std" => '',
	"desc" => wp_kses_post(__('Add shortcode from any plugin that you want to display here (you can combine it with HTML), for example: &#x3C;h1&#x3E;My title&#x3C;/h1&#x3E;&#x3C;div&#x3E;[my_shortcode]&#x3C;/div&#x3E;', 'mariann')),
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('General Footer Options', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => 'Show "Footer sidebar" only on homepage',
	"id" => "footer_sidebar_1_homepage_only",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Footer Menu', 'mariann'),
	"id" => "footer_enable_menu",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Social Icons in Footer', 'mariann'),
	"id" => "footer_enable_social",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer copyright text', 'mariann'),
	"id" => "footer_copyright_editor",
	"std" => "Powered by <a href='http://themeforest.net/user/creanncy/' target='_blank'>Mariann - Premium WordPress Theme</a>",
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * BLOG TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'Blog',
	'id' => 'blog_settings'
);
$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "blog_settings"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Main Blog settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog layout', 'mariann'),   
	"id" => "blog_layout",
	"options" => array(
		'layout_default' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_1.png',
			"label" => esc_html__('Default layout', 'mariann')
		),
		'layout_2column_design' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_2.png',
			"label" => esc_html__('Show posts in 2 columns', 'mariann')
		),
		'layout_2column_design_advanced' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_3.png',
			"label" => esc_html__('Show posts in 2 columns with big block (first post)', 'mariann')
		),
		'layout_list' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_4.png',
			"label" => esc_html__('List with short posts blocks', 'mariann')
		),
		'layout_list_advanced' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_5.png',
			"label" => esc_html__('List with short posts and big block (first post)', 'mariann')
		),
		'layout_masonry' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_6.png',
			"label" => esc_html__('Masonry layout', 'mariann')
		),
		'layout_text' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/blog_layout_7.png',
			"label" => esc_html__('Centered text (Minimnalistic, No images)', 'mariann')
		),
	),
	"std" => "layout_2column_design_advanced",
	"desc" => wp_kses_post(__('This option will completely change blog listing layout and posts display.', 'mariann')),
	"type" => "image",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog posts short content display', 'mariann'),
	"id" => "blog_post_loop_type",
	"std" => "excerpt",
	"options" => array(
		"content" => esc_html__('Full content (You will add <!--more--> tag manually)', 'mariann'),
		"excerpt" => esc_html__('Excerpt (Auto crop by words)', 'mariann'),
		"none" => esc_html__('Disable short content and Continue reading button', 'mariann'),
	),
	"type" => "select",
	"desc" => wp_kses_post(__('Change how short post content will be displayed in blog listing. <a href="https://en.support.wordpress.com/more-tag/" target="_blank">Read more</a> about WordPress &#x3C;!--more--&#x3E; tag.', 'mariann')),
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Post excerpt length (words)', 'mariann'),
	"id" => "post_excerpt_legth",
	"std" => "40",
	"desc" => wp_kses_post(__('Used by WordPress for post shortening. Default: 40', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Disable blog posts loop on main Blog page (Blog homepage)', 'mariann'),
	"id" => "blog_disable_posts_loop",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable this options if you does not want to show posts on your blog homepage. You can use this to create minimalistic website (you will have just blog slider, welcome blocks and editor\'s picks blocks on homepage.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show author name ("by author") in blog posts', 'mariann'),
	"id" => "blog_post_show_author",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show share buttons for posts in posts listing page', 'mariann'),
	"id" => "blog_list_show_share",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Will show share buttons in posts on blog listing pages.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show related posts on posts listing page', 'mariann'),
	"id" => "blog_list_show_related",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Will show 3 related posts after every post in posts list. Does not available in Masonry layout and 2 column layout.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show related posts by', 'mariann'),
	"id" => "blog_list_related_by",
	"std" => "tags",
	"options" => array(
		"tags" => esc_html__('Tags', 'mariann'),
		"cats" => esc_html__('Categories', 'mariann')
	),
	"type" => "select",
	"desc" => wp_kses_post(__('Related posts can be fetched by the same tags or same categories from original post.', 'mariann')),
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Post Comments counters in posts blocks', 'mariann'),
	"id" => "blog_enable_post_comments_counter",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will enable post comments counter display in sliders, popular posts, editor picks, reagular posts blocks.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Post Views counters in posts blocks', 'mariann'),
	"id" => "blog_enable_post_views_counter",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will enable post views counter display in posts.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"field_options" => array(
		"style" => 'alert'
	),
	"name" => wp_kses_post(__('<p>To add your posts to Featured Posts Slider you need to edit your post and set it as featured for slider in Post Settings box.</p>', 'mariann'))
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Featured Posts Slider on homepage', 'mariann'),
	"id" => "blog_enable_homepage_slider",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can mark posts as featured in post edit screen at the bottom settings box to display it in slider in homepage header.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Featured Posts Slider under header (Transparent header feature)', 'mariann'),
	"id" => "blog_enable_homepage_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This feature will make your header transparent and will show it above slider on Homepage. You need to upload light logo version to use this feature.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider width', 'mariann'),
	"id" => "blog_homepage_slider_fullwidth",
	"std" => "0",
	"options" => array(
		"1" => "Fullwidth",
		"0" => "Boxed",
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Revolution Slider instead of theme Featured Posts Slider on homepage', 'mariann'),
	"id" => "blog_enable_revolution_slider",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You need to create Revolution Slider with alias BLOG_SLIDER that will be used instead of theme slider. <br>IMPORTANT: All theme slider options BELOW will NOT WORK if you enabled Revolution Slider, because you will need to manage ALL slider options in Revolution Slider plugin settings in this case.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider height', 'mariann'),
	"id" => "blog_homepage_slider_height",
	"std" => "660",
	"field_options" => array(
		"min" => 250,
		"max" => 800,
		"step" => 5,
		"dimension" => 'px',
		"animation" => true
	),
	"desc" => wp_kses_post(__('Drag to change value. Default: 660px', 'mariann')),
	"type" => "slider",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider items per row', 'mariann'),
	"id" => "blog_homepage_slider_items",
	"std" => "1",
	"options" => array(
		"4" => "4",
		"3" => "3",
		"2" => "2",
		"1" => "1",
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Margin between slides', 'mariann'),
	"id" => "blog_homepage_slider_margin",
	"std" => "30",
	"options" => array(
		"0" => "None",
		"5" => "5px",
		"15" => "15px",
		"30" => "30px",
		"50" => "50px",
	),
	"desc" => wp_kses_post(__('Horizontal margin between slides if you have more than 1 items per row in slider. Auto disabled if you use transparent header feature. Default: 30px', 'mariann')),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider post details layout and style', 'mariann'),
	"id" => "blog_homepage_slider_post_details_layout",
	"std" => "horizontal",
	"options" => array(
		"horizontal" => esc_html__('Horizontal with lines', 'mariann'),
		"horizontal-clean" => esc_html__('Horizontal without lines', 'mariann'),
		"disable" => esc_html__('Disable Post Details (show as image slider)', 'mariann'),
	),
	"desc" => wp_kses_post(__('Select where to show post details (title, description, category, etc) in blog posts inside slider.', 'mariann')),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show slider posts description', 'mariann'),
	"id" => "blog_homepage_slider_description",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Check if you want to show post descriptions in slider.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show slider posts Read More button', 'mariann'),
	"id" => "blog_homepage_slider_readmore",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Check if you want show Read More button for posts in slider.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show comments and views counts for posts in slider', 'mariann'),
	"id" => "blog_homepage_slider_details",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Check if you want show additional post details near date in posts slider.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Merge slider slides', 'mariann'),
	"id" => "blog_enable_homepage_merge_slider",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Check if you want to see different slides widths in one row.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Center active slide', 'mariann'),
	"id" => "blog_enable_homepage_center_slide",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Check if you want to see current slide centered and near slides cropped. Work best with slides per row set to 2 or 4.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider autoplay', 'mariann'),
	"id" => "blog_homepage_slider_autoplay",
	"std" => "3000",
	"options" => array(
		"10000" => esc_html__('Enable - 10 seconds', 'mariann'),
		"5000" => esc_html__('Enable - 5 seconds', 'mariann'),
		"3000" => esc_html__('Enable - 3 seconds', 'mariann'),
		"2000" => esc_html__('Enable - 2 seconds', 'mariann'),
		"1000" => esc_html__('Enable - 1 second', 'mariann'),
		"0" =>  esc_html__('Disable', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider navigation arrows', 'mariann'),
	"id" => "blog_homepage_slider_navigation",
	"std" => "1",
	"options" => array(
		"1" => esc_html__('Enable', 'mariann'),
		"0" => esc_html__('Disable', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Featured Posts Slider pagination buttons', 'mariann'),
	"id" => "blog_homepage_slider_pagination",
	"std" => "false",
	"options" => array(
		"true" => esc_html__('Enable', 'mariann'),
		"false" => esc_html__('Disable', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Welcome Block settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Welcome Block on homepage', 'mariann'),
	"id" => "blog_enable_homepage_welcome_block",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block below your slider or header.', 'mariann')),
	"type" => "checkbox",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Homepage Welcome Block content', 'mariann'),
	"id" => "blog_homepage_welcome_block_content",
	"std" => '',
	"desc" => wp_kses_post(__('You can use any HTML here to display any content in your welcome block with predefined layout.', 'mariann')),
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Carousel settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Popular Posts Carousel on homepage', 'mariann'),
	"id" => "blog_enable_homepage_popular_slider",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can enable mini slider with popular posts (by views) below your header on homepage.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Block title', 'mariann'),
	"id" => "blog_homepage_popular_posts_title",
	"std" => "What's Hot",
	"desc" => wp_kses_post(__('Change default Popular Posts block title. Leave empty to hide title.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Block subtitle', 'mariann'),
	"id" => "blog_homepage_popular_posts_subtitle",
	"std" => "Most popular posts",
	"desc" => wp_kses_post(__('Change default Popular Posts block subtitle. Leave empty to hide title.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Carousel posts limit', 'mariann'),
	"id" => "blog_homepage_popular_slider_limit",
	"std" => "10",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Carousel category slug', 'mariann'),
	"id" => "blog_homepage_popular_slider_category",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to show popular posts only from some category specify it\'s SLUG here (You can create special category like "Popular" and assing posts to it if you want to show only selected posts). You can see/set category SLUG when you edit category. Leave empty to show posts from all categories.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Popular Posts Slider autoplay', 'mariann'),
	"id" => "blog_homepage_popular_slider_autoplay",
	"std" => "3000",
	"options" => array(
		"10000" => esc_html__('Enable - 10 seconds', 'mariann'),
		"5000" => esc_html__('Enable - 5 seconds', 'mariann'),
		"3000" => esc_html__('Enable - 3 seconds', 'mariann'),
		"2000" => esc_html__('Enable - 2 seconds', 'mariann'),
		"1000" => esc_html__('Enable - 1 second', 'mariann'),
		"0" =>  esc_html__('Disable', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Homepage Block settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"field_options" => array(
		"style" => 'alert'
	),
	"name" => esc_html__('To add your posts to Editor\'s Picks Block you need to edit your post and set it as Editors Pick post in Post Settings box.', 'mariann')
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Editor\'s Picks Block on homepage footer', 'mariann'),
	"id" => "blog_enable_homepage_editorspick_posts",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Block title', 'mariann'),
	"id" => "blog_homepage_editorspick_posts_title",
	"std" => "Editor's Picks",
	"desc" => wp_kses_post(__('Change default Editor\'s Picks Posts block title. Leave empty to hide title.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Block subtitle', 'mariann'),
	"id" => "blog_homepage_editorspick_posts_subtitle",
	"std" => "Best posts from Mariann",
	"desc" => wp_kses_post(__('Change default Editor\'s Picks  block subtitle. Leave empty to hide title.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Block layout', 'mariann'),
	"id" => "blog_homepage_editorspick_posts_layout",
	"std" => "masonry",
	"options" => array(
		"masonry" => esc_html__('Masonry', 'mariann'),
		"small" => esc_html__('Small Blocks', 'mariann'),
		"large" => esc_html__('Large Blocks', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Block posts limit (rows)', 'mariann'),
	"id" => "blog_homepage_editorspick_posts_limit",
	"std" => "1",
	"options" => array(
		"1" => esc_html__('One row', 'mariann'),
		"2" => esc_html__('Two rows', 'mariann'),
	),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Editor\'s Picks Block posts category slug', 'mariann'),
	"id" => "blog_homepage_editorspick_posts_category",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to show popular posts only from some category specify it\'s SLUG here (You can create special category like "Picks" and assing posts to it if you want to show only selected posts). You can see/set category SLUG when you edit category. Leave empty to show posts from all categories.', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Single Post page settings', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show Post/Page Header Image under header (Transparent header feature)', 'mariann'),
	"id" => "blog_enable_post_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This feature will make your header transparent and will show it above post/page header image. You need to upload light logo version to use this feature and assign header image for posts/pages where you want to see this feature.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Use smaller content width on single posts and pages without sidebar', 'mariann'),
	"id" => "blog_enable_small_page_width",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option add left/right margins on all pages and posts without sidebars to make your content width smaller.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show author info with avatar after single blog post', 'mariann'),
	"id" => "blog_enable_author_info",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You need to fill your post author biography details and social links in Users section in WordPress to make this work.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show vertical post info box with avatar at the left side of single blog post', 'mariann'),
	"id" => "blog_enable_author_info_vertical",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Show post info box with author details, comments count, views and post share buttons at the left of single post article.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show horizontal post info box at the end of single post', 'mariann'),
	"id" => "blog_enable_post_info_bottom",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Show post info box with comments count, views and post share buttons after single post article.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show share links in Single Post header below post title', 'mariann'),
	"id" => "blog_enable_singlepost_header_info",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show share buttons for posts in single post page', 'mariann'),
	"id" => "blog_post_show_share",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Will show share buttons in posts on blog listing pages.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Drop Caps (first big letter) in single post pages', 'mariann'),
	"id" => "blog_enable_dropcaps",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show related posts on single post page', 'mariann'),
	"id" => "blog_post_show_related",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Hide post featured image on single post page', 'mariann'),
	"id" => "blog_post_hide_featured_image",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable this if you don\'t want to see featured post image on single post page.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Show prev/next posts navigation links on single post page', 'mariann'),
	"id" => "blog_post_navigation",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);


/**
 * SIDEBARS TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'Sidebars',
	'id' => 'sidebar_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "sidebar_settings"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog page sidebar position', 'mariann'),   
	"id" => "blog_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Pages sidebar position', 'mariann'),   
	"id" => "page_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog Archive page sidebar position', 'mariann'),   
	"id" => "archive_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog Search page sidebar position', 'mariann'),   
	"id" => "search_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Blog post sidebar position', 'mariann'),   
	"id" => "post_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('WooCommerce pages sidebar position', 'mariann'),   
	"id" => "woocommerce_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('WooCommerce product page sidebar position', 'mariann'),   
	"id" => "woocommerce_product_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'mariann')
		),
		'right' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'mariann')
		),
		'disable' => array(
			"image" => MARIANN_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'mariann')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * SOCIAL ICONS TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => 'Social icons',
	'id' => 'social_settings'
);
$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "social_settings"
);
$ipanel_mariann_option[] = array(	
	"name" => esc_html__('Social icons', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('Social icons for your web accounts, can be used in theme in different places (Header, Footer, Widgets, etc). Leave URL fields blank to hide this social icon.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Facebook Page url', 'mariann'),
	"id" => "facebook",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Vkontakte page url', 'mariann'),
	"id" => "vk",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Twitter Page url', 'mariann'),
	"id" => "twitter",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Google+ Page url', 'mariann'),
	"id" => "google-plus",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('LinkedIn Page url', 'mariann'),
	"id" => "linkedin",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Dribbble Page url', 'mariann'),
	"id" => "dribbble",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Behance Page url', 'mariann'),
	"id" => "behance",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Instagram Page url', 'mariann'),
	"id" => "instagram",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Tumblr page url', 'mariann'),
	"id" => "tumblr",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Pinterest page url', 'mariann'),
	"id" => "pinterest",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Vimeo page url', 'mariann'),
	"id" => "vimeo-square",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('YouTube page url', 'mariann'),
	"id" => "youtube",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Skype url', 'mariann'),
	"id" => "skype",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Flickr url', 'mariann'),
	"id" => "flickr",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('RSS url', 'mariann'),
	"id" => "rss",
	"std" => "",
	"type" => "text",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Deviantart url', 'mariann'),
	"id" => "deviantart",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('500px url', 'mariann'),
	"id" => "500px",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Etsy url', 'mariann'),
	"id" => "etsy",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Telegram url', 'mariann'),
	"id" => "telegram",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Odnoklassniki url', 'mariann'),
	"id" => "odnoklassniki",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Houzz url', 'mariann'),
	"id" => "houzz",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Slack url', 'mariann'),
	"id" => "slack",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('QQ url', 'mariann'),
	"id" => "qq",
	"std" => "",
	"type" => "text",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * FONTS TAB
 **/

$ipanel_mariann_tabs[] = array(
	'name' => 'Fonts',
	'id' => 'font_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "font_settings"
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Headers font', 'mariann'),
	"id" => "header_font",
	"desc" => wp_kses_post(__('Font used in headers. Default: Amiri', 'mariann')),
	"options" => array(
		"font-sizes" => false,
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-family" => 'Amiri'
	),
	"type" => "typography"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Headers font parameters for Google Font', 'mariann'),
	"id" => "header_font_options",
	"std" => "400",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 400,400italic,600,600italic<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body font', 'mariann'),
	"id" => "body_font",
	"desc" => wp_kses_post(__('Font used in text elements. Default: Karla', 'mariann')),
	"options" => array(
		"font-sizes" => array(
			" " => esc_html__('Font Size', 'mariann'),
			'11' => '11px',
			'12' => '12px',
			'13' => '13px',
			'14' => '14px',
			'15' => '15px',
			'16' => '16px',
			'17' => '17px',
			'18' => '18px',
			'19' => '19px',
			'20' => '20px',
			'21' => '21px',
			'22' => '22px',
			'23' => '23px',
			'24' => '24px',
			'25' => '25px',
			'26' => '26px',
			'27' => '27px'
		),
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-size" => '14',
		"font-family" => 'Karla'
	),
	"type" => "typography"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body font parameters for Google Font', 'mariann'),
	"id" => "body_font_options",
	"std" => "400,400italic,700,700italic",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 400,400italic,700,700italic<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Additional font', 'mariann'),
	"id" => "additional_font",
	"desc" => wp_kses_post(__('You can select any additional Google font here and use it in Custom CSS in theme. Default: Source Sans Pro', 'mariann')),
	"options" => array(
		"font-sizes" => false,
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false,
	),
	"std" => array(
		"font-family" => 'Source Sans Pro'
	),
	"type" => "typography"
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Additional font parameters for Google Font', 'mariann'),
	"id" => "additional_font_options",
	"std" => "400",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 400,400italic,600,600italic<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic', 'mariann')),
	"type" => "text",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Additional font', 'mariann'),
	"id" => "additional_font_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Uncheck if you don\'t want to use Additional font. This will speed up your site.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => wp_kses_post(__('<span style="color:red">Disable ALL Google Fonts on site</span>', 'mariann')),
	"id" => "font_google_disable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Use this if you want extra site speed or want to have regular fonts. Arial font will be used with this option.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Regular font (apply if you disabled Google Fonts below)', 'mariann'),
	"id" => "font_regular",
	"std" => "Arial",
	"options" => array(
		"Arial" => "Arial",
		"Tahoma" => "Tahoma",
		"Times New Roman" => "Times New Roman",
		"Verdana" => "Verdana",
		"Helvetica" => "Helvetica",
		"Georgia" => "Georgia",
		"Courier New" => "Courier New"
	),
	"desc" => wp_kses_post(__('Use this option if you disabled ALL Google Fonts.', 'mariann')),
	"type" => "select",
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * COLORS TAB
 **/

$ipanel_mariann_tabs[] = array(
	'name' => 'Colors & Skins',
	'id' => 'color_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "color_settings",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Predefined color skins', 'mariann'),
	"id" => "color_skin_name",
	"std" => "none",
	"options" => array(
		"none" => esc_html__('Use colors specified below', 'mariann'),
		"default" => esc_html__('Mariann (Default)', 'mariann'),
		"black" => esc_html__('Black', 'mariann'),
		"grey" => esc_html__('Grey', 'mariann'),
		"lightblue" => esc_html__('Light blue', 'mariann'),
		"blue" => esc_html__('Blue', 'mariann'),
		"red" => esc_html__('Red', 'mariann'),
		"green" => esc_html__('Green', 'mariann'),
		"orange" => esc_html__('Orange', 'mariann'),
		"redorange" => esc_html__('RedOrange', 'mariann'),
		"brown" => esc_html__('Brown', 'mariann'),
	),
	"desc" => wp_kses_post(__('Select one of predefined skins or use your own colors. If you selected any predefined styles your specified colors below will NOT be applied.', 'mariann')),
	"type" => "select",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body background color', 'mariann'),
	"id" => "theme_body_color",
	"std" => "#FFFFFF",
	"desc" => wp_kses_post(__('Used in many theme places, default: #FFFFFF', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Body text color', 'mariann'),
	"id" => "theme_text_color",
	"std" => "#000000",
	"desc" => wp_kses_post(__('Body text color, default: #000000', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Theme main color', 'mariann'),
	"id" => "theme_main_color",
	"std" => "#f1868a",
	"desc" => wp_kses_post(__('Used in many theme places, buttons, links, etc. Default: #f1868a', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Header background color', 'mariann'),
	"id" => "theme_header_bg_color",
	"std" => "#FFFFFF",
	"desc" => wp_kses_post(__('Default: #FFFFFF', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Footer background color', 'mariann'),
	"id" => "theme_footer_color",
	"std" => "#ffffff",
	"desc" => wp_kses_post(__('Default: #ffffff', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"name" => esc_html__('Masonry/List blog layout blocks background color', 'mariann'),
	"id" => "theme_masonry_bg_color",
	"std" => "#F5F5F5",
	"desc" => wp_kses_post(__('Default: #F5F5F5', 'mariann')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * BANNERS CODE TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => esc_html__('Ads management', 'mariann'),
	'id' => 'banners_management'
);
$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "banners_management",
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => wp_kses_post(__('<strong>Click ads position name to open settings box.</strong><br>Need new ads position in some specific theme place? <a target="_blank" href="http://support.creanncy.com/">Let our support know</a> where you want to see new ads place and we will add it in next theme update.', 'mariann')),
	"field_options" => array(
		"style" => 'alert'
	)
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Site Header Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed below site Header on all pages.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_below_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_below_header_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Site Above Footer Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed above site footer on all pages.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_above_footer",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_above_footer_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Site Footer Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed in site footer on all pages.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_footer",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_footer_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner Below Homepage Popular Posts Slider', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed on homepage below Homepage Popular Posts Slider.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_below_homepage_popular_posts",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_below_homepage_popular_posts_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Post Loops Middle Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed at the middle between posts on all posts listing pages (Homepage, Archives, Search, etc). This banner does not available in Masonry and Two column blog layouts.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_posts_loop_middle",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_posts_loop_middle_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Post Loops Bottom Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed at the bottom after all posts on posts listing pages (Homepage, Archives, Search, etc).', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_posts_loop_bottom",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_posts_loop_bottom_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Single Blog Post page Top banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed on single blog post page between post content and featured image.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_single_post_top",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_single_post_top_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Single Blog Post page Bottom banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed on single blog post page after post content.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_single_post_bottom",
	"std" => false,
	"field_options" => array(
		"box_label" => "Check Me!"
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_single_post_bottom_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// BANNER OPTIONS
$ipanel_mariann_option[] = array(
	"name" => esc_html__('404 Page and Search Nothing Found Banner', 'mariann'),   
	"type" => "StartSection",
	"field_options" => array(
		"show" => false // Set true to show items by default.
	)
);
$ipanel_mariann_option[] = array(
	"type" => "info",
	"name" => esc_html__('This banner will be displayed on 404 (page not found) and search nothing found pages.', 'mariann'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Enable Banner', 'mariann'),
	"id" => "banner_enable_404",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('You can display any HTML content in this block to show your advertisement.', 'mariann')),
	"type" => "checkbox",
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Banner HTML code', 'mariann'),
	"id" => "banner_404_content",
	"std" => '',
	"field_options" => array(
		'media_buttons' => true
	),
	"type" => "wp_editor",
);
$ipanel_mariann_option[] = array(
		"type" => "EndSection"
);
// END BANNERS
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * CUSTOM CODE TAB
 **/
$ipanel_mariann_tabs[] = array(
	'name' => esc_html__('Custom CSS/JS', 'mariann'),
	'id' => 'custom_code'
);
$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "custom_code",
);
$ipanel_mariann_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label"><label>Custom CSS styles</label></div><div class="ipanel-input">You can add Custom CSS styles in WordPress Customizer (in "Additional CSS" section at the left sidebar).<br/><br/><br/></div>', 'mariann'))
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Custom JavaScript or JQuery code', 'mariann'),
	"id" => "custom_js_code",
	"std" => '',
	"field_options" => array(
		"language" => "javascript",
		"line_numbers" => true,
		"autoCloseBrackets" => true,
		"autoCloseTags" => true
	),
	"desc" => wp_kses_post(__('This code will run in header, do not add &#x3C;script&#x3E;...&#x3C;/script&#x3E; tags here, this tags will be added automatically. You can use JQuery code here.', 'mariann')),
	"type" => "code",
);

$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * DOCUMENTATION TAB
 **/

$ipanel_mariann_tabs[] = array(
	'name' => esc_html__('Documentation', 'mariann'),
	'id' => 'documentation'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "documentation"
);

$ipanel_mariann_option[] = array(
	"type" => "htmlpage",
	"name" => '<div class="documentation-icon"><img src="'.esc_url(MARIANN_IPANEL_URI) . 'assets/img/documentation-icon.png" alt="Documentation"/></div><p>We recommend you to read <a href="http://creanncy.com/go/mariann-docs/" target="_blank">Theme Documentation</a> before you will start using our theme to building your website. It covers all steps for site configuration, demo content import, theme features usage and more.</p>
<p>If you have face any problems with our theme feel free to use our <a href="http://support.creanncy.com/" target="_blank">Support System</a> to contact us and get help for free.</p>
<a class="button button-primary" href="http://creanncy.com/go/mariann-docs/" target="_blank">Theme Documentation</a>
<a class="button button-primary" href="http://support.creanncy.com/" target="_blank">Support System</a><h3>Technical information (paste it to your support ticket):</h3><textarea style="width: 500px; height: 160px;font-size: 12px;">Theme Version: '.wp_get_theme()->get( 'Version' ).'
WordPress Version: '.get_bloginfo( 'version' ).'</textarea>'
);

$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * EXPORT/IMPORT TAB
 **/

$ipanel_mariann_tabs[] = array(
	'name' => esc_html__('Settings Backup', 'mariann'),
	'id' => 'export_settings'
);

$ipanel_mariann_option[] = array(
	"type" => "StartTab",
	"id" => "export_settings"
);
	
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Export theme control panel settings', 'mariann'),
	"type" => "export",
	"desc" => wp_kses_post(__('Export theme admin panel settings to file.', 'mariann'))
);
$ipanel_mariann_option[] = array(
	"name" => esc_html__('Import theme control panel settings', 'mariann'),
	"type" => "import"
);
$ipanel_mariann_option[] = array(
	"type" => "EndTab"
);

/**
 * CONFIGURATION
 **/
$ipanel_configs = array(
	'ID'=> 'MARIANN_PANEL', 
	'menu'=> 
		array(
			'submenu' => false,
			'page_title' => esc_html__('Mariann Control Panel', 'mariann'),
			'menu_title' => esc_html__('Theme Control Panel', 'mariann'),
			'capability' => 'manage_options',
			'menu_slug' => 'manage_theme_options',
			'icon_url' => MARIANN_IPANEL_URI . 'assets/img/panel-icon.png',
			'position' => 59
		),
	'rtl' => ( function_exists('is_rtl') && is_rtl() ),
	'tabs' => $ipanel_mariann_tabs,
	'fields' => $ipanel_mariann_option,
	'download_capability' => 'manage_options',
	'live_preview' => false
);

$ipanel_theme_usage = new IPANEL( $ipanel_configs );
	