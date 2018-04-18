<?php
/**
Template Name: Zoeken
**/
global $query_string;
$search_query = wp_parse_str( $query_string );
$search = new WP_Query( $search_query );
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
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <?php get_search_form(); ?>
					
					<?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
					?>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>