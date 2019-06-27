<nav class="navbar navbar-light">
	<a class="navbar-brand" href="<?php get_home_url(); ?>">
		AKAD.
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<?php wp_nav_menu(array(
			'container'     => '',
			'menu_class'    => 'navbar-nav'
		)); ?>
	</div>
</nav>