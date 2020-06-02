<?php 

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'image_callout',
            'title'             => __('Image Callout'),
            'description'       => __('A custom Image Layout block.'),
            'render_template'   => 'template-parts/block-content/content-block_image_callout.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image', 'callout' ),
        ));
    }
}

?>