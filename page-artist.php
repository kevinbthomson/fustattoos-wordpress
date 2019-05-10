<?php
	/*
		Template Name: Artist Page
	*/
?>

<?php get_header(); ?>

<main class="clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="artist clearfix" id="post-<?php the_ID(); ?>">
			
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<div id="bio">
				<?php the_post_thumbnail('thumbnail'); ?>
				<?php the_content(); ?>
			</div>
			
			<div id="portfolio">
				<!-- Advanced custom fields w/ Multiple content blocks fallback -->
				<?php
					if (get_field('thumbnails')) {
						the_field('thumbnails');
					} else {
						the_block( $name, $args );
					}
				?>
			</div>

		</article>
		
	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
