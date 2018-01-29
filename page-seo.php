<?php
/**
Template Name: SEO
**/
get_header();?>

<section class="container-fluid" id="intro">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel"><?php the_field('seo_titel');?></h1></header>
            <article>
                <p><?php the_field('seo_intro');?></p>
            </article>
        </div>
    </div>
</section>

<section class="container-fluid mb-90" id="doorkiesblokken"> 
    <div class="row">
    	<div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6"> 
        	<div class="row d-flex">
                <div id="dienstblokken">
                    <div id="watkrijgje" class=" blok animatie schaduw br">
                        <div class="p-30">
                            <header>
                                <h1 class="mb-0">De fotoshoot</h1>
                            </header>
                            <ul class="mt-30 mb-0 opties">
                                <?php
                                $opties = get_field('seo_wat_krijg_je_ervoor');
                                foreach ($opties as $optie){
                                    echo '<li><i class="fa fa-fw '.$optie['seo_icoon'].'" aria-hidden="true"></i> '.$optie['seo_optie'].'</li>';	
                                }					
                                ;?>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="prijsboek">
                        <div id="prijsblok" class="blok animatie schaduw br">
                            <span>€<?php the_field('seo_vanaf');?></span>
                        </div>
                        <a href="<?php the_permalink(84);?>" id="boeken" class="animatie schaduw br button-oranje">
                            Neem vrijblijvend contact op
                        </a>
                    </div>
                </div>                
            </div>
    	</div>
    </div>
</section>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <?php the_field('seo_inhoud');?>
        </div>
    </div>
</section>
    
<section class="container-fluid mb-90">
    <div class="row">    
		<?php
        $uitgelichtWerk = get_field('seo_uitgelicht_werk');		
        foreach($uitgelichtWerk as $uitgelichteAfbeelding){
			$afbeelding = $uitgelichteAfbeelding['seo_uitgelichte_afbeelding'];
            echo '<div class="col-xs-12 col-sm-4">';
                echo '<a href="'.$afbeelding['original_image']['url'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';
                    echo '<figure class="mb-0">';
                        echo '<img src="'.$afbeelding['url'].'" class="img-fluid" alt="'.get_field('seo_titel').' fotografie" width="'.$afbeelding['width'].'" height="'.$afbeelding['height'].'" />';
                    echo '</figure>';
                echo '</a>';
            echo '</div>';
        }
        ;?>
    </div>
</section>

<?php get_footer(); ?>