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
            ));

            // register a FAQ block.
            acf_register_block_type(array(
                'name'              => 'faq',
                'title'             => __('FAQs'),
                'render_template'   => 'template-parts/block-content/content-block_faqs.php',
                'category'          => 'common',
                'icon'              => 'editor-help',
                'keywords'          => array( 'questions', 'frequently', 'faq' ),
            ));

            // register a fifty fifty repeater.
            acf_register_block_type(array(
                'name'              => 'fifty_fifty_repeater',
                'title'             => __('50/50 Repeater'),
                'render_template'   => 'template-parts/block-content/content-block_fifty-fifty-repeater.php',
                'category'          => 'layout',
                'icon'              => 'tagcloud',
                'keywords'          => array( 'fifty', 'image' ),
            ));

            // register a Get Nominations.
            acf_register_block_type(array(
                'name'              => 'get_nominations',
                'title'             => __('Get Nominations'),
                'render_template'   => 'template-parts/block-content/content-block_get_nominations.php',
                'category'          => 'layout',
                'icon'              => 'awards',
                'keywords'          => array( 'nominations', 'program' ),
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
            ));

            // register a People Component.
            acf_register_block_type(array(
                'name'              => 'people',
                'title'             => __('People Profile'),
                'render_template'   => 'template-parts/block-content/content-block_people.php',
                'category'          => 'common',
                'icon'              => 'admin-users',
                'keywords'          => array( 'people', 'profile' ),
            ));

            // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'program_announcement',
                'title'             => __('Program Announcement'),
                'render_template'   => 'template-parts/block-content/content-block_program_announcements.php',
                'category'          => 'layout',
                'icon'              => 'schedule',
                'keywords'          => array( 'cards', 'announce', 'program' ),
            ));

             // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'recent_stories',
                'title'             => __('Recent Stories'),
                'render_template'   => 'template-parts/block-content/content-block_recent_stories.php',
                'category'          => 'common',
                'icon'              => 'media-document',
                'keywords'          => array( 'stories', 'posts', 'recent' ),
            ));

            // register Program Announcement.
            acf_register_block_type(array(
                'name'              => 'related_links',
                'title'             => __('Related Links'),
                'render_template'   => 'template-parts/block-content/content-block_related-links.php',
                'category'          => 'common',
                'icon'              => 'admin-links',
                'keywords'          => array( 'related', 'links', 'buttons' ),
            ));
        }
    }


?>