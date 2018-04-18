<?php get_header(); ?>
<main>
	<article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1 class="koptitel"><?php the_field('pagina_titel');?></h1>
                    <p><?php the_field('pagina_intro');?></p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php
					if(is_page(84)){
						echo '<div class="blok br p-30 schaduw animatie mt--120">';
							echo '<h2 itemprop="name">Maaike Hogebrug Fotografie</h2>';
							echo '<div class="row mb-30">';								
								echo '<div class="col-xs-12 col-sm-6">';
									echo '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
										echo '<i class="far fa-fw fa-map-marker-alt"></i> <span itemprop="streetAddress">Javastraat 75</span> (<a href="https://goo.gl/maps/REV5BJVphKw" target="_blank">Route</a>)<br />';
										echo '<i class="far fa-fw fa-map" aria-hidden="true"></i> <span itemprop="postalCode">7556SE</span>, <span itemprop="addressLocality">Hengelo</span><span class="d-none"> (<span itemprop="addressRegion">Overijssel</span>)</span>  ';                                           
									echo '</div>';
									echo '<i class="far fa-fw fa-phone" aria-hidden="true"></i> <span itemprop="telephone">06 14 21 34 41</span>';
								echo '</div>';
								echo '<div class="col-xs-12 col-sm-6">';
									echo '<a href="https://www.facebook.com/MaaikeHogebrugFotografie/" target="_blank"><i class="fab fa-fw fa-facebook-f" aria-hidden="true"></i> Facebook</a><br />';
                        			echo '<a href="https://www.instagram.com/maaike_hogebrug_fotografie/" target="_blank"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Instagram</a>';
								echo '</div>';
							echo '</div>';					

							the_field('pagina_inhoud');
						echo '</div>';
					}
					
					elseif(is_page(689)){
						?>
                        <div class="row d-flex br p-30 schaduw animatie blok mt--120" id="opdehoogte">
                        	<div class="col-xs-12 col-sm-4 text-center">
                            	<a href="https://www.facebook.com/MaaikeHogebrugFotografie/" target="_blank"><i class="fab fa-4x fa-facebook-f" aria-hidden="true"></i>
                                <p>Like mij op Facebook</p></a>
                            </div>
                        	<div class="col-xs-12 col-sm-4 text-center">
                            	<a href="https://www.instagram.com/maaike_hogebrug_fotografie/" target="_blank"><i class="fab fa-4x fa-instagram" aria-hidden="true"></i>
                                <p>Volg mij op Instagram</p></a>
                            </div>
                        	<div class="col-xs-12 col-sm-4 text-center">
                            	<a href="<?php echo get_category_link(1);?>"><i class="far fa-4x fa-file-alt" aria-hidden="true"></i>
                                <p>Lees mijn blog</p></a>
                            </div>
                        </div>
                        <?php
					}
					
					elseif(is_page(255)){
						echo '<div class="blok br p-30 schaduw animatie mt--120">';
							the_field('pagina_inhoud');
						echo '</div>';	
					}
					
					else{
						the_field('pagina_inhoud');
                    }
                    ;?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>