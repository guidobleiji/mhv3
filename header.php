<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="https://www.maaikehogebrug.nl/favicon.ico" type="image/x-icon" />
<?php
if(is_singular('post')){
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="'.get_field('blog_titel').'">';
	echo '<meta property="og:image" content="'.get_field('blog_hoofdafbeelding').'">';
	echo '<meta property="og:description" content="'.get_field('blog_intro').'">';
}
if(is_singular('portfolio')){
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="'.get_the_title().'">';
	echo '<meta property="og:image" content="'.get_field('portfolio_hoofdafbeelding').'">';
	echo '<meta property="og:description" content="'.get_field('portfolio_inhoud').'">';
}
if(is_page(44)){
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="Boek een fotoshoot of verras met een cadeaubon!">';
	echo '<meta property="og:image" content="https://www.maaikehogebrug.nl/v2/wp-content/uploads/2016/10/milan.jpg">';
	echo '<meta property="og:description" content="'.get_field('portfolio_inhoud').'">';
}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="container-fluid fixed-top animatie" id="navigatie">	
    <nav class="navbar navbar-expand-md col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigatieLijst" aria-controls="navigatieLijst" aria-expanded="false">
            <span class="navbar-toggler-icon pull-right">
                <i class="fa fa-align-right" aria-hidden="true" style="font-size:24px;"></i>
                <span id="menu">Menu</span>
            </span>
        </button>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigatieLijst" aria-controls="navigatieLijst" aria-expanded="false">
            <span class="navbar-toggler-icon pull-right">
                <i class="fa fa-align-right" aria-hidden="true" style="font-size:24px;"></i>
                <span id="menu">Menu</span>
            </span>
        </button>     

        <div class="collapse navbar-collapse" id="navigatieLijst">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu',
                'menu_id'        => 'hoofdmenu',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
        </div>
    </nav>
</section>