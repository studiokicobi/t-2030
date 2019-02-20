<?php
/**
* Template Name: Kontakt
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-12">
						<h1><?php the_field( 'huvudrubrik' ); ?></h1>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-sm-12">
						<?php the_field( 'text' ); ?>
					</div>
		
					<div id="kontakt-form" class="col-xl-6 col-sm-12 mb-5 pt-3 pl-4 pr-4">		
						<!-- Add form --><?php echo do_shortcode('[wpforms id="59" title="false" description="false"]'); ?>
					</div>
					</div>
					<?php endwhile; ?>
				</div><!-- row -->
			</div><!-- container -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
