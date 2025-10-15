<!DOCTYPE html>
<html lang="pt-br">

<?php
    $title = "ERCEMAPI";
    $cssFiles = ['css/index.css'];
    $jsFiles = [];
    include "head.php";
?>

<body>
    <div class="wrapper">

        <!--==========================
            Header
        ============================-->
        <?php include "header.php"; ?>

        <main id="main">

            <!--==========================
                Intro Section
            ============================-->
            <div id="carouselExampleControls" class="carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div id="intro" class="carousel-item active">
                        <div class="intro-container wow fadeIn">
                            <h1 class="mb-4 pb-0">XIII Escola Regional de Computação do Ceará, Maranhão, Piauí 04 e 05 de dezembro de 2025</h1>
                            <a href="#about" class="about-btn scrollto">Sobre o Evento</a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--==========================
                About Section
            ============================-->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <center>
                        <div class="col-lg-6">
                            <h2>Sobre o Evento</h2>
                            <p>
                                                    A Escola Regional de Computação do Ceará, Maranhão, Piauí tem como
                        objetivo disseminar o conhecimento técnico e científico sobre temas e assuntos
                        de vanguarda na área de Computação, colaborar e contribuir com a
                        consolidação dos Programas de Pós-Graduação e consolidar-se como um
                        evento de referência nos Estados do Ceará, Maranhão e Piauí, e Região
                        Nordeste. As Escolas Regionais são eventos promovidos pela Sociedade
                        Brasileira de Computação (SBC) e têm como objetivo principal aproximar e
                        facilitar a presença dos estudantes de graduação e pós-graduação em eventos
                        da área de computação. 

                            </p>
                        </div><center>
                    </div>
                </div>
            </section>

            <!--====================
                Aviso
            ======================-->

            <!-- <section id="aviso">
                <div class="container">
                    <div class="row">
                        <center>
                        <div class="col-lg-6">
                            <span class="aviso">[Aviso Importante!]</span>
                            <p>
                                <strong>Os certificados de participação da ERCEMAPI/EACOMP foram disponibilizados a partir do dia 14 de Outubro àqueles que cumpriram ao menos 75% da carga horária do evento, através dos emails informados. A organização está a disposição através do email ercemapi.eacomp.2019@gmail.com,
                                pedimos que ao entrar em contato seja informado o nome completo e o problema a ser resolvido.</strong>
                            </p>
                        </div>
                    </center>
                    </div>
                </div>
            </section> -->
        
        
            <!--====================
                Organização
            ======================-->
            <section id="supporters" class="wow fadeInUp section-with-bg">

                <div class="container ">
                    <div class="section-header">
                        <h2>Realização</h2>
                    </div>

                    <div class="row no-gutters supporters-wrap clearfix">
                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="http://www.sbc.org.br/" target="_blank">
                                    <img src="img/logosbc3.png" class="img-fluid-style" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="section-header">
                        <h2>Organização</h2>
                    </div>

                    <div class="row no-gutters supporters-wrap clearfix">

                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="https://portais.ufma.br/PortalUfma/index.jsf" target="_blank">
                                    <img src="img/supporters/ufma.png" class="img-fluid-style" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="https://deinf.ufma.br" target="_blank">
                                    <img src="img/supporters/deINF.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="https://pet.ufma.br/comp/" target="_blank">
                                    <img src="img/supporters/petcomp.png" class="img-fluid-style" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="http://www.deinf.ufma.br/cocom/site/" target="_blank">
                                    <img src="img/supporters/cocom.png" class="img-fluid-style" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="https://www.fapema.br" target="_blank">
                                    <img src="img/supporters/fapema.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-xs-6">
                            <div class="supporter-logo">
                                <a href="http://www.ecp.ufma.br" target="_blank">
                                    <img src="img/supporters/Eng.Comp.png" class="img-fluid-style" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
                
        </main>

        <!--==========================
            Footer
        ============================-->

        <?php include "footer.php"; ?>

    </div>

</body>

</html>