<?php
/**
Template Name: Over mij
**/
get_header();?>

<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1 class="koptitel"><?php the_field('over_titel');?></h1>
                    <p><?php the_field('over_intro');?></p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-60" id="blogafbeelding">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <a href="<?php the_field('over_afbeelding');?>" title="<?php the_field('Maaike Hogebrug');?>" class="animatie schaduw br draai">
                        <figure class="mb-0">
                            <img src="<?php the_field('over_afbeelding');?>" alt="<?php the_field('Maaike Hogebrug');?>" title="Maaike Hogebrug" class="img-fluid" />
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php the_field('over_inhoud');?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>