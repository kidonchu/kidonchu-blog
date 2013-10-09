<?php get_header(); ?>

<div class="content">

	<?php if (function_exists('yoast_breadcrumb')) {
		yoast_breadcrumb('<div class="breadcrumbs">','</div>');
	} ?>

	<?php if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'loop', 'single' );

	endwhile; ?>

	<?php endif; ?>

	<?php comments_template(); ?>

</div>

<?php get_footer(); ?>
