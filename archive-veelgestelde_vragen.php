<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1>Veelgestelde vragen</h1>
                    <p>Hier komt nog een introtekst over de veelgestelde vragen.</p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90" id="faq">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php
                    $args = array('posts_per_page' => -1, 'post_type' => 'veelgestelde_vragen');
                    $vragen = new WP_Query($args);
                    if($vragen->have_posts())
                    {
                        echo '<section class="blok animatie schaduw br vraag">';
                            echo '<ul class="mb-0">';
                            while($vragen->have_posts())
                            {
                                $vragen->the_post();
                                echo '<li><strong class="d-flex align-items-center">'.get_field('faq_vraag').' <i class="fa fa-angle-down ml-auto"></i></strong><div>'.get_field('faq_antwoord').'</div></li>';
                            }
                            echo '</ul>';
                        echo '</section>';
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>