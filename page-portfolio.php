<?php
/**
Template Name: Portfolio
**/
get_header();?>
<main>
    <article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1 class="mb-0"><?php the_field('portfolio_titel');?> fotografie</h1>
                </div>
            </div>
        </section>
        
        <section class="mb-90" id="portfolio">            
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">  
                    <div class="row" id="masonry">
                        <div class="grid-sizer col col-sm-6 col-md-4"></div>
                        <?php
                        $portfolio = get_field('portfolio');
                        
                        if($portfolio){
                            foreach($portfolio as $item){
                                echo '<div class="mas-item col col-sm-6 col-md-4">';
                                    echo '<a href="'.$item['sizes']['large'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';	
                                        echo '<figure class="mb-0">';
                                            echo '<img src="'.$item['sizes']['medium'].'" alt="'.get_field('portfolio_titel').' fotografie" title="'.get_field('portfolio_titel').' fotografie" class="img-fluid" />';
                                        echo '</figure>';
                                    echo '</a>';
                                echo '</div>';
                            }
                        };
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>