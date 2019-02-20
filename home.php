<?php
/**
* Template Name: Hem
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Sektion 1 -->
<div class="jumbotron jumbotron-fluid" style="width:100%;">
	<div class="container">
	    <div class="row">
	    
	    	<div class="col col-xl-4 col-sm col-xs-12 nu-wrapper">
	    		<h1 class="nu"><?php the_field( 'sektion_1_-_huvudrubrik' ); ?></h1>
	    	</div><!-- .col -->
	    	
	    	<div class="col col-xl-8 col-sm col-xs-12 nu-text">
	    		<div class="type-wrap">
	    			<div id="typed-strings">

	    				<?php if ( have_rows( 'skrivmaskin_text_funktion' ) ) : ?>
						<?php while ( have_rows( 'skrivmaskin_text_funktion' ) ) : the_row(); ?>
							<p><?php the_sub_field( 'rubrik' ); ?><br><a href="<?php the_sub_field( 'lank' ); ?>"><?php the_sub_field( 'lank_text' ); ?> <i class="fa fa-chevron-circle-right align-middle"></i></a></p>
						<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

      				</div><!-- .typed-strings -->
      				<span id="typed" class="" style="white-space:pre-wrap;"></span>
      			</div><!-- .type-wrap -->
	    	</div><!-- .col -->
	    	
	    </div><!-- .row -->
    </div> <!-- .container -->
</div> <!-- .jumbotron -->

  </div> <!-- .row -->
</div> <!-- .container -->
<!-- Sektion 1 -->


<!-- Sektion 2 -->
<div class="container-fluid">
	<h2 class="hem"><?php the_field( 'sektion_2_-_huvudrubrik' ); ?></h2>
	<div class="container">
		<section id="primary" class="content-area">
			<div class="row pb-5">
			
					<ul class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-xs-12 ikons pb-5">
						<li class=""><a href="http://tierp2030.nu/klimatet/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/1@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/natur-och-ekosystem/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/2@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/samhalle-och-landsbygd/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/3@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/miljo/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/miljo_energi-150x150@2x.png"></a></li>
						<!-- <li class=""><a href="http://tierp2030.nu/kust-och-vatten/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/5@2x.png"></a></li> -->
						<li class=""><a href="http://tierp2030.nu/forskola-och-skola/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/6@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/folkhalsa/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/7@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/mat-och-livsmedel/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/8@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/hallbar-konsumption/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/9@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/social-omsorg/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/10@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/allas-lika-varde/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/11@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/inkluderande-samhalle/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/12@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/arbete-och-tillvaxt/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/arbete-150x150@2x.png"></a></li>
						<li class=""><a href="http://tierp2030.nu/naringsliv/"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/mal_ikoner/14@2x.png"></a></li>

						<!-- <li class=""><a href="https://agenda2030delegationen.se"><img class="img-fluid" alt="" src="http://media.tierp2030.nu/globala_malen@2x.png"></a></li>-->
						<li class=""><img class="img-fluid blank" alt="" src="http://media.tierp2030.nu/blank.png"></li>
						<li class=""><img class="img-fluid blank" alt="" src="http://media.tierp2030.nu/blank.png"></li>
						<li class=""><img class="img-fluid blank extra" alt="" src="http://media.tierp2030.nu/blank.png"></li>
					</ul>

				<div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 col-xs-12 hem-intro pl-4">
					<h3 class="hem"><?php the_field( 'sektion_2_-_underrubrik' ); ?></h3>
				
					<?php if(get_field('ruta')) 
						{ echo '<div class="textruta">' . get_field('ruta') . '</div>'; }
					?>
					
					<?php the_field( 'sektion_2_-_brodtext' ); ?>
				</div>
			</div><!-- row -->				
		</section><!-- #primary -->
	</div><!-- .container -->
</div> <!-- .container -->
<!-- Sektion 2 -->

<?php endwhile; // end of the loop. ?>

<?php
get_footer();
