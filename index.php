<?php
    // VARIAVEIS DO SEO
    $title_pagina           = "Buffet";

    // DEPOIMENTOS
     $depoimentos = array(
        array(
            "depoimento" => "Fiz parte do curso de Formação Para Cidadania no período de vinte e dias, e aprendi conceitos muito importantes a respeito do mercado de trabalho, tanto com atividades práticas quanto teóricas.
                                A equipe de funcionários é muito competente e o serviço fornecido também foi ótimo."
        ),
    );
    
    $doencas = array(
        array(
            "doenca" => "Insônia"
        ),
    
    );

    // PERGUNTAS FREQUENTES
    $perguntas_frequrntes = array(
        array(
            "pergunta" => "Quem pode consumir canabidiol?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        

    );

    include("./includes/head.php");
?>
<section class="banner_parallax d-flex align-items-center justify-content-center">
    <article class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="text-center my-4 px-4">
                    <h1>Momentos Doces e Inesquecíveis para os Pequenos</h1>
                    <div class="text-center px-4">
                        <p>
                            No Buffet Alegria & Sabor, cada festa é pensada com carinho, criatividade e um cardápio delicioso para encantar crianças e adultos.
                        </p>
                    </div>
                </div>
                
                <div class="text-center text-white my-2">
                    <i class="fa-solid fa-arrow-down-long animated-arrow"></i>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="quem_somos p-4">
    <article class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="apresentacao text-start">
                    <h1>Quem Somos</h1>
                    <hr class="mt-0">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 col-sm-12">
                <div class="text-center my-4">
                    <img src="./assets/imagens/logos/logo_pequeno.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="separador-z my-2"></div>
            <div class="col-lg-6 col-md-6 col-12 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="apresentacao my-4">
                    <h2>Somos apaixonados por festa de criança</h2>
                    <br>
                    <p>
                        Com mais de 8 anos no mercado, criamos experiências completas para aniversários, batizados e eventos infantis. Nosso diferencial está no atendimento personalizado, ambientes lúdicos e um menu pensado para agradar aos pequenos — e aos pais também!
                    </p>
                    <br>
                    <h3 class="text-md-start text-sm-center">Nossa Missão</h3>
                    <p class="fala_questao">
                        <i class="fa-solid fa-quote-left"></i>
                         Fazer cada festa ser lembrada com carinho, sabor e muita diversão 
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="servicos p-4">
    <article class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="servicos text-start">
                    <h1>Serviços</h1>
                    <hr class="mt-0">
                </div>
            </div>    
            <div class="col-lg-12 col-md-12 col-12">
                <div class="servicos text-center px-4">
                    <h2>Festas completas do jeitinho que você imagina</h2>
                </div>
            </div>    
            <div class="page-section titulo-card">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 animacao animate-slide-in-right" data-animation-type="right" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="text-center">
                            <img src="assets/imagens/servicos/servico_1.jpg" class="img-fluid bord-img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 animacao animate-slide-in-left" data-animation-type="left" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="px-4 my-4">
                            <h3 >Aniversários Temáticos</h3>
                            <p>
                                Transformamos o aniversário dos sonhos em realidade! Com decorações personalizadas, personagens vivos, atividades lúdicas e todo o charme dos temas favoritos das crianças, criamos experiências inesquecíveis. Nossa equipe cuida de cada detalhe: do bolo à lembrancinha, tudo com muito carinho, segurança e diversão garantida.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-2 order-md-2 animacao animate-slide-in-right" data-animation-type="right" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="text-center">
                            <img src="assets/imagens/servicos/servico_2.jpg" class="img-fluid bord-img ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-1 order-md-1 animacao animate-slide-in-left" data-animation-type="left" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="px-4 my-4">
                            <h3 >Mini Eventos e Chá Revelação</h3>
                            <p>
                                Para momentos íntimos e cheios de emoção! Seja para um mini wedding, batizado, chá de bebê ou chá revelação, oferecemos soluções criativas, delicadas e completas. Decoração, doces, som ambiente e até aquela surpresa especial — tudo pensado para tornar cada instante ainda mais memorável.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 animacao animate-slide-in-right  " data-animation-type="right" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="text-center">
                            <img src="assets/imagens/servicos/servico_3.jpg" class="img-fluid bord-img ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 animacao animate-slide-in-left" data-animation-type="left" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="px-4 my-4">
                            <h3>Buffet Corporativo para o Dia das Crianças</h3>
                            <p>
                                Leve alegria e sabor para o ambiente corporativo! Oferecemos buffet infantil personalizado para empresas celebrarem o Dia das Crianças com seus colaboradores e suas famílias. Cardápio lúdico, brinquedos, recreação e atendimento completo para encantar os pequenos — com toda a organização e pontualidade que o mundo corporativo exige.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-2 order-md-2 animacao animate-slide-in-right " data-animation-type="right" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="text-center">
                            <img src="assets/imagens/servicos/servico_4.jpg" class="img-fluid bord-img ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-1 order-md-1 animacao animate-slide-in-left" data-animation-type="left" data-animation-delay="0.<?= rand(0, 4) ?>s" style="animation-delay: 0s;">
                        <div class="px-4 my-4">
                            <h3 >Animador de Festa</h3>
                            <p>
                                Nossos animadores fazem a festa acontecer de verdade! Jogos, danças, brincadeiras e personagens que interagem com as crianças de forma divertida e segura. Ideal para aniversários, escolas, condomínios e eventos em geral. Uma energia contagiante que transforma qualquer evento em um show de alegria.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="cardapio p-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="text-start">
                    <h1>Cardápio</h1>
                    <hr class="mt-0">
                </div>
            </div>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_6.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_7.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_3.jpg" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper cardapio">
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_6.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_7.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/imagens/cardapio/cardapio_3.jpg" />
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<?php
    include("./includes/footer.php");
?>