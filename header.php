<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="canonical" href="<?php the_permalink();?>">
<link rel="shortcut icon" href="https://www.maaikehogebrug.nl/favicon.ico" type="image/x-icon" />
<?php
if(is_singular('post')){
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="'.get_field('blog_titel').'">';
	echo '<meta property="og:image" content="'.get_field('blog_afbeelding').'">';
	echo '<meta property="og:image:alt" content="'.get_field('blog_titel').' - Maaike Hogebrug Fotografie">';
	echo '<meta property="og:image:width" content="1110">';
	echo '<meta property="og:image:height" content="747">';
	echo '<meta property="og:description" content="'.get_field('blog_intro').'">';
}
if(is_singular('fotografie')){
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="'.get_field('dienst_titel').' fotografie - Maaike Hogebrug Fotografie">';
	echo '<meta property="og:image" content="'.get_field('dienst_afbeelding').'">';
	echo '<meta property="og:image:alt" content="'.get_field('dienst_titel').' fotografie - Maaike Hogebrug Fotografie">';
	echo '<meta property="og:image:width" content="767">';
	echo '<meta property="og:image:height" content="513">';
	echo '<meta property="og:description" content="'.get_field('dienst_intro').'">';
}
if(17 == $post->post_parent){
	$portfolio = get_field('portfolio');
	echo '<meta property="fb:app_id" content="152355671837018">';
	echo '<meta property="og:url" content="'.get_permalink().'">';
	echo '<meta property="og:type" content="article">';
	echo '<meta property="og:title" content="'.get_field('portfolio_titel').' fotografie - Maaike Hogebrug Fotografie">';
	echo '<meta property="og:image" content="'.$portfolio[0]['url'].'">';
	echo '<meta property="og:image:alt" content="'.get_field('portfolio_titel').' fotografie - Maaike Hogebrug Fotografie">';
	echo '<meta property="og:description" content="Bekijk alle foto\'s op mijn website!">';
}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid fixed-top animatie" id="navigatie">
    <nav class="navbar navbar-expand-md navbar-fixed-top d-flex justify-content-center p-0">
        
        <div id="social" class="d-flex align-items-center mr-auto d-md-none">
        	<i class="fa fa-fw fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-fw fa-phone" aria-hidden="true"></i>
        </div>
		
		<svg class="navbar-brand logo-mob animatie d-md-none" xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73.2 72.3"><path d="M31.2 64.7C20.3 49 5.7 31.9 11.2 11.6c-2.1 1.2-4.1 2.3-6.2 3.5 12 2.4 18.3 8.7 22.3 20 1.5 4.3 8.9 5.5 9.8 0 1.2-7.4 4.8-13.4 10.1-18.8 7-7.2 14.7-8.8 15.2 3.3 0.4 9.7-11.2 19.1-17.4 25.1C38.7 50.8 31.9 56.4 26.2 63c-4.4 5.2 3.1 12.7 7.5 7.5 13.9-16.5 51.7-38.7 35.6-65 -5.2-8.4-16-5.7-22.9-1.5 -9.8 5.9-17.3 17.3-19 28.5 3.3 0 6.5 0 9.8 0C31.9 17.8 23.3 8.5 7.7 5.4 5 4.9 2.3 6.1 1.5 8.9c-6.4 23.8 9 42.1 22.5 60C27.1 73.1 34.3 69.2 31.2 64.7L31.2 64.7z" /></svg>
        

        <div id="burger" class="d-flex align-items-center ml-auto d-md-none">
        	<i class="fa fa-align-right" aria-hidden="true" style="font-size:24px;" data-toggle="offcanvas"></i>
		</div>
    
        <div class="navbar-collapse offcanvas-collapse">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu-links',
                'menu_id'        => 'hoofdmenu-links',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav ml-auto navigatieLijst',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
            
            <svg class="navbar-brand logo-desk animatie d-none d-md-block" xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73.2 72.3"><path d="M31.2 64.7C20.3 49 5.7 31.9 11.2 11.6c-2.1 1.2-4.1 2.3-6.2 3.5 12 2.4 18.3 8.7 22.3 20 1.5 4.3 8.9 5.5 9.8 0 1.2-7.4 4.8-13.4 10.1-18.8 7-7.2 14.7-8.8 15.2 3.3 0.4 9.7-11.2 19.1-17.4 25.1C38.7 50.8 31.9 56.4 26.2 63c-4.4 5.2 3.1 12.7 7.5 7.5 13.9-16.5 51.7-38.7 35.6-65 -5.2-8.4-16-5.7-22.9-1.5 -9.8 5.9-17.3 17.3-19 28.5 3.3 0 6.5 0 9.8 0C31.9 17.8 23.3 8.5 7.7 5.4 5 4.9 2.3 6.1 1.5 8.9c-6.4 23.8 9 42.1 22.5 60C27.1 73.1 34.3 69.2 31.2 64.7L31.2 64.7z" /></svg>
            
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu-rechts',
                'menu_id'        => 'hoofdmenu-rechts',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav mr-auto navigatieLijst',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
        </div>
    </nav>
</div>