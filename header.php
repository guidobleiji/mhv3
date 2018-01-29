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
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="container-fluid fixed-top animatie" id="navigatie">
    <nav class="navbar navbar-expand-md navbar-fixed-top d-flex justify-content-center p-0">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon pull-right">
                <i class="fa fa-align-right" aria-hidden="true" style="font-size:24px;"></i>
                <span id="menu">Menu</span>
            </span>
        </button>
    
        <div class="navbar-collapse collapse">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu-links',
                'menu_id'        => 'hoofdmenu-links',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'nav navbar-nav ml-auto navigatieLijst',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
            
            <a class="navbar-brand" href="#">
                <img src="https://www.maaikehogebrug.nl/v3/wp-content/themes/mh/images/maaike-hogebrug-fotografie.png" width="30" height="30" alt="Maaike Hogebrug Fotografie">
            </a>
            
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu-rechts',
                'menu_id'        => 'hoofdmenu-rechts',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'nav navbar-nav mr-auto navigatieLijst',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
        </div>
    </nav>
</section>