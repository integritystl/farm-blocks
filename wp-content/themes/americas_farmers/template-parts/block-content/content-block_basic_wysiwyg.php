<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG field.
*
*
**/

$basicContent = get_field('content');
?>

<div class="wysiwyg-wrapper">

	<div class="wysiwyg flex-content-section">
		<?php echo $basicContent ?>
	</div>

</div>
