<?php get_header(); ?>

<section class="container-fluid" id="intro">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel"><?php the_field('dienst_titel');?> Fotografie</h1></header>
            <article>
                <?php the_field('dienst_inhoud');?>
            </article>
        </div>
    </div>
</section>

<section class="container-fluid mb-90" id="doorkiesblokken"> 
    <div class="row">
    	<div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6"> 
        	<div class="row d-flex">
            
                <div class="col col-sm-6 d-flex align-self-stretch">
                    <article class="blok animatie schaduw br">
                        <div class="p-30">
                            <header>
                                <h1 class="mb-0">Wat krijg je ervoor?</h1>
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
                    </article>
                </div>
                
                <div class="col col-sm-6 d-flex align-self-stretch">
                    <article class="blok d-flex prijsblok animatie schaduw br">
                        <div class="p-30">
                            <p class="vanaf">€<?php the_field('dienst_vanaf');?></p>
                        </div>
                    </article>
                </div>
                
            </div>
    	</div>
    </div>
</section>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
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