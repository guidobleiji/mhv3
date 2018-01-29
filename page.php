<?php get_header(); ?>
<section class="container-fluid" id="intro">
    <div class="row">
        <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel"><?php the_field('pagina_titel');?></h1></header>
            <article>
                <p><?php the_field('pagina_intro');?></p>
            </article>
        </div>
    </div>
</section>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
            <?php the_field('pagina_inhoud');?>
        </div>
    </div>
</section>
<?php get_footer(); ?>