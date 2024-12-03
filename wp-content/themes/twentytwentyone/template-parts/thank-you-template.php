<?php
/**
 * Template Name: Thank You page Template
 * Template Post Type: page
 */

get_header();
?>
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
		padding: 20px;
	}
	a {
		color: #fff;
	}
</style>
<div class="container"><p>Thank you, Your form has been submitted successfully. We'll get back to you shortly.<br><a href="3-step-form/"> Back</a></p></div>
<?php
get_footer();

