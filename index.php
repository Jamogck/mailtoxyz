<?php

get_header(); ?>
<div class="page">
	<div class="select">
		<div id="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/mailtoxyz.svg" title="Mailto:xyz" alt="Mailto:xyz">
		</div>
		<h1>Make somebody's day with a personalized postcard.</h1>
	</div>
	<div class="compose">
		<form method="POST">
			<input type="text">
			<input type="text">
			<input type="text">
			<textarea></textarea>
			<input type="submit">
		</form>
	</div>
</div>

<?php wp_footer(); ?>