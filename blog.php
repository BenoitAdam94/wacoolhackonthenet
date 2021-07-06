<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="col-xl-8 bg-color-black">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-4 card justify-content-center">
				<div class="card w-90">
					<!-- <img src="..." class="card-img-top" alt="...">-->
					<span class="d-flex align-items-center justify-content-center"><?php the_post_thumbnail('medium'); ?></span>
					<div class="card-body">
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<p class="card-text"><?php the_excerpt(); ?></p>

						<a href="<?php the_permalink(); ?>" class="btn btn-primary"><span>&#x1F4F0</span></a>
					</div>
				</div>



			</div>
		<?php endwhile;
	else : ?>

	<?php endif; ?>

</div>

<!-- FIN DE MAIN -->
<?php get_footer(); ?>