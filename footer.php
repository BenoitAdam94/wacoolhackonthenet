<div class="col-xl-2 bg-color-black">
	<div class="col">
		<div class="overflow-hidden">
			<?php dynamic_sidebar('sidebar-1');	?>
		</div>
	</div>
</div>

</div> <!-- Fin de la div class "row" -->

</div> <!-- Fin du container -->

<div>&nbsp;</div> <!-- Espace vide en rouge -->

<footer class="container-fluid conteneurfooter"> <!-- Nouveau conteneur -->
	<div class="row container"> <!-- Nouvelle row -->
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center bg-color-black">

			<?php dynamic_sidebar('footer-1');	?>

		</div>
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center bg-color-black">

			<?php dynamic_sidebar('footer-2');	?>

		</div>
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center bg-color-black">


			<!-- Social Menu  -->
			<?php
			wp_nav_menu([
				'theme_location' => 'social-menu',
				'title_li' => '',
				'depth' => 1,
				'container_class' => 'social-menu',
				'menu_class'      => 'social-icons',
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'theme_location'  => 'socialmenu',
			]);
			?>

		</div>
	</div>
</footer>



<?php wp_footer(); ?>



</body>

</html>