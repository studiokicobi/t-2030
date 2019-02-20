<?php
/**
* Template Name: Mål
 */

get_header(); ?>



<div class="scrollmenu">
	<div class="scrollmenu_heading">
		<h3><?php the_field( 'mal_navigation_rubrik_', 'option' ); ?></h3>
	</div>
	<a href="http://tierp2030.nu/klimatet/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/1@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/natur-och-ekosystem/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/2@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/samhalle-och-landsbygd/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/3@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/miljo/"><img class="" src="http://media.tierp2030.nu/miljo_energi-150x150@2x.png" alt=""></a>
	<!-- <a href="http://tierp2030.nu/kust-och-vatten/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/5@2x.png" alt=""></a> -->
	<a href="http://tierp2030.nu/forskola-och-skola/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/6@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/folkhalsa/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/7@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/mat-och-livsmedel/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/8@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/hallbar-konsumption/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/9@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/social-omsorg/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/10@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/allas-lika-varde/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/11@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/inkluderande-samhalle/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/12@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/arbete-och-tillvaxt/"><img class="" src="http://media.tierp2030.nu/arbete-150x150@2x.png" alt=""></a>
	<a href="http://tierp2030.nu/naringsliv/"><img class="" src="http://media.tierp2030.nu/mal_ikoner/14@2x.png" alt=""></a>
</div>



	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
					<div class="goal-heading">
						<h1 class="goal-<?php the_field( 'mal_nummer' ); ?>"><?php the_field( 'huvudrubrik' ); ?></h1>
					</div>

			<div class="container">
					<?php while ( have_posts() ) : the_post(); ?>

				<div class="row goal goal-<?php the_field( 'mal_nummer' ); ?>">
					<div class="goal-text col-xl-7 col-lg-7 col-md-7 pt-4 mr-1">
						<?php if(get_field('underrubrik')): ?>
						<h2><?php the_field( 'underrubrik' ); ?></h2>
						<?php endif; ?>
						<?php the_field( 'ingress' ); ?>
					</div>
		
					<div class="col-xl-4 col-lg-4 col-md-4 pt-4 mt-3 goal-img">		
						<?php if ( get_field( 'ikon' ) ) { ?>
							<img src="<?php the_field( 'ikon' ); ?>" />
						<?php } ?>
					</div>
    
					<div class="col-sm-12 next-goal-nav">
					<?php
					$pagelist = get_pages( array ( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'exclude' => '4,8,14,12') );
					$pages = array();
					foreach ($pagelist as $page) {
					   $pages[] += $page->ID;
					}

					$current = array_search(get_the_ID(), $pages);
					$prevID = $pages[$current-1];
					$nextID = $pages[$current+1];
					?>

					<div class="navigation">
						<?php if (!empty($prevID)) { ?>
							<div class="alignleft">
								<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">
									<i class="fa fa-chevron-circle-left align-middle"></i> <span class="links align-middle">FÖREGÅENDE</span>
								</a>
							</div>
						<?php }
						if (!empty($nextID)) { ?>
							<div class="alignright">
								<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">
									<span class="links align-middle">NÄSTA</span> <i class="fa fa-chevron-circle-right align-middle"></i>
								</a>
							</div>
						<?php } ?>
						</div><!-- .navigation -->
					</div><!-- .col -->
				</div><!-- row -->
			</div><!-- container -->

			<div class="container">
				<div class="row mt-5 mb-5">
					<div class="col-xl-6 col-lg-6 col-sm-12 pr-3">
						<?php the_field( 'text' ); ?>
					</div>

					<div class="col-xl-6 col-lg-6 col-sm-12 px-5 py-5 suggestions-wrapper">
						<h3 class="goal"><?php the_field( 'mp_forslag_rubrik' ); ?></h3>
						<div class="suggestions">
						<?php the_field( 'forslag' ); ?>
						</div>
					</div>

					<?php endwhile; ?>
				</div><!-- row -->
			</div><!-- container -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
