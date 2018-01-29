<?php get_header(); ?>

<section class="container-fluid" id="intro" style="background-image:url(<?php the_field('header');?>;">
    <div class="row">
        <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel"><?php the_field('dienst_titel');?> fotografie</h1></header>
            <article>
                <?php the_field('dienst_inhoud');?>
            </article>
        </div>
    </div>
</section>

<?php
$pakketten = get_field('pakketten');
if($pakketten){
	?>
<section class="container-fluid mb-90" id="pakketten">
    <div class="owl-carousel carrousel-pakketten">
        <?php
        $pakketten = get_field('pakketten');
        $dienstTitel = sanitize_title(get_field('dienst_titel'));
        foreach($pakketten as $pakket){				
            $pakketTitel = sanitize_title($pakket['pakket_titel']);
			echo '<div class="blok animatie schaduw br pakket p-t-30">';
				echo '<header><h2>'.$pakket['pakket_titel'].'</h2></header>';
				echo '<span class="pakket-prijs mb-30 d-block">&euro;'.$pakket['pakket_prijs'].'</span>';
				
				$wat = $pakket['pakket_wat_krijg_je_ervoor'];
				echo '<ul class="mb-30">';
				foreach($wat as $inclusief){
					echo '<li>'.$inclusief['pakket_inclusief'].'</li>';	
				}
				echo '</ul>';
				echo '<p><a href="'.get_permalink(255).'?soort='.$dienstTitel.'&pakket='.$pakketTitel.'" class="meer-informatie animatie">Boek deze shoot</a></p>';
			echo '</div>';
        }
        ;?>
    </div>
</section>
    <?php
}
else{
	?>
<section class="container-fluid mb-90" id="doorkiesblokken" style="display:none;"> 
    <div class="row">
    	<div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6"> 
        	<div class="row d-flex">
                <div id="dienstblokken">
                    <div id="watkrijgje" class="blok animatie schaduw br">
                        <div class="p-30">
                            <header>
                                <h1 class="mb-0">De fotoshoot</h1>
                            </header>
                            <ul class="mt-30 mb-0 opties">
                                <?php
                                $opties = get_field('dienst_wat_krijg_je_ervoor');
                                foreach ($opties as $optie){
                                    echo '<li><i class="fa fa-fw '.$optie['dienst_icoon'].'" aria-hidden="true"></i> '.$optie['dienst_optie'].'</li>';	
                                }					
                                ;?>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="prijsboek">
                        <div id="prijsblok" class="blok animatie schaduw br">
                            <span>v.a. €<?php the_field('dienst_vanaf');?></span>
                        </div>
                        <a href="#" id="boeken" class="animatie schaduw br button-oranje">
                            Boek deze shoot
                        </a>
                    </div>
                </div>                
            </div>
    	</div>
    </div>
</section>
    <?php
}
;?>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <h2>Extra informatie</h2>
            
            <h3>Voor de shoot</h3>            
            <?php the_field('dienst_voor');?>
            
            <h3>Tijdens de shoot</h3>            
            <?php the_field('dienst_tijdens');?>
            
            <h3>Na de shoot</h3>            
            <?php the_field('dienst_na');?>
        </div>
    </div>
</section>
    
<section class="container-fluid mb-90">
    <div class="row">    
		<?php
        $uitgelichtWerk = get_field('dienst_uitgelicht_werk');		
        foreach($uitgelichtWerk as $uitgelichteAfbeelding){
			$afbeelding = $uitgelichteAfbeelding['dienst_uitgelichte_afbeelding'];
            echo '<div class="col-xs-12 col-sm-4">';
                echo '<a href="'.$afbeelding['original_image']['url'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';
                    echo '<figure class="mb-0">';
                        echo '<img src="'.$afbeelding['url'].'" class="img-fluid" alt="'.get_field('dienst_titel').' fotografie" width="'.$afbeelding['width'].'" height="'.$afbeelding['height'].'" />';
                    echo '</figure>';
                echo '</a>';
            echo '</div>';
        }
        ;?>
    </div>
</section>

<?php get_footer(); ?>