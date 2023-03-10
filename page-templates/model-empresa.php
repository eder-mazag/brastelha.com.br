<?php /* Template Name: Empresa */ ?>

<?php get_header(); ?>

<main>


    <section class="pt-4 pb-5">
        <div class="container text-center text-md-start">
            <!-- <h2 class="card-title mb-4 fw-bold">CONHEÇA NOSSAS SOLUÇÕES <br class="d-none d-md-inline"> EM AQUECIMENTO SOLAR</h2> -->
            <!-- <p class="card-text col-md-10 mx-auto mb-5">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.</p> -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card border-0 bg-dark">

                        <picture>
                            <!--<source media="(max-width: 799px)" srcset="elva-480w-close-portrait.jpg">-->
                            <source media="(min-width: 800px)" srcset="<?php bloginfo('template_url') ?>/assets/img/banners/banner-telhas-img-20-23.png">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/banners/banner-telhas-img-20-23-mobile.png" class="card-img" width="100%" height="100%" style="opacity: 0.3 !important;" alt="...">
                        </picture>

                        <!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/panels.png" class="card-img" width="100%" height="100%" alt="..."> -->
                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-center p-md-5 text-center text-white">
                            <h1 class="card-title mb-2 fw-bold fs-1"><?php the_title(); ?></h1>
                            <!-- <p class="mb-0 col-md-7 mx-auto"><?php // the_content(); ?></p> -->
                            <p class="mt-5 d-none d-md-block">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-light px-4 py-3 fw-bold animate__animated animate__pulse animate__infinite">SOLICITAR ORÇAMENTO AGORA</button>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="pt-0 pb-5 bg-white border-bottom">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-6">
                    <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center pt-0 pt-md-0 pb-5 pb-md-0">
                        <h2 class="card-title mb-3 fw-bold">Nossa História</h2>
                        <p class="card-text col-md-10">A BRASTELHA iniciou suas atividades em 1990. A fábrica e os departamentos administrativo e comercial localizam-se no município de Itaquaquecetuba a 40 km de São Paulo e próximo a Via Dutra, localização estratégica para entregas em todo o país.</p>
                        <p class="card-text col-md-10">A empresa possui uma rede de revendedores e representantes nas principais cidades do Estado de São Paulo, atendendo também todos os outros estados.</p>
                        <p class="card-text col-md-10">A BRASTELHA preza como filosofia, fabricar e atender o mercado de telhas de cimento/concreto com produtos de alta performance e confiabilidade garantindo ao consumidor telhas que atendem e superam a Norma Brasileira.</p>
                        <!-- <div class="mt-2">
                            <button class="btn btn-light px-4 py-3 fw-bold" type="button">BAIXAR FICHA TÉCNICA</button>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/fabrica.jpeg" width="100%" height="100%" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-bottom">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-6">
                    <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center pt-0 pt-md-0 pb-5 pb-md-0">
                        <h2 class="card-title mb-3 fw-bold">Garantia Extra</h2>
                        <p class="card-text col-md-10">Todos os lotes de produção são testados conforme a Norma ABNT 13.858-2. Cada telha recebe um carimbo com o número do lote, possibilitando a qualquer tempo rastrear os relatórios de qualidade, assegurando assim o compromisso da BRASTELHA em fabricar produtos de alta performance.
</p>
                        <!-- <div class="mt-2">
                            <button class="btn btn-light px-4 py-3 fw-bold" type="button">BAIXAR FICHA TÉCNICA</button>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/garantia.png" width="100%" height="100%" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-bottom">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-6">
                    <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center pt-0 pt-md-0 pb-5 pb-md-0">
                        <h2 class="card-title mb-3 fw-bold">Qualidade</h2>
                        <p class="card-text col-md-10">A BRASTELHA conta com um moderno laboratório, onde são feitos testes dimensionais, de resistência, absorção e permeabilidade, no intuito de garantir ao consumidor telhas em conformidade com a Norma ABNT – NBR 13858-2.</p>
                        <p class="card-text col-md-10 fw-semibold">Política de qualidade</p>
                        <p class="card-text col-md-10">Aprimorar continuamente o processo produtivo e nossos produtos visando à satisfação de nossos clientes, colaboradores e fornecedores. Atualmente a BRASTELHA testa os produtos no laboratório Falcão Bauer.</p>
                        <!-- <div class="mt-2">
                            <button class="btn btn-light px-4 py-3 fw-bold" type="button">BAIXAR FICHA TÉCNICA</button>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card bg-light border-0 h-100 d-flex d-flex-column justify-content-center">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/selo-garantia-20-anos.png" width="100%" height="100%" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5 bg-white border-bottom">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-6">
                    <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center pt-0 pt-md-0 pb-5 pb-md-0">
                        <h2 class="card-title mb-3 fw-bold">Tecnologia</h2>
                        <p class="card-text col-md-10">Em constante crescimento e continuamente investindo em tecnologia a produção conta com equipamentos italianos de última geração, sendo o processo desde a matéria-prima até paletização totalmente automatizado.</p>
                        <p class="card-text col-md-10">Em um moderno laboratório, as telhas passam por rigorosos testes de qualidade desde o recebimento da matéria prima até o produto final, com o objetivo de atender e exceder os requisitos da Norma Brasileira ABNT-NBR 13858-2 para telha de concreto.</p>
                        <p class="card-text col-md-10">Além dos testes em nosso laboratório, mensalmente a BRASTELHA testa seus produtos em um laboratório independente, assegurando ao consumidor telhas em conformidade com a norma ABNT-NBR 13.858-2.</p>
                        <!-- <div class="mt-2">
                            <button class="btn btn-light px-4 py-3 fw-bold" type="button">BAIXAR FICHA TÉCNICA</button>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card bg-transparent border-0 h-100 d-flex d-flex-column justify-content-center">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/tecnologia.jpg" width="100%" height="100%" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>