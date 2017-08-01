<?php

get_header(); ?>
<div class="page-wrapper">
	<header>
		<nav>
			<a href="#">Blog</a>
		</nav>
		<div class="hero">
			<div class="postcard-container">
			    <div class="postcard-message">
			      <h1>Make somebody's day with a personal postcard</h1>
			      <p>Skip the email and send a postcard instead. Your message will warm their heart and our designs will get it on their fridge.</p>
			      <p>Get started and send a card in as little as 60 seconds!</p>
			    </div>
			    <div class="postcard-return">
			      <a class="hero-button" href="#">Get started for a cool $3</a>
			      <!-- <p>For a cool $3.</p> -->
			  	</div>
			</div>
		</div>
	</header>
	
	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>
	
</div>

<?php wp_footer(); ?>