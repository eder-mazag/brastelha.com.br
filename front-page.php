<?php get_header(); ?>

<main>


    <div class="container-fluid mt-3">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item bg-dark rounded active">
                    <picture>
                        <!-- <source media="(max-width: 799px)" srcset="elva-480w-close-portrait.jpg"> -->
                        <source media="(min-width: 800px)" srcset="<?php bloginfo('template_url') ?>/assets/img/banners/banner-1-img-17-23.png">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/banners/banner-1-img-17-23-mobile.png" class="d-block w-100 rounded" style="opacity: .6 !important;" alt="...">
                    </picture>
                    <!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/banner.png" class="d-block w-100" style="opacity: .7 !important;" alt="..."> -->
                    <div class="carousel-caption h-100 d-flex flex-column justify-content-center">
                        <div class="container text-center">
                            <h1 class="fw-bold mt-5 mb-4">BRASTELHA, FABRICANTE DE TELHAS E PISOS CIMENTÍCIOS</h1>
                            <p class="fs-4 d-none d-md-inline">Desde 1990 fabricando produtos de qualidade com preço justo.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item bg-dark rounded">
                    <picture>
                        <!-- <source media="(max-width: 799px)" srcset="elva-480w-close-portrait.jpg"> -->
                        <source media="(min-width: 800px)" srcset="<?php bloginfo('template_url') ?>/assets/img/banners/banner-2-img-10-23.png">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/banners/banner-2-img-10-23-mobile.png" class="d-block w-100 rounded" style="opacity: .6 !important;" alt="...">
                    </picture>
                    <!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/banner.png" class="d-block w-100" style="opacity: .7 !important;" alt="..."> -->
                    <div class="carousel-caption h-100 d-flex flex-column justify-content-center">
                        <div class="container text-center">
                            <h1 class="fw-bold mt-5 mb-4">BRASTELHA, FABRICANTE DE TELHAS E PISOS CIMENTÍCIOS</h1>
                            <p class="fs-4 d-none d-md-inline">Desde 1990 fabricando produtos de qualidade com preço justo.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item bg-dark rounded">
                    <picture>
                        <!-- <source media="(max-width: 799px)" srcset="elva-480w-close-portrait.jpg"> -->
                        <source media="(min-width: 800px)" srcset="<?php bloginfo('template_url') ?>/assets/img/banners/banner-3-img-1.png">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/banners/banner-3-img-1-mobile.png" class="d-block w-100 rounded" style="opacity: .6 !important;" alt="...">
                    </picture>
                    <!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/banner.png" class="d-block w-100" style="opacity: .7 !important;" alt="..."> -->
                    <div class="carousel-caption h-100 d-flex flex-column justify-content-center">
                        <div class="container text-center">
                            <h1 class="fw-bold mt-5 mb-4">BRASTELHA, FABRICANTE DE TELHAS E PISOS CIMENTÍCIOS</h1>
                            <p class="fs-4 d-none d-md-inline">Desde 1990 fabricando produtos de qualidade com preço justo.</p>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <section class="py-5 bg-white">
        <div class="container text-center text-md-start">
            <!-- <h2 class="card-title mb-4 fw-bold">SABIA QUE VOCÊ PODE TER UMA ECONOMIA <br> DE ATÉ 40% UTILIZANDO AS NOSSAS SOLUÇÕES?</h2> -->
            <!-- <p class="card-text col-md-10 mx-auto mb-5">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.</p> -->
            <div class="row g-4 mb-2">

                <div class="col-md-6">
                    <div class="card bg-light border-1" style="background-color: #22317b;">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/telha-1.png" class="card-img mb-5 mb-md-0" width="100%" height="100%" style="border: solid 24px #22317b !important;" alt="...">
                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-end text-center text-white p-0">
                            <div class="bg-dark px-4 pt-3 rounded-bottom" style="background-color: #22317b !important;">
                                <h3 class="card-title mb-0 fw-bold fs-2">TELHAS</h3>
                                <p class="mt-3">
                                    <a href="<?php echo esc_url(home_url('/produtos/telhas')); ?>" class="btn btn-light px-4 py-2 fw-bold">CONHECER MODELOS</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-1" style="background-color: #From its medieval origins to the digital era, learn e;">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/pisos/pisos.jpg" class="card-img mb-5 mb-md-0" width="100%" height="100%" style=" border: solid 24px #22317b !important;" alt="...">
                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-end text-center text-white p-0">
                            <div class="bg-dark px-4 pt-3 rounded-bottom" style="background-color: #22317b !important;">
                                <h3 class="card-title mb-0 fw-bold fs-2">PISOS</h3>
                                <p class="mt-3">
                                    <a href="<?php echo esc_url(home_url('/produtos/pisos')); ?>" class="btn btn-light px-4 py-2 fw-bold">CONHECER MODELOS</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="pt-2 pb-5 bg-white">
        <div class="container text-center">
            <h2 class="card-title mb-3 fw-bold" style="color: #22317b !important;">POR QUE ESCOLHER <br class="d-md-none"> NOSSOS PRODUTOS?</h2>
            <!-- <p class="card-text col-md-10 mx-auto mb-5">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.</p> -->
            <div class="row g-3 mb-2">
                <div class="col-md">
                    <div class="card bg-white border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <p class="fs-1" style="color: #f2c472 !important;"><i class="bi bi-check-circle-fill"></i></p>
                            <p class="card-title mb-0 fw-bold">Telhas e pisos em conformidade com as normas ABNT.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-white border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <p class="fs-1" style="color: #f2c472 !important;"><i class="bi bi-check-circle-fill"></i></p>
                            <p class="card-title mb-0 fw-bold">Opções de telhas e pisos em diversos tamanhos e cores.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-white border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <p class="fs-1" style="color: #f2c472 !important;"><i class="bi bi-check-circle-fill"></i></p>
                            <p class="card-title mb-0 fw-bold">Pisos em placas, aliando beleza e versatilidade à resistência do concreto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-white border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <p class="fs-1" style="color: #f2c472 !important;"><i class="bi bi-check-circle-fill"></i></p>
                            <p class="card-title mb-0 fw-bold">Produtos entregues com certificado de garantia.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md">
                    <div class="card bg-white border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <p class="fs-1" style="color: #f2c472 !important;"><i class="bi bi-check-circle-fill"></i></p>
                            <p class="card-title mb-0 fw-bold">Produto entregue com certificado de garantia de 20 anos.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <section class="pb-5 bg-white" id="testmonials">
        <div class="container text-center">
            <h2 class="card-title mb-5 fw-bold" style="color: #22317b !important;">VEJA O QUE NOSSOS CLIENTES DIZEM SOBRE NÓS</h2>
            <!-- <p class="card-text col-md-10 mx-auto mb-5">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.</p> -->
            <div class="row g-3 mb-2">
                <div class="col-md-4">
                    <div class="card bg-light border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <!-- <img src="assets/img/image-fill.svg" class="mx-auto" width="48" height="48" alt="..."> -->
                            <p class="mb-0 fs-2" style="color: rgba(0, 0, 0, .1);"><i class="bi bi-quote"></i></p>
                            <p class="card-text"><small>Sou cliente da Brastelha há mais de 5 anos e nossa parceria é duradoura e sustentável. Os produtos têm ótima resistência e excelente qualidade. Também destaco o atendimento, a agilidade nas entregas, a preocupação da empresa quando necessária uma assistência técnica.</small></p>
                            <p class="card-title mb-0 fw-bold">Ettore Martinelli - Madeireira Martinelli</p>
                            <p> (São José dos Campos -SP)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <!-- <img src="assets/img/image-fill.svg" class="mx-auto" width="48" height="48" alt="..."> -->
                            <p class="mb-0 fs-2" style="color: rgba(0, 0, 0, .1);"><i class="bi bi-quote"></i></p>
                            <p class="card-text"><small>Ótima parceria, qualidade das telhas e pontualidade na entrega. Show de bola!</small></p>
                            <p class="card-title mb-0 fw-bold">Alex Telhadista</p>
                            <p>(Guarulhos - SP)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light border-0 h-100 d-flex d-flex-column justify-content-center">
                        <div class="card-body">
                            <!-- <img src="assets/img/image-fill.svg" class="mx-auto" width="48" height="48" alt="..."> -->
                            <p class="mb-0 fs-2" style="color: rgba(0, 0, 0, .1);"><i class="bi bi-quote"></i></p>
                            <p class="card-text"><small>Sou construtor e utilizo as telhas da Brastelha em todas as minhas obras.</small></p>
                            <p class="card-title mb-0 fw-bold">Reginaldo Bento</p>
                            <p>(Zona Norte São Paulo)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="pt-0 pb-5">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-12">
                    <div class="card border-0" style="background-color: #22317b;">

                        <picture>
                            <source media="(min-width: 800px)" srcset="<?php // bloginfo('template_url') ?>/assets/img/banner-2.png">
                            <img src="<?php // bloginfo('template_url') ?>/assets/img/banner-mobile-2.png" class="card-img" width="100%" height="100%" style="opacity: 0.3 !important;" alt="...">
                        </picture>

                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-center p-md-5 text-center text-white">
                            <h3 class="card-title mb-2 fw-bold fs-1">Brastelha, fabricante de telhas e pisos cimentícios.</h3>
                            <p class="mt-5">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-light px-4 py-3 fw-bold animate__animated animate__pulse animate__infinite">SOLICITAR ORÇAMENTO AGORA</button>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


</main>

<?php get_footer(); ?>