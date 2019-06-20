<div class="site-branding">
		<!-- our featured image will go in here -->
		<!-- here we use our get_category_image function which will find the current category , 
		and if it doesn't it will return us the homepage image -->
				<img src="<?php get_category_image('home');?>" class="db featured-image">
		</div><!-- .site-branding -->