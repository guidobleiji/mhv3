<?php
/**
Template Name: Dienst
**/
get_header();?>

<section class="container-fluid" id="intro">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel">Maaike Hogebrug Fotografie</h1></header>
            <article>
                <?php the_field('home_intro');?>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); ?>