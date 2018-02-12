<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1>Recensies</h1>
                    <p>Hier komt nog een introtekst over de recensies.</p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mt--120 mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php
                    $args = array('posts_per_page' => -1, 'post_type' => 'recensie', 'order_by' => 'date');
                    $recensies = new WP_Query($args);
                    if($recensies->have_posts())
                    {
                        while($recensies->have_posts())
                        {
                            $recensies->the_post();
                            echo '<aside class="blok animatie schaduw br mb-30 d-md-flex recensie">';
                                echo '<div class="col col-xl-4 p-0 recensie-afbeelding" style="background-image:url('.get_field('recensie_foto').');"></div>';
                                echo '<div class="col col-xl-8 p-30 align-self-center">';
                                    echo '<header class="d-flex align-items-center mb-30">';
                                        echo '<h2 class="m-0">'.get_field('recensie_naam').'</h2>';
                                        echo '<span class="m-0 ml-auto pull-right align-self-center recensie-waardering">';
                                            if(get_field('recensie_waardering') == '4 sterren'){
                                                echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                            };									
                                            if(get_field('recensie_waardering') == '4,5 sterren'){
                                                echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i>';
                                            };									
                                            if(get_field('recensie_waardering') == '5 sterren'){
                                                echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                            };									
                                        echo '</span>';
                                    echo '</header>';
                                    echo '<p class="mb-0">'.get_field('recensie_bericht').'</p>';
                                echo '</div>';
                            echo '</aside>';
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