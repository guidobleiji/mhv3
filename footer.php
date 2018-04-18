<footer class="container-fluid p-90">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4 footer-direct">
                	<nav class="mb-30">
                        <h2>Direct naar</h2>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'hoofdmenu-footer',
                            'menu_id'        => 'hoofdmenu-footer',
                            'container'      => false,
                            'depth'          => 1
                        ) );
                        ?>
                    </nav>
                    
                    <nav>
                        <h2>Meer informatie</h2>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'seo-footer',
                            'menu_id'        => 'seo-footer',
                            'container'      => false,
                            'depth'          => 1
                        ) );
                        ?>
                    </nav>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 footer-fotografie">
                	<nav class="mb-30">
                        <h2>Fotografie</h2>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'diensten-footer',
                            'menu_id'        => 'diensten-footer',
                            'container'      => false,
                            'depth'          => 1
                        ) );
                        ?>
                    </nav>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 footer-maaike">
                    <section class="mb-30" itemscope="" itemtype="http://schema.org/ProfessionalService">
                        <h2 itemprop="name">Maaike Hogebrug Fotografie</h2>
                        <img src="https://www.maaikehogebrug.nl/v3/wp-content/uploads/2018/01/maaikeeee_768x768px.png" itemprop="image" alt="Maaike Hogebrug" id="img-maaike" class="d-none" />
                        
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <i class="far fa-fw fa-map-marker-alt"></i> <span itemprop="streetAddress">Javastraat 75</span><br />
                            <i class="far fa-fw fa-map" aria-hidden="true"></i> <span itemprop="postalCode">7556SE</span>, <span itemprop="addressLocality">Hengelo</span><span class="d-none"> (<span itemprop="addressRegion">Overijssel</span>)</span>                                             
                        </div>
                        <i class="far fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:0614213441" itemprop="telephone" content="+31614213441">06 14 21 34 41</a><br />
                        <i class="far fa-fw fa-star" aria-hidden="true"></i> <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"><span itemprop="ratingValue">4.9</span> / 5 (<span itemprop="reviewCount">18</span> reviews)<br />
                        <i class="far fa-fw fa-pencil" aria-hidden="true"></i> <a class="ratings" href="https://www.google.nl/search?q=Maaike+Hogebrug+Fotografie,+Javastraat+75,+7556+SE+Hengelo&ludocid=14946974240075225127#lrd=0x47b811fba04121c7:0xcf6e51e0fe991827,3" target="_blank">Schrijf een review</a></span><br />
                        <span itemprop="priceRange" class="d-none">€75 - €1250</span>                       
                    </section>
                    
                    <section>
                    	<a href="https://www.facebook.com/MaaikeHogebrugFotografie/" target="_blank"><i class="fab fa-fw fa-facebook-f" aria-hidden="true"></i> Facebook</a><br />
                        <a href="https://www.instagram.com/maaike_hogebrug_fotografie/" target="_blank"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Instagram</a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="d-flex d-md-none align-items-stretch" id="mob-balk">
    <a class="col" data-toggle="offcanvas">
		<span><i class="far fa-align-left"></i>
        Menu</span>
    </a>
    <a href="<?php echo the_permalink(84);?>" class="col">
    	<span><i class="far fa-envelope"></i>
        Mail</span>
    </a>
    <a href="/" class="col">
    	<svg class="navbar-brand logo-mob animatie d-md-none" xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73.2 72.3"><path d="M31.2 64.7C20.3 49 5.7 31.9 11.2 11.6c-2.1 1.2-4.1 2.3-6.2 3.5 12 2.4 18.3 8.7 22.3 20 1.5 4.3 8.9 5.5 9.8 0 1.2-7.4 4.8-13.4 10.1-18.8 7-7.2 14.7-8.8 15.2 3.3 0.4 9.7-11.2 19.1-17.4 25.1C38.7 50.8 31.9 56.4 26.2 63c-4.4 5.2 3.1 12.7 7.5 7.5 13.9-16.5 51.7-38.7 35.6-65 -5.2-8.4-16-5.7-22.9-1.5 -9.8 5.9-17.3 17.3-19 28.5 3.3 0 6.5 0 9.8 0C31.9 17.8 23.3 8.5 7.7 5.4 5 4.9 2.3 6.1 1.5 8.9c-6.4 23.8 9 42.1 22.5 60C27.1 73.1 34.3 69.2 31.2 64.7L31.2 64.7z" /></svg>
    </a>
    <a href="tel:0614213441" class="col">
    	<span><i class="far fa-phone"></i>
        Bel</span>
    </a>
    <a href="intent://send/+31614213441#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end" class="col">
    	<span><i class="fab fa-whatsapp"></i>
        App</span>
    </a>
</div>

<?php wp_footer(); ?>
</body>