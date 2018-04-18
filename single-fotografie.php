<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro" style="background-image:url(<?php the_field('header');?>);">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1><?php the_field('dienst_titel');?> fotografie</h1>
                    <?php the_field('dienst_inhoud');?>
                </div>
            </div>
        </section>
        
        <?php
        $pakketten = get_field('pakketten');
        if($pakketten){
        ?>
            <section class="container-fluid mb-90" id="pakketten">
                <div class="row">
                    <div class="owl-carousel carrousel-pakketten">
                        <?php
                        $pakketten = get_field('pakketten');
                        $dienstTitel = sanitize_title(get_field('dienst_titel'));
                        foreach($pakketten as $pakket){				
                            $pakketTitel = sanitize_title($pakket['pakket_titel']);
                            echo '<div class="blok animatie schaduw br pakket p-t-30">';
                                echo '<h2>'.$pakket['pakket_titel'].'</h2>';
                                echo '<span class="pakket-prijs mb-30 d-block">&euro;'.$pakket['pakket_prijs'].'</span>';
                                
                                $wat = $pakket['pakket_wat_krijg_je_ervoor'];
                                echo '<ul class="mb-30">';
                                foreach($wat as $inclusief){
                                    echo '<li>'.$inclusief['pakket_inclusief'].'</li>';	
                                }
                                echo '</ul>';
                                echo '<p class="mb-30"><a href="'.get_permalink(255).'?soort='.$dienstTitel.'&pakket='.$pakketTitel.'" class="meer-informatie animatie">Boek deze shoot <i class="far fa-angle-right"></i></a></p>';
								echo '<p><a href="#extra-informatie" class="extra-informatie">Extra informatie <i class="far fa-angle-down"></i></a></p>';
                            echo '</div>';
                        }
                        ;?>
                    </div>
                </div>
            </section>
        <?php
        }
        ;?>
        
        <section class="container-fluid mb-90" id="extra-informatie">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
                    <header><h2>Extra informatie over een <span class="text-lowercase"><?php the_field('dienst_titel');?></span> fotoshoot</h2></header>
                    
                    <?php
                    if(get_field('dienst_kleding')){
						echo '<h3><i class="far fa-diagnoses"></i> Kleding</h3>';
                    	echo ''.get_field('dienst_kleding').'';
					}
					
					if(get_field('dienst_voor')){
						echo '<h3><i class="far fa-fw fa-phone"></i> Voor de shoot</h3>';
                    	echo ''.get_field('dienst_voor').'';
					}
					
					if(get_field('dienst_tijdens')){
						echo '<h3><i class="far fa-fw fa-camera-retro"></i>  Tijdens de shoot</h3>';
                    	echo ''.get_field('dienst_tijdens').'';
					}
					
					if(get_field('dienst_na')){
						echo '<h3><i class="far fa-fw fa-images"></i>  Na de shoot</h3>';
                    	echo ''.get_field('dienst_na').'';
					}
					;?>
                    
                    <?php
					$dienstTitel = sanitize_title(get_field('dienst_titel'));
					echo '<p class="mb-0"><a href="'.get_permalink(255).'?soort='.$dienstTitel.'" class="meer-informatie animatie">Boek een '.$dienstTitel.' shoot <i class="far fa-angle-right"></i></a></p>';
					;?>
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
                    $uitgelichtWerk = get_field('dienst_uitgelicht_werk');		
                    foreach($uitgelichtWerk as $uitgelichteAfbeelding){
                        $afbeelding = $uitgelichteAfbeelding['dienst_uitgelichte_afbeelding'];
                        echo '<a href="'.$afbeelding['original_image']['url'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';
                            echo '<figure class="mb-0">';
                                echo '<img src="'.$afbeelding['url'].'" class="img-fluid" alt="Maaike Hogebrug Fotografie" title="Maaike Hogebrug Fotografie" width="'.$afbeelding['width'].'" height="'.$afbeelding['height'].'" />';
                            echo '</figure>';
                        echo '</a>';
                    }
                    ;?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>