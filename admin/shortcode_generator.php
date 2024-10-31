<?php

return array(
// menus
'Orginal Hover' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('Orginal CSS3 Hover Shortcode Settings', 'qualia_td'),
			'code' => '[org_hover]',
			'attributes' => array(
			
						
					array(
			'type' => 'notebox',
			'name' => 'nb_1',
			'label' => __('Author Comment', 'vp_textdomain'),
			'description' => __('To get all features working, please buy the pro version here <a target="_blank" href="http://codecans.com/items/original-css3-image-hover-effects-pro/">Original Css3 Image Hover Effects Pro</a> for only $11</a>', 'vp_textdomain'),
			'status' => 'error',
				),
				
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),
						
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Hover Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),		
						array(
							'value' => 'style3',
							'label' => 'Style 3',
						),		
						array(
							'value' => 'style4',
							'label' => 'Style 4',
						),		
						array(
							'value' => 'style5',
							'label' => 'Style 5',
						),		
						array(
							'value' => 'style6',
							'label' => 'Style 6',
						),		
						array(
							'value' => 'style7',
							'label' => 'Style 7',
						),		
						array(
							'value' => 'style8',
							'label' => 'Style 8',
						),		
						array(
							'value' => 'style9',
							'label' => 'Style 9',
						),		
						array(
							'value' => 'style10',
							'label' => 'Style 10',
						),		
						array(
							'value' => 'style11',
							'label' => 'Style 11',
						),		
						array(
							'value' => 'style12',
							'label' => 'Style 12',
						),
						array(
							'value' => 'style13',
							'label' => 'Style 13 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style14',
							'label' => 'Style 14 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style15',
							'label' => 'Style 15 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style16',
							'label' => 'Style 16 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style17',
							'label' => 'Style 17 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style18',
							'label' => 'Style 18 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style19',
							'label' => 'Style 19 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style20',
							'label' => 'Style 20 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style21',
							'label' => 'Style 21 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style22',
							'label' => 'Style 22 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style23',
							'label' => 'Style 23 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style24',
							'label' => 'Style 24 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style25',
							'label' => 'Style 25 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style26',
							'label' => 'Style 26 - <span style="color:red;">pro only</span>',
						),		
						array(
							'value' => 'style27',
							'label' => 'Style 27 - <span style="color:red;">pro only</span>',
						),						
	
				),	),
			
				// Display Item Appear in One Row
				array(
					'type' => 'select',
					'name' => 'orginal_item_show',
					'label' => __('Display Hover Item in 1 row', 'vp_textdomain'),
					'default' => array(
								'{{last}}',
								),
					'items' => array(
						array(
							'value' => 'rd-gird-col-lg-12 rd-gird-col-md-12 rd-gird-col-sm-12 rd-gird-col-xs-12',
							'label' => '1',
						),
						array(
							'value' => 'rd-gird-col-lg-6 rd-gird-col-md-6 rd-gird-col-sm-6 rd-gird-col-xs-12',
							'label' => '2',
						),	
						array(
							'value' => 'rd-gird-col-lg-4 rd-gird-col-md-4 rd-gird-col-sm-6 rd-gird-col-xs-12',
							'label' => '3',
						),	
						array(
							'value' => 'rd-gird-col-lg-3 rd-gird-col-md-3 rd-gird-col-sm-6 rd-gird-col-xs-12',
							'label' => '4',
						),

					),
				),
					
// Backgroubd Color	
    array(
        'type' => 'color',
        'name' => 'background_color',
        'label' => __('Background Color - <span style="color:red;">pro only</span> ', 'vp_textdomain'),
        'description' => __('Chose Color Picker, you can set the default color.', 'vp_textdomain'),
        'default' => '#DDD',
        'format' => 'HEX',
    ),
	
	// Item Margin
	    array(
        'type' => 'slider',
        'name' => 'item_margin',
        'label' => __('Item Margin - <span style="color:red;">pro only</span>', 'vp_textdomain'),
        'description' => __('make white space in px between thumbnails.', 'vp_textdomain'),
        'min' => '0',
        'max' => '10',
        'step' => '1',
        'default' => '0',
    ),
	
					
			
// Google Font
					array(
						'type' => 'select',
						'name' => 'goog_font',
						'label' => __('Text Font - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'default' => 'Roboto',
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					
								// TITLE FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 't_f_size',
						'label' => __('Title Font Size - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '18',
						),
						
			// TITLE COLOR
						
				array(
						'type'  => 'color',
						'name'  => 't_color',
						'label' => __('Title Color - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
			// TITLE FONT STYLE
			array(
				'type' => 'radiobutton',
				'name' => 't_f_style',
				'label' => __('Title Font Style - <span style="color:red;">pro only</span>', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'normal',
						'label' => __('Normal', 'vp_textdomain'),
					),
					array(
						'value' => 'italic',
						'label' => __('Italic', 'vp_textdomain'),
					),
				),
				'default' => array(
					'normal',
				),
			),
							
			// Description FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 'd_f_size',
						'label' => __('Description Font Size - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '13',
						),
						
			// Description COLOR
						
				array(
						'type'  => 'color',
						'name'  => 'd_color',
						'label' => __('Description Color - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
			// Description FONT STYLE
			array(
				'type' => 'radiobutton',
				'name' => 'd_f_style',
				'label' => __('Description Font Style - <span style="color:red;">pro only</span>', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'normal',
						'label' => __('Normal', 'vp_textdomain'),
					),
					array(
						'value' => 'italic',
						'label' => __('Italic', 'vp_textdomain'),
					),
				),
				'default' => array(
					'normal',
				),
			),	
					
		// BuTTON BACKGROUND COLOR
				array(
						'type'  => 'color',
						'name'  => 'button_color',
						'label' => __('Button Color - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						'default' => 'rgba(51,53,53,1)',
						'format' => 'rgba',
					),
					
					
		// Button FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 'b_f_size',
						'label' => __('Button Font Size - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '12',
						),	
						
			// Botton Font Color
				array(
						'type'  => 'color',
						'name'  => 'b_t_color',
						'label' => __('Botton Font Color - <span style="color:red;">pro only</span>', 'vp_textdomain'),
						'default' => '#ffffff',
					),	
				
	// Open link in new Tab
			array(
				'type' => 'radiobutton',
				'name' => 'new_tab',
				'label' => __('Open link with new TAB - <span style="color:red;">pro only</span>', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => '_blank',
						'label' => __('Yes', 'vp_textdomain'),
					),
					array(
						'value' => '',
						'label' => __('No', 'vp_textdomain'),
					),
				),
				'default' => array(
					'',
				),
			),	


					
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>