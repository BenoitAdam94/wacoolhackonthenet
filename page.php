<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="col-xl-8 bg-color-black">

	<!-- Fil d'arianne (Breadcrumb)-->

	<div class="bg-color-gray m-2 p-1">
		<?php // Breadcrumb navigation
		if (is_page() && !is_front_page() || is_single() || is_category()) {
			echo '<ul class="list-inline">';
			echo '<li class="d-inline"><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a> &gt; </li>';

			if (is_page()) {
				$ancestors = get_post_ancestors($post);

				if ($ancestors) {
					$ancestors = array_reverse($ancestors);

					foreach ($ancestors as $crumb) {
						echo '<li class="d-inline"><a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a>  &gt; </li>';
					}
				}
			}

			if (is_single()) {
				$category = get_the_category();
				echo '<li class="d-inline"><a href="' . get_category_link($category[0]->cat_ID) . '">' . $category[0]->cat_name . '</a></li>';
			}

			if (is_category()) {
				$category = get_the_category();
				echo '<li class="d-inline">' . $category[0]->cat_name . '</li>';
			}

			// Current page
			if (is_page() || is_single()) {
				echo '<li class="d-inline">' . get_the_title() . '</li>';
			}
			echo '</ul>';
		} elseif (is_front_page()) {
			// Front page
			echo '<ul>';
			echo '<li class="d-inline"><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a></li>';
			echo '</ul>';
		}
		?>
	</div>

	<!-- Fin de Fil d'arianne (End of Breadcrumb) -->




	<!-- Miniature -->
	<div class="text-center">
		<?php the_post_thumbnail('medium'); // La miniature 
		?>
	</div>

	<!-- Title -->
	<div class="col-md-12 rounded p-3">
		<h2 class="card-title">
			<?php the_title(); ?>
		</h2>
	</div>


	<!-- Le Contenu -->
	<div>
		<?php the_content(); ?>
	</div>


	<?php


wp_link_pages();
?>

<?php wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>


<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>


<?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>

</div>

<!-- FIN DE MAIN -->
<?php get_footer(); ?>