<!DOCTYPE html>
<html lang="pt-br">

<?php
    $title = "Programação - ERCEMAPI";
    $cssFiles = [];
    $jsFiles = [];
    include "head.php";
?>

<body>
    <div class="wrapper">

        <!--==========================
            Header
        ============================-->
        <?php include "header.php"; ?>

        <!--==========================
            Programação Geral
        ============================-->
            
        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>PROGRAMAÇÃO DO EVENTO</h2>
                </div>

                <div class="tab-content row justify-content-center">

                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
                        <h2 class="schedule-day-title">Dia XX/YY</h2>

                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading13">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>08:00-18:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>XXXXXXXXX</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro deserunt adipisci totam cumque dolores ea nostrum consequatur atque dicta assumenda et molestiae, blanditiis, est ipsam. Aperiam hic placeat eaque sunt!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi maiores reprehenderit temporibus ipsam fuga, ad, obcaecati qui repellendus error architecto, delectus libero illo! Adipisci, voluptatem deserunt ab dignissimos quia enim.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, qui beatae? Nulla eligendi numquam sequi dolorem, repudiandae et explicabo quas veniam sit fugit inventore quis fuga. Pariatur cum corporis nihil?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>09:00-12:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. Paulo Rogério de Almeida Ribeiro</p> -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Luís B. P. Nascimento, Vitor G. Santos, Diego S. Pereira, Daniel H. S. Fernandes e Pablo J. Alsin</p>     -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Sérgio Souza Costa, Mateus Vitor Duarte Sousa e Micael Lopes da Silva</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Alan Gomes Silva, Ramásio Ferreira de Melo, Rogério Pereira de
                                        Sousa, Charles França de Sousa, Elielton Pereira de Santana, Karoline Araújo Nascimento e Jaciara Costa
                                        Naziozeno</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. André Soares</p> -->
                            </div>
                        </div>
                    </div>

                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-2">
                        <h2 class="schedule-day-title">Dia XX/YY</h2>
                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading13">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>09:00-12:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>XXXXXXXXX</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda obcaecati beatae fugit nemo iusto distinctio tempore voluptate nulla, sunt molestias et neque eum architecto, aut nobis ad nam debitis repellat?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dolore magnam consectetur obcaecati illo harum repellendus facere in unde pariatur? Fugit consequuntur quis iusto, obcaecati laboriosam in perferendis voluptate veritatis!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis obcaecati aut voluptatem atque nemo soluta voluptas eius libero? Quos a blanditiis nostrum obcaecati sit vero aliquam perferendis velit atque enim?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>
                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading2">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>09:00-12:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>XXXXXXXXX</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia sunt doloremque, rerum doloribus at iure veritatis, ullam, eligendi nihil accusantium labore sed beatae dolor cupiditate quis cumque facere ipsum aut!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio eveniet quae dignissimos illum similique, quisquam ex numquam qui quaerat consectetur incidunt dolorum mollitia natus porro. Quasi, quam. Aperiam, atque rerum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in ipsum ullam animi provident autem ab delectus nisi incidunt. Nihil iste tenetur obcaecati rerum eum doloremque ratione consequuntur iure ea.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>09:00-12:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. Paulo Rogério de Almeida Ribeiro</p> -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>09:00-12:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. Carlos Salles</p> -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Emily Juliana Costa e Silva e Igor Rafael Barbosa Estrela</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Kleydson Beckman Barbosa e Pedro Arthur Freitas Dias</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>18:30</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. Cláudio de Souza Baptista</p> -->
                            </div>
                        </div>
                    </div>

                    <!-- Schdule Day 3 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-2">
                        <h2 class="schedule-day-title">Dia XX/YY</h2>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>09:00-12:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Prof. Dr. Paulo Rogério de Almeida Ribeiro</p> -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Luís B. P. Nascimento, Vitor G. Santos, Diego S. Pereira, Daniel H. S. Fernandes e Pablo J. Alsin</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>14:00-18:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                    <!-- <p>Apresentadores(as): Fernando Escobar, Washington Henrique Carvalho Almeida, Luciano Aguiar Monteiro, Pedro César Vieira Barbosa e Aislan Rafael Rodrigues Souza</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>18:00-19:30</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <h4>XXXXXXXXX</h4>
                                <!-- <p>Apresentador(a): Profa. Dra. Jonice Oliveira  </p> -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <time>19:30</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>XXXXXXXXX</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--==========================
            Footer
        ============================-->
        <?php include "footer.php"; ?>
        
    </div>
    
</body>

</html>
