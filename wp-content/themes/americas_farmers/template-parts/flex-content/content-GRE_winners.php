<?php
/**
*
* Handles reading the program and calling SalesForce for the relevant winners
*
**/

// Grab the relevant fields
//Which program is this?
$program = get_sub_field('program');
//What's the relevant key for that program?
$programKey = get_field('program_key', $program);
//Which phases should this module be active during? (array)

//We have a content managed field instead of using the year passed to the API
$year = get_field('program_display_year', $program);
$program_display_year = empty($year) ? date('Y') : $year;
//From theme_infrastructure/services/helpers.php
	$states = getStateArray();

$winnersContent = get_field('winners_content_blurb', $program);

?>

	<div id="announce_winners" data-program="<?php echo $programKey;?>" class="<?php echo $programKey; ?>">
		<?php if ($winnersContent){ ?>
			<div class="announce_winners_blurb">
				<?php echo $winnersContent; ?>
			</div>
		<?php } ?>
		<h4 class="announce_winners_title">Grow<span class="announce_winners_program_title"><?php echo $programKey; ?></span></h4>
		<h2 class="winners_year" data-program-year="<?php echo $program_display_year;?>"><?php echo $program_display_year;?> WINNERS</h2>

		<p class="announce_winners_label">Select a state using the dropdown field to see who the 2020 winners are in your area.</p>
		<div class="winners_state_select">
			<div class="winners_state_select_top">
				<span id="winners_state_nicename">Select a State</span>
				<i id="winners_chevron" class="far fa-chevron-down" aria-hidden="true"></i>
			</div>
			<div class="winners_state_select_bottom">
				<ul role="listbox" aria-label="state select box" tabindex="0">
					<?php
						foreach($states as $key => $value){
							echo "<li role='option' class='winners_state_option' data-value='" . $value . "' data-nicename='" . $key . "'>" . $key . "</li>";
						}
					?>
				</ul>
			</div>
		</div>
		<div class="loading_spinner">
			<div class="lds-ring dark-ring"><div></div><div></div><div></div><div></div></div>
		</div>
		<div class="winners_total"><span></span> (alphabetical order by county )</div>
		<ul id="winners_container" class="<?php echo $programKey;?>">

		</ul>
		<div id="winner_error" class="winner_error">
			<p class="winner_congratulations">Whoops!</p>
			<h2>An error has occurred retrieving winners.</h2>
			<h3>Please refresh the page and try again.</h3>
			<h4>If this problem persists, please email us <a href="mailto:americas.farmers@monsanto.com">here</a></h4>
		</div>
	</div>

