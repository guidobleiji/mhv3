<?php get_header();?>
<main>
	<article>
        <section class="container-fluid" id="intro">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 intro">
                    <h1 class="koptitel">Oh oh, pagina niet gevonden!</h1>
                    <p>Gebruik het menu hierboven om naar een andere pagina te navigeren.</p>
                </div>
            </div>
        </section>
        
        <section class="container-fluid mb-90">
            <div class="row">
                <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">           
                    <div class="row d-flex br p-30 schaduw animatie blok mt--120" id="opdehoogte">
                        <div class="col-xs-12 col-sm-4 text-center">
                            <a href="https://www.facebook.com/MaaikeHogebrugFotografie/" target="_blank"><i class="fab fa-4x fa-facebook-f" aria-hidden="true"></i>
                            <p>Like mij op Facebook</p></a>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <a href="https://www.instagram.com/maaike_hogebrug_fotografie/" target="_blank"><i class="fab fa-4x fa-instagram" aria-hidden="true"></i>
                            <p>Volg mij op Instagram</p></a>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <a href="<?php echo get_category_link(1);?>"><i class="far fa-4x fa-file-alt" aria-hidden="true"></i>
                            <p>Lees mijn blog</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>