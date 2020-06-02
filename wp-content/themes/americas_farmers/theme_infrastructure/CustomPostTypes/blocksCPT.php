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
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image', 'callout' ),
        ));

        // register a Winners block.
        acf_register_block_type(array(
            'name'              => 'announce_winners',
            'title'             => __('Announce Winners'),
            'description'       => __('Block to save a spot on the page for the winners program announce phase'),
            'render_template'   => 'template-parts/block-content/content-block_announce_winners.php',
            'category'          => 'layout',
            'icon'              => 'dashicons-megaphone',
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
            'icon'              => 'dashicons-megaphone',
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
            'icon'              => 'dashicons-media-default',
            'keywords'          => array( 'document', 'downloads' ),
        ));

        // register a FAQ block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQs'),
            'render_template'   => 'template-parts/block-content/content-block_faqs.php',
            'category'          => 'common',
            'icon'              => 'dashicons-media-default',
            'keywords'          => array( 'questions', 'frequently', 'faq' ),
        ));

        // register a fifty fifty repeater.
        acf_register_block_type(array(
            'name'              => 'fifty_fifty_repeater',
            'title'             => __('50/50 Repeater'),
            'render_template'   => 'template-parts/block-content/content-block_fifty-fifty-repeater.php',
            'category'          => 'layout',
            'icon'              => 'dashicons-media-default',
            'keywords'          => array( 'fifty', 'image' ),
        ));
    }
}

?>