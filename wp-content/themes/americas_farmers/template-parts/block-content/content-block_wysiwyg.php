<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG field.
*
*
**/

?>

<div class="wysiwyg-wrapper">

	<div class="wysiwyg flex-content-section">
		<?php
			the_field('content');
		?>
	</div>

</div>
