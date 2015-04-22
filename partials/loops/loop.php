<section id="container" class="grid grid3d">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'partials/posts/post' ); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
<!-- /grid -->