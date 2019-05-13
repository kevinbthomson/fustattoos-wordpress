<?php
	/*
		Template Name: Front/Home Page
	*/
?>

<?php get_header(); ?>

<main class="clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<div class="content">
				<div id="instas"></div>
				<?php the_content(); ?>
			</div>

		</article>
		
	<?php endwhile; endif; ?>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
