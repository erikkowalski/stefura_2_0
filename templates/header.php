<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>

<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand brand-logo" href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_url'); ?>/dist/images/logo.jpg" ></a>
			<a class="navbar-brand brand-text" href="<?php echo home_url(); ?>/">STEFURA <span>ASSOCIATES</span></a>		</div>

		<nav class="collapse navbar-collapse" role="navigation">
			<?php
if (has_nav_menu('primary_navigation')) :
wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
endif;
			?>
		</nav>
	</div>
</header>