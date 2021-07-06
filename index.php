<?php get_header(); ?>
<!-- MAIN BEGINS -->
<main class="col-xl-8 bg-color-black">


	
	<h2 class="under"><u>ACCUEIL</u></h2>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<p class="bg-color-yellow color-black">
				<a class="color-black" href="<?php the_permalink(); ?>">
					<!-- Icon -->
					&nbsp;<i class="far fa-newspaper"></i>
					<!-- Title of post -->
					<?php the_title(); ?>
					<!-- Date / Time / Author -->
					<span class="date"> - Le <?php the_date('d/m/y'); ?> à <?php the_time(); ?> par <?php the_author(); ?></span> <!-- La Date -->
				</a>
			</p>
			<div <?php post_class('bg-color-customblue p-2'); ?>>
				<?php the_content(); ?>
			</div>

			<br>




		<?php endwhile;
	else : ?>

	<?php endif; ?>

	<?php
	the_posts_navigation();  // Navigation Multi-Post
	?>



</main>


<!-- END OF MAIN -->
<?php get_footer(); ?>