<?php // get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
	<?php _e('Sorry, no results were found.', 'sage'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<section id="projects">
	<div class="featured">

		<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>

<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	</div>
</section>
<?php endwhile; ?>
<div class="col-md-12">
<?php the_posts_navigation(); ?>
</div>
