<?php get_header(); ?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1>Blog</h1>
                    <p>Hier komt nog een introtekst over de blog.</p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php
                    $args = array('posts_per_page' => -1, 'post_type' => 'post', 'order_by' => 'date');
                    $berichten = new WP_Query($args);
                    if($berichten->have_posts())
                    {
                        while($berichten->have_posts())
                        {
                            $berichten->the_post();
                            echo '<aside class="blok animatie schaduw br d-md-flex bericht mb-30">';
                                echo '<div class="col col-xl-4 p-0 recensie-afbeelding" style="background-image:url('.get_field('blog_afbeelding').');"></div>';
                                echo '<div class="col col-xl-8 p-30 align-self-center">';
                                    echo '<header class="d-flex align-items-center mb-30">';
                                        echo '<h2 class="m-0">'.get_field('blog_titel').'</h2>';
                                        echo '<span class="m-0 ml-auto pull-right align-self-center recensie-waardering">';
                                            echo the_date();							
                                        echo '</span>';
                                    echo '</header>';
                                    echo '<p class="mb-30">'.get_field('blog_intro').'</p>';
                                    echo '<p><a href="'.get_permalink().'" class="meer-informatie animatie">Lees verder</a></p>';
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