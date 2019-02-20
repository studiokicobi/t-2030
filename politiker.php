<?php
/**
* Template Name: Politiker
*/


get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

<!-- Sektion 1 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<h1 class="politiker"><?php the_field( 'huvudrubrik' ); ?></h1>

			<div class="container">
			<div class="row politiker">

			<?php if ( have_rows( 'politiker' ) ) : ?>
				<?php while ( have_rows( 'politiker' ) ) : the_row(); ?>

					<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 px-lg-4 px-md-3 px-sm-4">
						<?php if ( get_sub_field( 'portratt' ) ) { ?>
							<img class="" src="<?php the_sub_field( 'portratt' ); ?>" />
						<?php } ?>

						<h2><?php the_sub_field( 'namn' ); ?></h2>

						<div class="politiker_beskrivning">
							<?php the_sub_field( 'text' ); ?>
						</div>
					</div><!-- .col-sm -->

				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			
			</div><!-- .row -->
			</div><!-- .container -->
<!-- Sektion 1 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->


<!-- Sektion 2 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div class="container kandidater-wrapper pb-5 mb-5">

			<div class="row justify-content-center">
			
				<div class="col-xl-5 align-self-center">
					<span id="kandidater-img"></span>
					<h1 id="kandidater_rubrik"><?php the_field( 'kandidater_rubrik' ); ?></h1>
				</div>
			
				<div class="col-xl-7 kandidater_list pt-4">
					<ol id="kandidater_list" class="mt-3 pb-4">
					<?php if ( have_rows( 'kandidater' ) ) : ?>
					<?php while ( have_rows( 'kandidater' ) ) : the_row(); ?>
						<li class=""><?php the_sub_field( 'namn' ); ?></li>
					<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
					</ol>
				</div>
				
			</div><!-- .row -->
			</div><!-- .container -->			

<!-- Sektion 2 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
