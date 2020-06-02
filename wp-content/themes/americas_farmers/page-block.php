<?php
/**
 * Template Name: Block Content
 *
 * This template renders block fields.
 *
 * @package Americas Farmers
 *
 */

get_header();
	if(have_posts()): while(have_posts()): the_post();
?>

<div class="page_container">
	<div id="primary" class="content-area">

		<div class="entry-content">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
	</div>
</div>
<?php
endwhile;
endif;

get_footer();
 
