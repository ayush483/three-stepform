<?php
/**
 * Template Name: Custom Form Template
 * Template Post Type: page
 */

get_header(); ?>

<style type="text/css">
	body {
		margin: 0;
		font-family: Arial, sans-serif;
		color: #fff;
		background-color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}

	.container {
		display: flex;
		width: 100%;
		max-width: 1200px;
		background-color: #222;
		border-radius: 8px;
		overflow: hidden;
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
	}

	.left-section {
		flex: 1;
		padding: 40px;
		background: radial-gradient(circle at center, #4c1d95, #000);
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	.left-section h1 {
		font-size: 2.5rem;
		margin-bottom: 20px;
	}

	.left-section p {
		font-size: 1.2rem;
		margin-bottom: 20px;
		line-height: 1.5;
	}

	.left-section ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.left-section ul li {
		font-size: 1rem;
		margin-bottom: 10px;
		line-height: 1.4;
		position: relative;
	}

	.left-section ul li::before {
		content: "•";
		color: #f39c12;
		margin-right: 10px;
	}

	.right-section {
		flex: 1.2;
		padding: 40px;
		background-color: #fff;
		color: #333;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.right-section h2 {
		font-size: 1.5rem;
		margin-bottom: 10px;
	}

	.right-section p {
		font-size: 1rem;
		margin-bottom: 20px;
		color: #666;
		margin-top: 0;
	}

	.search-box p {
		margin-bottom: 10px !important;
	}

	.search-box {
		margin-bottom: 20px;
	}

	.search-box input {
		width: 100%;
		padding: 10px;
		font-size: 1rem;
		border: 1px solid #ccc;
		border-radius: 5px;
	}

	.skills {
		display: flex;
		flex-wrap: wrap;
		gap: 10px;
	}

	.skill {
		background-color: #f4f4f4;
		padding: 10px 15px;
		font-size: 0.9rem;
		border-radius: 20px;
		cursor: pointer;
		color: #333;
		white-space: nowrap;
	}

	.skill:hover {
		background-color: #ddd;
	}

	.skill.selected {
		background-color: #4c1d95;
		color: #fff;
	}

	.skill .remove-skill {
		margin-left: 10px;
		font-size: 0.8rem;
		cursor: pointer;
	}

	.next-btn {
		align-self: flex-end;
		background-color: #4c1d95 !important;
		color: #fff !important;
		border: none;
		border-radius: 20px;
		font-size: 12px;
		opacity: 0.5;
		cursor: not-allowed;
		transition: background-color 0.3s ease;
		float: right;
		width: 85px;
		padding: 7px 15px 7px 15px;
		text-align: center;
		margin: 0;
	}

	.next-btn:hover {
		background-color: #3b146b !important;
	}

	.next-btn.enabled {
		opacity: 1;
		cursor: pointer;
	}

	.next-btn:hover.enabled {
		background-color: #0056b3;
	}

	.chips-container {
		display: flex;
		flex-wrap: wrap;
		gap: 10px;
		margin-bottom: 30px;
	}

	.chip {
		background-color: #e0e0e0;
		color: #333;
		padding: 5px 15px;
		border-radius: 20px;
		display: inline-flex;
		align-items: center;
		cursor: pointer;
		transition: all 0.3s ease;
		font-size: 12px;
	}

	.chip:hover {
		background-color: #d6d6d6;
	}

	.chip.selected {
		background-color: #4c1d95;
		color: white;
	}

	.chip .close {
		margin-left: 10px;
		font-size: 1rem;
		color: inherit;
		cursor: pointer;
	}

	#output {
		margin-top: 20px;
		font-size: 1.1rem;
	}

	input[type="checkbox"] {
		display: none;
	}

	.custom-form-wrapper {
		max-width: 1200px;
		margin: 0 auto;
		padding: 20px;
		display: flex;
	}

	.image-block {
		flex: 1;
		padding: 20px;
		background-color: black;
		color: white;
		box-sizing: border-box;
		display: flex;
		flex-direction: column;
		justify-content: right;
	}

	.text-right {
		text-align: right;
	}

	.form-block {
		flex: 1; /* Take up 50% of the width */
		padding: 20px;
		background: #fff;
		border: 1px solid #eaeaea;
		border-radius: 8px;
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
	}

	h3.form-title {
		font-weight: 500;
	}

	.form-progress ul {
		list-style: none;
		display: flex;
		justify-content: space-between;
		padding: 0;
		margin-bottom: 20px;
		counter-reset: step;
	}

	.form-progress ul li {
		position: relative;
		padding: 10px 15px;
		background: #f5f5f5;
		color: #888;
		border-radius: 5px;
		text-align: center;
		font-size: 14px;
		counter-increment: step;
	}

	.form-progress ul li.active {
		background: #0073aa;
		color: #fff;
	}

	/* Form Steps */
	.form-step.active {
		display: block;
	}

	/* Form Inputs */
	.form-input {
		width: 100%;
		padding: 10px;
		margin-bottom: 15px;
		border: 1px solid #ddd;
		border-radius: 4px;
		font-size: 14px;
	}

	/* Buttons */
	.form-button {
		border: none;
		border-radius: 20px;
		padding: 10px 20px;
		font-size: 1em;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	.back-button {
		align-self: flex-end;
		background-color: #fff !important;
		color: #000 !important;
		border: 1px solid #aaa;
		border-radius: 20px;
		font-size: 12px;
		cursor: pointer;
		transition: background-color 0.3s ease;
		float: right;
		width: 85px;
		padding: 7px 15px 7px 15px;
		text-align: center;
		margin: 0;
	}

	.back-button:hover {
		background-color: #e0e0e0;
	}

	.form-button.submit-button {
		background: #28a745;
	}

	.button-group {
		display: flex;
		justify-content: space-between;
		margin-top: 20px;
	}

	/* Skills List */
	.skills-container {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 10px;
	}

	.skill-item {
		background: #f9f9f9;
		padding: 10px;
		border: 1px solid #ddd;
		border-radius: 4px;
	}

	.pd-left {
		padding: 0 0 0 130px;
	}

	.pd-left p {
		font-size: 15px;
	}

	.pd-left h3 {
		padding: 20px 0 0 0;
	}

	.pd-left ul {
		padding: 0 0 0px 15px;
		font-size: 15px;
		margin-top: 50%;
	}

	.form-title {
		font-size: 1.5em;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.chkagree {
		display: block !important;
		margin: 0px 10px 30px 0;
	}

	.radio-group {
		display: grid;
		grid-template-columns: repeat(2, 1fr); /* Two columns for radio options */
		gap: 20px; /* Space between items */
		margin: 20px 0;
	}

	.radio-item {
		display: flex; /* Use flexbox to align radio and text */
		align-items: center; /* Vertically center-align */
		padding: 10px 15px;
		background-color: #ffffff;
		border: 1px solid #e0e0e0;
		border-radius: 8px;
		cursor: pointer;
	}

	.radio-item input {
		margin-right: 10px; /* Space between radio and label */
		cursor: pointer;
	}

	.radio-item span {
		font-size: 13px;
		color: #7a7272;
	}

	.radio-item:hover {
		background-color: #f1f1f1;
	}

	#step-3 {
		background-color: #fff;
		padding: 20px;
		border-radius: 8px;
	}

	input[type="text"],
	input[type="email"],
	input[type="tel"],
	select {
		width: 100%;
		padding: 8px;
		margin-bottom: 10px;
		border: 1px solid #ccc;
		border-radius: 4px;
	}

	#step-3 h4 {
		padding-bottom: 20px;
	}

	#step-3 label {
		font-size: 13px;
		color: #7a7272;
	}

	.policy {
		margin-bottom: 15px !important;
		padding-left: 35px;
		font-size: 14px !important;
	}
	.bold-label p {
		font-size: 14px;
		margin: 0;
		padding: 0;
	}
	.bold-label { 
		font-weight: bold;
		display: flex;
		align-items: center;
		margin-bottom: 10px;
	}

	.countrymobile {
		display: flex;
		border: 1px solid #ccc;
		margin-bottom: 15px;
		border-radius: 4px;
	}

	select#country-code {
		font-size: 15px;
		padding: 10px;
		margin: 0;
		width: 25%;
		border-right: 1px solid #ccc;
		border-left: 0;
		border-top: 0;
		border-bottom: 0;
		border-radius: 4px 0px 0px 4px;
	}

	.countrymobile input#phone {
		margin: 0;
		border: none;
		padding: 0;
	}
</style>

<div class="container">
	<!-- Left Section -->
	<div class="left-section">
		<h1>Find your perfect match</h1>
		<p>Answer 6 short questions to help us understand your needs.</p>
		<ul>
			<li>Gain access to 5000+ experts</li>
			<li>Get matched with a developer in 2 days</li>
			<li>Hire quickly and easily with 94% match success</li>
		</ul>
	</div>

	<!-- Right Section -->
	<div class="right-section">
		<form id="custom-form" method="post">
			<!-- Step 1 -->
			<div class="form-step" id="step-1">
				<h2>Choose the skills you’re after</h2>
				<p>You can either search for a skill or select from the popular skills below.</p>
				<div class="search-box">
					<p>Search skill</p>
					<input type="text" name="search_skill" id="search-skill" placeholder="Find over 500+ skills" class="form-input" onkeyup="filterSkills()" />
				</div>
				<p id="output">Skill selected: </p>
				<div class="chips-container" id="skills-list">
					<div class="chip" data-skill="User Flows"><input type="checkbox" name="skills[]" value="User Flows" hidden>User Flows <span class="close">×</span></div>
					<div class="chip" data-skill="AWS EC2"><input type="checkbox" name="skills[]" value="AWS EC2" hidden>AWS EC2 <span class="close">×</span></div>
					<div class="chip" data-skill="Node.js"><input type="checkbox" name="skills[]" value="Node.js" hidden>Node.js <span class="close">×</span></div>
					<div class="chip" data-skill="Vue.js"><input type="checkbox" name="skills[]" value="Vue.js" hidden>Vue.js <span class="close">×</span></div>
					<div class="chip" data-skill="PHP"><input type="checkbox" name="skills[]" value="PHP" hidden>PHP <span class="close">×</span></div>
					<div class="chip" data-skill="Javascript"><input type="checkbox" name="skills[]" value="Javascript" hidden>Javascript <span class="close">×</span></div>
					<div class="chip" data-skill="React.js"><input type="checkbox" name="skills[]" value="React.js" hidden>React.js <span class="close">×</span></div>
					<div class="chip" data-skill="React Native"><input type="checkbox" name="skills[]" value="React Native" hidden>React Native <span class="close">×</span></div>
					<div class="chip" data-skill="WordPress"><input type="checkbox" name="skills[]" value="WordPress" hidden>WordPress <span class="close">×</span></div>
					<div class="chip" data-skill=".NET"><input type="checkbox" name="skills[]" value=".NET" hidden>.NET <span class="close">×</span></div>
					<div class="chip" data-skill="Python"><input type="checkbox" name="skills[]" value="Python" hidden>Python <span class="close">×</span></div>
					<div class="chip" data-skill="Laravel"><input type="checkbox" name="skills[]" value="Laravel" hidden>Laravel <span class="close">×</span></div>
					<div class="chip" data-skill="C#"><input type="checkbox" name="skills[]" value="C#" hidden>C# <span class="close">×</span></div>
				</div>
				<button type="button" class="next-btn" onclick="goToStep(2)" id="next-btn-step1" disabled>NEXT</button>
			</div>

			<!-- Step 2 -->
			<div class="form-step" id="step-2" style="display:none;">
				<h3 class="form-title">How long will the engagement last?</h3>
				<div class="radio-group">
					<label class="radio-item">
						<input type="radio" name="engagement_duration" value="More than 6 months">
						<span>More than 6 months</span>
					</label>
					<label class="radio-item">
						<input type="radio" name="engagement_duration" value="3 to 6 months">
						<span>3 to 6 months</span>
					</label>
					<label class="radio-item">
						<input type="radio" name="engagement_duration" value="1 to 3 months">
						<span>1 to 3 months</span>
					</label>
					<label class="radio-item">
						<input type="radio" name="engagement_duration" value="1 to 4 weeks">
						<span>1 to 4 weeks</span>
					</label>
					<label class="radio-item">
						<input type="radio" name="engagement_duration" value="Not sure">
						<span>I’m not really sure</span>
					</label>
				</div>
				<div class="button-group">
					<button type="button" class="back-button" onclick="goToStep(1)">BACK</button>
					<button type="button" class="next-btn" onclick="goToStep(3)" id="next-btn-step2" disabled>NEXT</button>
				</div>
			</div>

			<!-- Step 3 -->
			<div class="form-step" id="step-3" style="display:none;">
				<h2><strong>We'd like to get in touch and hear about your needs</strong></h2>
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Your company email</label>
				<input type="email" id="email" name="email" required>

				<label for="phone">Phone number (Optional)</label>

				<div class="countrymobile">
					<select id="country-code" name="country-code">
						<option value="IN">IN (+91)</option>
						<!-- Add more country codes as needed -->
					</select>
					<input type="tel" id="phone" name="phone">
				</div>

				<label class="bold-label">
					<input type="checkbox" class="chkagree" name="agreement" required> 
					<p>I agree to let Proxify AB use my personal data to create an offer for their services.</p>
				</label>
				<p class="policy">Read our <a href="#">Privacy Policy</a> and <a href="#">Cookie Policy</a>.</p>
				<div class="button-group">
					<button type="button" class="back-button" onclick="goToStep(2)">BACK</button>
					<button type="submit" name="submit_form" class="submit-button next-btn" id="next-btn-step3" disabled>NEXT</button>
				</div>
			</div>

		</form>
	</div>
</div>

<script>
	function goToStep(step) {

		if(step === 2){
			const radioButtons = document.querySelectorAll('input[name="engagement_duration"]');
			const nextButtons = document.querySelectorAll(".next-btn");
			const isRadioSelected = Array.from(radioButtons).some((radio) => radio.checked);
			if (isRadioSelected) {
				nextButtons[1].disabled = false;
				nextButtons[1].classList.add("enabled");
			} else {
				nextButtons[1].disabled = true;
				nextButtons[1].classList.remove("enabled"); // Remove the 'enabled' class
			}
		}

		if(step === 3){
			//console.log('fffff');
			const chkButtons = document.querySelectorAll('input[name="agreement"]');
			const nxtButtons = document.querySelectorAll(".next-btn");
			const isChkSelected = Array.from(chkButtons).some((checkbox) => checkbox.checked);
			//console.log(nxtButtons[0].classList.remove("enabled"));
			//console.log(nxtButtons[1].classList.remove("enabled"));
			//console.log(nxtButtons[2].classList.remove("enabled"));
			if (isChkSelected) {
				nxtButtons[2].disabled = false;
				nxtButtons[2].classList.add("enabled");
			} else {
				//console.log('dfgfdgfd');
				nxtButtons[2].disabled = true;
				nxtButtons[2].classList.remove("enabled"); // Remove the 'enabled' class
			}
		}

		document.querySelectorAll('.form-step').forEach(stepEl => {
			stepEl.style.display = 'none';
		});
		document.querySelector(`#step-${step}`).style.display = 'block';

		document.querySelectorAll('.form-progress ul li').forEach((indicator, index) => {
			if (index + 1 <= step) {
				indicator.classList.add('active');
			} else {
				indicator.classList.remove('active');
			}
		});
	}

	function filterSkills() {
		const search = document.getElementById('search-skill').value.toLowerCase();
		document.querySelectorAll('#skills-list div').forEach(label => {
			const skill = label.textContent.toLowerCase();
			label.style.display = skill.includes(search) ? 'block' : 'none';
		});
	}

	document.getElementById("search-skill").addEventListener("input", filterSkills);
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		function updateSelectedSkillsCount() {
			const selectedCount = $(".chip.selected").length;
			$("#output").text(`Skill selected: ${selectedCount}`);
		}

            // Toggle selection on chip click
		$(".chip").on("click", function () {
                // Toggle the selected class
			$(this).toggleClass("selected");

                // Toggle the checkbox checked state
			const checkbox = $(this).find("input[type='checkbox']");
			checkbox.prop("checked", !checkbox.prop("checked"));

                // Update the count of selected skills
			updateSelectedSkillsCount();
			updateNextButtonStateSelected();
		});

		// Update Next Button State
		function updateNextButtonStateSelected() {
        // Get all selected chips
			const selectedChips = $('.chip.selected');
			const nextButton = $('.next-btn');

        // Enable the next button if at least one chip is selected, otherwise disable it
			if (selectedChips.length > 0) {
				nextButton.addClass('enabled');
				nextButton.prop('disabled', false);
			} else {
				nextButton.removeClass('enabled');
				nextButton.prop('disabled', true);
			}
		}

            // Deselect chip when clicking on the close (×)
		$(".chip .close").on("click", function (e) {
                e.stopPropagation(); // Prevent the event from reaching the parent chip
                const chip = $(this).parent();
                chip.removeClass("selected");

                // Uncheck the corresponding checkbox
                const checkbox = chip.find("input[type='checkbox']");
                checkbox.prop("checked", false);

                // Update the count of selected skills
                updateSelectedSkillsCount();
            });
	});

</script>

<script type="text/javascript">
	$(document).ready(function () {
    // Attach a change event listener to the radio buttons
		$('input[name="engagement_duration"]').on('change', function () {
        // Check if any radio button is checked
			if ($(this).is(':checked')) {
            // If a radio button is checked, enable the Next button
				$('.next-btn').eq(1).prop('disabled', false).addClass('enabled');
			} else {
            // If no radio button is checked, disable the Next button
				$('.next-btn').eq(1).prop('disabled', true).removeClass('enabled');
			}
		});

		// Attach a change event listener to the radio buttons
		$('input[name="agreement"]').on('change', function () {
        // Check if any radio button is checked
			if ($(this).is(':checked')) {
            // If a radio button is checked, enable the Next button
				$('.next-btn').eq(2).prop('disabled', false).addClass('enabled');
			} else {
            // If no radio button is checked, disable the Next button
				$('.next-btn').eq(2).prop('disabled', true).removeClass('enabled');
			}
		});
	});
</script>

<?php get_footer(); ?>