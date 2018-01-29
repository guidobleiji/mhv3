<?php
/**
Template Name: Portfolio
**/
get_header();?>

<section class="container-fluid" id="intro">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
            <header><h1 class="koptitel mb-0"><?php the_field('portfolio_titel');?> fotografie</h1></header>
        </div>
    </div>
</section>

<section class="mb-90" id="portfolio">
	<?php
    $portfolio = get_field('portfolio');
    
    if($portfolio){
        foreach($portfolio as $item){
            echo '<div class="mas-item">';
                echo '<a href="'.$item['sizes']['large'].'" class="animatie schaduw br draai groenoverlay portfolio-item">';	
                    echo '<figure class="mb-0">';
                        echo '<img src="'.$item['sizes']['medium'].'" class="img-fluid" />';
                    echo '</figure>';
                echo '</a>';
            echo '</div>';
        }
    };
    ?>
</section>

<?php get_footer(); ?>