<?php
/**
Template Name: Home
**/
get_header();?>

<main>
	<article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1>Maaike Hogebrug Fotografie</h1>
                    <?php the_field('home_intro');?>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90" id="doorkiesblokken"> 
            <?php
            $args = array('posts_per_page' => -1, 'post_type' => 'fotografie');
            $diensten = new WP_Query($args);
            if($diensten->have_posts())
            {
                echo '<div class="row">';
                    echo '<div class="owl-carousel carrousel-doorkiesblokken">';
                        while($diensten->have_posts())
                        {
                            $diensten->the_post();
							$dienstAfb = get_field('dienst_afbeelding');
							echo '<div class="blok animatie schaduw br draai">';
								echo '<figure>';
									echo '<img src="'.$dienstAfb['sizes']['dkb-groot'].'" srcset="'.$dienstAfb['sizes']['dkb-klein'].' 315w, '.$dienstAfb['sizes']['dkb-medium'].' 485w, '.$dienstAfb['sizes']['dkb-groot'].' 520w" sizes="100vw" alt="'.get_field('dienst_titel').' fotografie" title="'.get_field('dienst_titel').' fotografie" class="img-fluid" />';
								echo '</figure>';
								echo '<div class="p-30">';
									echo '<header>';
										echo '<h2 class="mb-0">'.get_field('dienst_titel').'</h2>';
										echo '<span>Vanaf €'.get_field('dienst_vanaf').'</span>';
									echo '</header>';
									echo '<p class="mb-30">'.get_field('dienst_intro').'</p>';
									echo '<p><a href="'.get_permalink().'" class="meer-informatie animatie">Meer informatie <i class="far fa-angle-right"></i></a></p>';
								echo '</div>';
							echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            }
            wp_reset_query();
            ?>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
                    <?php the_field('home_inhoud');?>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90" id="uitgelicht-werk">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
                    <h2>Uitgelicht werk</h2>
                </div>
                
                <div class="owl-carousel carrousel-uitgelichtwerk">
					<?php
                    $uitgelichtWerk = get_field('home_uitgelicht_werk');		
                    foreach($uitgelichtWerk as $uitgelichteAfbeelding){
                        $afbeelding = $uitgelichteAfbeelding['home_uitgelichte_afbeelding'];
                        echo '<a href="'.$afbeelding['original_image']['url'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';
                            echo '<figure class="mb-0">';
                                echo '<img src="'.$afbeelding['url'].'" srcset="'.$afbeelding['sizes']['dkb-klein'].' 315w, '.$afbeelding['sizes']['dkb-medium'].' 485w, '.$afbeelding['sizes']['dkb-groot'].' 520w" sizes="100vw" class="img-fluid" alt="Maaike Hogebrug Fotografie" title="Maaike Hogebrug Fotografie" width="'.$afbeelding['width'].'" height="'.$afbeelding['height'].'" />';
                            echo '</figure>';
                        echo '</a>';
                    }
                    ;?>
                </div>
            </div>
        </section>
        
        <section class="container-fluid p-90" id="recensies">
            <div class="row">
                <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
                    <?php
                    $args = array('posts_per_page' => 1, 'post_type' => 'recensie', 'orderby' => 'rand');
                    $recensies = new WP_Query($args);
                    if($recensies->have_posts())
                    {
                        while($recensies->have_posts())
                        {
                            $recensies->the_post();
                            echo '<div class="blok animatie schaduw br d-md-flex recensie">';
                                echo '<div class="col col-xl-4 p-0 recensie-afbeelding" style="background-image:url('.get_field('recensie_foto').');"></div>';
                                echo '<div class="col col-xl-8 p-30 align-self-center">';
                                    echo '<header class="d-flex align-items-center mb-30">';
                                        echo '<h2 class="m-0">'.get_field('recensie_naam').'</h2>';
                                        echo '<span class="m-0 ml-auto pull-right align-self-center recensie-waardering">';
                                            if(get_field('recensie_waardering') == '4 sterren'){
                                                echo '<div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div>';
                                            };									
                                            if(get_field('recensie_waardering') == '4,5 sterren'){
                                                echo '<div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star-half" aria-hidden="true"></i></div>';
                                            };									
                                            if(get_field('recensie_waardering') == '5 sterren'){
                                                echo '<div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div><div><i class="far fa-star" aria-hidden="true"></i></div>';
                                            };									
                                        echo '</span>';
                                    echo '</header>';
                                    echo '<p class="mb-30">'.get_field('recensie_bericht').'</p>';
                                    echo '<p><a href="'.get_post_type_archive_link('recensie').'" class="meer-informatie animatie">Alle recensies <i class="far fa-angle-right"></i></a></p>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>