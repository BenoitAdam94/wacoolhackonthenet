<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="col-xl-8 bg-color-black">

	<h2><?php the_title(); ?></h2> <!-- Le Titre du post-->

	<div>
		<span class="date"><?php the_date(); ?></span> <!-- La Date -->

		<?php
		the_tags(
			'<span class="tag"><i class="fa fa-tag"></i> ', // Début
			'</span><span class="tag"><i class="fa fa-tag"></i> ', // Entre 2 tags
			'</span>' // Fin
		);
		?>
	</div>

	<?php
	the_post_thumbnail('medium'); // La miniature du post	
	the_content(); // Le contenu 
	?>

	<hr>

	<?php
	the_post_navigation(); // Navigation Single Post
	?>

	<hr>
	
		<a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();  // Appeller comments.php 
		}
		
		?>
	
</div>

<!-- FIN DE MAIN -->
<?php get_footer(); ?>