<?php
/**
*
* Component for the image callout. Includes background image, body copy, headline and accent arrow.
*
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'image-callout-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-callout';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$imgCalloutImage = get_field('image'); // Image Callout Background Image array
$imgCalloutContent = get_field('image_content');
?>

<div class="image_callout flex-content-section" style="background-image:url('<?php echo $imgCalloutImage; ?>');">
	<div class="container">
		<div class="image_callout_content">
			<?php echo $imgCalloutContent; ?>
		</div>
	</div>
</div>

