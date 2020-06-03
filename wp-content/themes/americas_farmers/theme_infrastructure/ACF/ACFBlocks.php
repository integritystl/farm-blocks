<?php 
	if( function_exists('acf_add_local_field_group') ):

	//Image Callout
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f75dd5d',
		'title' => 'Block: Image Callout',
		'fields' => array(
			array(
				'key' => 'field_5ed65506ccea3',
				'label' => 'Image Content',
				'name' => 'image_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5ed65527ccea4',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/image-callout',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Announce Winners
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f72133klc',
		'title' => 'Block: Announce Winners',
		'fields' => array(
			array(
				'key' => 'field_5eab1a901a7d7',
				'label' => 'Grow Program Enrollment',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This field will add the Phase based fields to the page in the place we would like them to be.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_5ea218cd3ff9d',
				'label' => 'Winners Program',
				'name' => 'program',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'program',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/announce-winners',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Announce Finalist
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f721928jdls',
		'title' => 'Block: Announce Finalists',
		'fields' => array(
			array(
				'key' => 'field_finalist_year_header',
				'label' => 'Year Display Header',
				'name' => 'year_display_header',
				'type' => 'text',
				'instructions' => 'Type the year that these finalists were selected.',
			),
			array(
				'key' => 'field_finalist_content',
				'label' => 'Content Blurb',
				'name' => 'content_blurb',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_finalist_program',
				'label' => 'Program',
				'name' => 'program',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'program',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/announce-finalists',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Document Downloads
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f72192237jhk',
		'title' => 'Block: Document Downloads',
		'fields' => array(
			array(
				'key' => 'field_5b16a09b2cd63',
				'label' => 'Header',
				'name' => 'download_header',
				'type' => 'text',
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'key' => 'field_5b16a0b32cd64',
				'label' => 'Content',
				'name' => 'download_content',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5b16a0e12cd65',
				'label' => 'Document Download',
				'name' => 'document_download',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Document',
				'sub_fields' => array(
					array(
						'key' => 'field_5b16a1c52cd66',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5b16a1ce2cd67',
						'label' => 'Sub Title',
						'name' => 'sub_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5b16a2042cd68',
						'label' => 'File',
						'name' => 'file',
						'type' => 'file',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'library' => 'all',
						'min_size' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_5b16a2372cd69',
						'label' => 'Background Image',
						'name' => 'background_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => 1,
						'mime_types' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/document-downloads',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	//FAQs
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f72192982kjh',
		'title' => 'Block: FAQs',
		'fields' => array(
			array(
				'key' => 'field_5b16a1c52cd66_faq_title',
				'label' => 'FAQ Title',
				'name' => 'faq_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5b16a1c52cd66_faq_subtitle',
				'label' => 'FAQ Subtitle',
				'name' => 'faq_subtitle',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),

			array(
				'key' => '5b0324d7b6b7ad2425',
				'label' => 'FAQ',
				'name' => 'faq',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'Add New FAQ',
				'sub_fields' => array(
					array(
						'key' => 'field_5b0324d7b6b7ad2426',
						'label' => 'Question',
						'name' => 'faq_question',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5b0324d7b6b7ad2427',
						'label' => 'Answer',
						'name' => 'faq_answer',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/faq',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	//Fifty Fifty Repeater
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f7219209hd',
		'title' => 'Block: Fifty Fifty Repeater',
		'fields' => array(
			array(
				'key' => 'field_fifty_fifty_headline',
				'label' => 'Section Headline',
				'name' => 'section_headline',
				'type' => 'text',
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'key' => 'field_fifty_fifty_content',
				'label' => 'Intro Content',
				'name' => 'intro_content',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'rows' => 3,
			),
			array(
				'key' => 'field_5eac74da98kj',
				'label' => 'Media Section',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5eac7616609ojh',
				'label' => 'Media Image',
				'name' => 'media_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5eac76be09jkh',
				'label' => 'Text Section',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'fifty_fifty_background_color',
				'label' => 'Background Color',
				'name' => 'background_color',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'none' => 'None',
					'navy' => 'Navy',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5eac76cb87gjhf',
				'label' => 'Text Repeater',
				'name' => 'text_repeater',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'row',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5eac777109jkhgf',
						'label' => 'Repeater Content',
						'name' => 'repeater_content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5eac77c6hghd',
						'label' => 'Button Repeater',
						'name' => 'button_repeater',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 0,
						'max' => 0,
						'layout' => 'row',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_5eac77cd6gjhg',
								'label' => 'Buttons',
								'name' => 'buttons',
								'type' => 'link',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'array',
							),
						),
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/fifty-fifty-repeater',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	//Get Noms
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f72176jhg',
		'title' => 'Block: Get Nominations',
		'fields' => array(
			array(
				'key' => 'field_5b292c481e86g',
				'label' => 'nominations_message',
				'name' => 'Nominations',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This will render out the module for checking for nominations',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/get-nominations',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Get Noms
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f721098skj',
		'title' => 'Block: Get Nominations',
		'fields' => array(
			array(
				'key' => 'field_5eab1a9ertgfvghj',
				'label' => 'Winners',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This will allow for the winners to be displayed on a page without using the phase based logic.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_5ea345rfgh',
				'label' => 'Winners Program',
				'name' => 'Program',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'program',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/gre-winners',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Get People
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f72as0987',
		'title' => 'Block: People',
		'fields' => array(
			array(
				'key' => 'field_5b1594asds097',
				'label' => 'Person',
				'name' => 'people-profile',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'Add Person',
				'sub_fields' => array(
					array(
						'key' => 'field_5b15948sd09sf',
						'label' => 'Image',
						'name' => 'person_image',
						'type' => 'image',
						'return_format' => 'ID',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'person_headline',
						'label' => 'Name',
						'name' => 'person_headline',
						'type' => 'text',
						'wrapper' => array(
							'width' => '60',
							'class' => '',
							'id' => '',
						),
					),
					array(
						'key' => 'person_subheadline',
						'label' => 'State and City',
						'name' => 'person_subheadline',
						'type' => 'text',
						'wrapper' => array(
							'width' => '60',
							'class' => '',
							'id' => '',
						),
					),
					array(
						'key' => 'person_content',
						'label' => 'Content',
						'name' => 'person_content',
						'type' => 'textarea',
						'new_lines' => 'br'
					)
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/people',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Program Announcement Cards
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f7sdf987',
		'title' => 'Block: Program Announcement',
		'fields' => array(
			array(
				'key' => 'field_5eab1a901a7d987sdjk',
				'label' => '',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This field will add the content for this section that is set under "Theme Config".',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/program-announcements',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Recent Storries
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f98dskh3',
		'title' => 'Block: Recent Stories',
		'fields' => array(
			array(
				'key' => 'field_show_recent_stories',
				'label' => 'Show Recent Stories',
				'name' => 'show_recent_stories',
				'type' => 'true_false',
				'message' => 'Check here if you would like to pull in recent Stories.',
				'required' => 0,
			),
			array(
				'key' => 'field_select_recent_stories',
				'label' => 'Select Stories Category',
				'name' => 'select_stories_category',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'add_term' => 1,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
				'allow_null' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/recent-stories',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Related Links
	acf_add_local_field_group(array(
		'key' => 'group_5ed654f9298sj',
		'title' => 'Block: Related Links',
		'fields' => array(
			array(
				'key' => 'field_5b241fkjrsjksf8a',
				'label' => 'Related Links',
				'name' => 'related_links',
				'type' => 'relationship',
				'instructions' => 'Select posts or pages to be featured as related posts.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
					1 => 'post',
				),
				'taxonomy' => array(
				),
				'filters' => array(
					0 => 'search',
					1 => 'post_type',
				),
				'elements' => '',
				'min' => '',
				'max' => '3',
				'return_format' => 'id',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/related-links',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	//Rural Enroll
	acf_add_local_field_group(array(
		'key' => 'group_5ed65412sdfs',
		'title' => 'Block: Rural Enrollment',
		'fields' => array(
			array(
				'key' => 'field_5eab1823rsds',
				'label' => 'Grow Program Enrollment',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This field will add the Phase based fields to the page in the place we would like them to be.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_5ea218cad0sl',
				'label' => 'Enroll Program',
				'name' => 'enroll_program',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'program',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/rural-enrollment',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Steps
	acf_add_local_field_group(array(
		'key' => 'group_5ed650sdkls',
		'title' => 'Block: Steps',
		'fields' => array(
			array(
				'key' => 'field_5eb1895wps9nw9f',
				'label' => 'Step Header',
				'name' => 'step_header',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5eb189743asd3',
				'label' => 'Step Content',
				'name' => 'step_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5eb185aals3499',
				'label' => 'Steps',
				'name' => 'steps',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5eb185bqalns99a',
						'label' => 'Step Number',
						'name' => 'step_number',
						'type' => 'number',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array(
						'key' => 'field_5eb185ddqwefkb',
						'label' => 'Step Content',
						'name' => 'step_content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/steps',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Story Phase
	acf_add_local_field_group(array(
		'key' => 'group_5ed65234wsdfs',
		'title' => 'Block: Story Phase',
		'fields' => array(
			array(
				'key' => 'field_5eab18012lk3j',
				'label' => 'Grow Program Story',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'This field will add the Phase based fields to the page in the place we would like them to be.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_5ea218234wsfgsd',
				'label' => 'Active Program',
				'name' => 'active_program',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'program',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/story-phase',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	//Video Callout
	acf_add_local_field_group(array(
		'key' => 'group_5ed6513adslkfs',
		'title' => 'Block: Video Callout',
		'fields' => array(
			array(
				'key' => 'field_5ea0a98170f88',
				'label' => 'Video Section',
				'name' => 'video_section',
				'type' => 'row',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5ea0aa5670f89',
				'label' => 'Video IFrame',
				'name' => 'video_iframe',
				'type' => 'text',
				'instructions' => 'Add IFrame for youtube',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5ea0aab070f8a',
				'label' => 'Video Content',
				'name' => 'video_content',
				'type' => 'row',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5ea0aacc70f8b',
				'label' => 'Video Title',
				'name' => 'video_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ea0aaeasdf370f8c',
				'label' => 'Content',
				'name' => 'video_content_wysiwyg',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/video-callout',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;

?>