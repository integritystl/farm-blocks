<?php

    add_action('acf/init', 'my_acf_init_block_types');
    function my_acf_init_block_types() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a Image Callout block.
            acf_register_block_type(array(
                'name'              => 'image_callout',
                'title'             => __('Image Callout'),
                'description'       => __('A custom Image Layout block.'),
                'render_template'   => 'template-parts/block-content/content-block_image_callout.php',
                'category'          => 'formatting',
                'icon'              => 'format-image',
                'keywords'          => array( 'image', 'callout' ),
                'mode'              => 'edit',
            ));

            // register a Winners block.
            acf_register_block_type(array(
                'name'              => 'announce_winners',
                'title'             => __('Announce Winners'),
                'description'       => __('Block to save a spot on the page for the winners program announce phase'),
                'render_template'   => 'template-parts/block-content/content-block_announce_winners.php',
                'category'          => 'layout',
                'icon'              => 'megaphone',
                'keywords'          => array( 'winners', 'announce' ),
                'mode'              => 'edit',
            ));
            // register a Announe Finalists block.

            //////THIS ONE IS NOT WORKING BUT LEAVING HERE TO COME BACK TO
            acf_register_block_type(array(
                'name'              => 'announce_finalists',
                'title'             => __('Announce Finalists'),
                'description'       => __('Block to display the finalists of a program'),
                'render_template'   => 'template-parts/block-content/content-block_announce_finalists.php',
                'category'          => 'layout',
                'icon'              => 'megaphone',
                'keywords'          => array( 'finalists', 'announce' ),
                'mode'              => 'edit',
            ));
            // register a Announce Callout.
                //I am not doing this one and seeing if we can take care of this with just the 'title' block with some styles

            // register a Document Download block.
            acf_register_block_type(array(
                'name'              => 'document_downloads',
                'title'             => __('Document Downloads'),
                'render_template'   => 'template-parts/block-content/content-block_document_downloads.php',
                'category'          => 'common',
                'icon'              => 'media-default',
                'keywords'          => array( 'document', 'downloads' ),
                'mode'              => 'edit',
            ));

            // register a FAQ block.
            acf_register_block_type(array(
                'name'              => 'faq',
                'title'             => __('FAQs'),
                'render_template'   => 'template-parts/block-content/content-block_faqs.php',
                'category'          => 'common',
                'icon'              => 'editor-help',
                'keywords'          => array( 'questions', 'frequently', 'faq' ),
                'mode'              => 'edit',
            ));

            // register a fifty fifty repeater.
            acf_register_block_type(array(
                'name'              => 'fifty_fifty_repeater',
                'title'             => __('50/50 Repeater'),
                'render_template'   => 'template-parts/block-content/content-block_fifty-fifty-repeater.php',
                'category'          => 'layout',
                'icon'              => 'tagcloud',
                'keywords'          => array( 'fifty', 'image' ),
                'mode'              => 'edit',
            ));

            // register a Get Nominations.
            acf_register_block_type(array(
                'name'              => 'get_nominations',
                'title'             => __('Get Nominations'),
                'render_template'   => 'template-parts/block-content/content-block_get_nominations.php',
                'category'          => 'layout',
                'icon'              => 'awards',
                'keywords'          => array( 'nominations', 'program' ),
                'mode'              => 'edit',
            ));

            // register a GRE Winners.
            ////This one's ajax is breaking need to look into this.
            acf_register_block_type(array(
                'name'              => 'GRE_winners',
                'title'             => __('GRE Winners'),
                'render_template'   => 'template-parts/block-content/content-block_gre-winners.php',
                'category'          => 'layout',
                'icon'              => 'awards',
                'keywords'          => array( 'winners', 'program', 'gre' ),
                'mode'              => 'edit',
            ));

            // register a People Component.
            acf_register_block_type(array(
                'name'              => 'people',
                'title'             => __('People Profile'),
                'render_template'   => 'template-parts/block-content/content-block_people.php',
                'category'          => 'common',
                'icon'              => 'admin-users',
                'keywords'          => array( 'people', 'profile' ),
                'mode'              => 'edit',
            ));

            // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'program_announcement',
                'title'             => __('Program Announcement'),
                'render_template'   => 'template-parts/block-content/content-block_program_announcements.php',
                'category'          => 'layout',
                'icon'              => 'schedule',
                'keywords'          => array( 'cards', 'announce', 'program' ),
                'mode'              => 'edit',
            ));

             // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'recent_stories',
                'title'             => __('Recent Stories'),
                'render_template'   => 'template-parts/block-content/content-block_recent_stories.php',
                'category'          => 'common',
                'icon'              => 'media-document',
                'keywords'          => array( 'stories', 'posts', 'recent' ),
                'mode'              => 'edit',
            ));

            // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'related_links',
                'title'             => __('Related Links'),
                'render_template'   => 'template-parts/block-content/content-block_related-links.php',
                'category'          => 'common',
                'icon'              => 'admin-links',
                'keywords'          => array( 'related', 'links', 'buttons' ),
                'mode'              => 'edit',
            ));

             // register Rural Enrollment.
            acf_register_block_type(array(
                'name'              => 'rural_enrollment',
                'title'             => __('Rural Enrollment'),
                'render_template'   => 'template-parts/block-content/content-block_rural_enrollment.php',
                'category'          => 'common',
                'icon'              => 'megaphone',
                'keywords'          => array( 'rural', 'enroll', 'enrollment' ),
                'mode'              => 'edit',
            ));

            // register Steps.
            acf_register_block_type(array(
                'name'              => 'steps',
                'title'             => __('Steps'),
                'render_template'   => 'template-parts/block-content/content-block_steps.php',
                'category'          => 'layout',
                'icon'              => 'editor-ol',
                'keywords'          => array( 'steps' ),
                'mode'              => 'edit',
            ));

            // register Story Phase.
            acf_register_block_type(array(
                'name'              => 'story_phase',
                'title'             => __('Story Phase'),
                'render_template'   => 'template-parts/block-content/content-block_story_phase.php',
                'category'          => 'common',
                'icon'              => 'format-status',
                'keywords'          => array( 'story', 'program' ),
                'mode'              => 'edit',
            ));

            // register Video Callout.
            acf_register_block_type(array(
                'name'              => 'video_callout',
                'title'             => __('Video Callout'),
                'render_template'   => 'template-parts/block-content/content-block_video_callout.php',
                'category'          => 'common',
                'icon'              => 'video-alt3',
                'keywords'          => array( 'video', 'callout' ),
                'mode'              => 'edit',
            ));

            // register Wizywig.
            acf_register_block_type(array(
                'name'              => 'basic_wysiwyg',
                'title'             => __('Basic Content'),
                'render_template'   => 'template-parts/block-content/content-block_basic_wysiwyg.php',
                'category'          => 'common',
                'icon'              => '',
                'keywords'          => array( 'paragraph', 'heading', 'wysiwyg', 'content' ),
                'mode'              => 'edit',
            ));

        }
    }

    


?>
