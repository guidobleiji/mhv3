<?php
/**
Template Name: Home
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

<section class="container-fluid mb-90" id="doorkiesblokken"> 
<?php
$args = array('posts_per_page' => -1, 'post_type' => 'fotografie');
$diensten = new WP_Query($args);
if($diensten->have_posts())
{
	echo '<div class="row">';
    	echo '<div class="owl-carousel carrousel-doorkiesblokken">';
			while($diensten->have_posts())
			{
				$diensten->the_post();
				echo '<article>';
					echo '<div class="blok animatie schaduw br draai">';
						echo '<figure>';
							echo '<img src="'.get_field('dienst_afbeelding').'" class="img-fluid" />';
						echo '</figure>';
						echo '<div class="p-30">';
							echo '<header>';
								echo '<h1 class="mb-0">'.get_field('dienst_titel').'</h1>';
								echo '<span>Vanaf €'.get_field('dienst_vanaf').'</span>';
							echo '</header>';
							echo '<p class="mb-30">'.get_field('dienst_intro').'</p>';
							echo '<p><a href="'.get_permalink().'" class="meer-informatie animatie">Meer informatie</a></p>';
						echo '</div>';
					echo '</div>';
				echo '</article>';
			}
		echo '</div>';
	echo '</div>';
}
wp_reset_query();
?>
</section>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <?php the_field('home_inhoud');?>
        </div>
    </div>
</section>

<section class="container-fluid mb-90">
    <div class="row">
        <div class="col col-sm-4">
            <a href="https://www.maaikehogebrug.nl/" class="animatie schaduw br draai groenoverlay portfolio-item">
                <figure class="mb-0">
                    <img src="https://www.maaikehogebrug.nl/wp-content/uploads/2016/10/MH_Milan-1_sp-660x440.jpg" class="img-fluid" />
                </figure>
            </a>
        </div>
        <div class="col col-sm-4">
            <a href="https://www.maaikehogebrug.nl/" class="animatie schaduw br draai groenoverlay portfolio-item">
                <figure class="mb-0">
                    <img src="https://www.maaikehogebrug.nl/wp-content/uploads/2016/10/MH_Milan-1_sp-660x440.jpg" class="img-fluid" />
                </figure>
            </a>
        </div>
        <div class="col col-sm-4">
            <a href="https://www.maaikehogebrug.nl/" class="animatie schaduw br draai groenoverlay portfolio-item">
                <figure class="mb-0">
                    <img src="https://www.maaikehogebrug.nl/wp-content/uploads/2016/10/MH_Milan-1_sp-660x440.jpg" class="img-fluid" />
                </figure>
            </a>
        </div>
    </div>
</section>

<section class="container-fluid p-90" id="recensies">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <aside class="blok animatie schaduw br d-md-flex align-items-stretch recensie">
                <div class="col col-xl-4 p-0 recensie-afbeelding" style="background-image:url(https://www.maaikehogebrug.nl/wp-content/uploads/2017/03/MH_Cakesmash_Philip-5_475x317_acf_cropped.jpg);">
                	<figure class="mb-0 hidden-sm-up">
                        <img src="https://www.maaikehogebrug.nl/wp-content/uploads/2017/03/MH_Cakesmash_Philip-5_475x317_acf_cropped.jpg" class="img-fluid" />
                    </figure>
                </div>
                <div class="col col-xl-8 p-30 align-self-center">
                    <header class="d-flex align-items-center mb-30">
                        <h1 class="m-0">Ellen Bolt</h1>
                        <span class="m-0 ml-auto pull-right align-self-center recensie-waardering">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </header>
                    <p>Wauw, wat een mooie foto's heeft Maaike gemaakt! Ze heeft de shoot bij ons thuis gedaan wat erg prettig was. Eigen inbreng was zeer welkom waardoor de foto's heel persoonlijk geworden zijn.</p>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>