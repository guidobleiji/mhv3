<footer class="container-fluid p-90">
    <div class="row">
        <div class="col offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4">
                	<nav>
                        <header><h2>Direct naar</h2></header>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'hoofdmenu-footer',
                            'menu_id'        => 'hoofdmenu-footer',
                            'container'      => false,
                            'depth'          => 1
                        ) );
                        ?>
                    </nav>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                	<nav>
                        <header><h2>Fotografie</h2></header>
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
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                	<section>
                        <span itemscope="" itemtype="http://schema.org/ProfessionalService">
                            <header><h3 itemprop="name">Maaike Hogebrug Fotografie</h3></header>
                            <img src="https://www.maaikehogebrug.nl/v3/wp-content/uploads/2018/01/maaikeeee_768x768px.png" itemprop="image" alt="Maaike Hogebrug" id="img-maaike" class="d-none" />
                            
                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <i class="fa fa-fw fa-map-marker" aria-hidden="true"></i> <span itemprop="streetAddress">Javastraat 75</span><br />
                                <i class="fa fa-fw fa-map" aria-hidden="true"></i> <span itemprop="postalCode">7556SE</span>, <span itemprop="addressLocality">Hengelo</span><span class="d-none"> (<span itemprop="addressRegion">Overijssel</span>)</span>                                             
                            </div>
                            <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <span href="tel:0614213441" itemprop="telephone">06 14 21 34 41</span><br />
                            <i class="fa fa-fw fa-star" aria-hidden="true"></i> <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"><span itemprop="ratingValue">4.9</span> / 5 (<span itemprop="reviewCount">16</span> reviews)<br />
                            <i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i> <a class="ratings" href="https://search.google.com/local/writereview?placeid=ChIJxyFBoPsRuEcRJxiZ_uBRbs8" target="_blank">Schrijf een review</a></span><br />
                            <span itemprop="priceRange" class="d-none">€75 - €1250</span>                       
                        </span>
                    </section>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>