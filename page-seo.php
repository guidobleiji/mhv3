<?php
/**
Template Name: SEO
**/
get_header();?>

<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1 class="koptitel"><?php the_field('seo_titel');?></h1>
                    <p><?php the_field('seo_intro');?></p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-60" id="blogafbeelding">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <a href="<?php the_field('seo_afbeelding');?>" title="<?php the_field('blog_titel');?>" class="animatie schaduw br draai">
                        <figure class="mb-0">
                            <img src="<?php the_field('seo_afbeelding');?>" alt="<?php the_field('seo_titel');?>" title="<?php the_field('seo_titel');?>" class="img-fluid" />
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php the_field('seo_inhoud');?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>