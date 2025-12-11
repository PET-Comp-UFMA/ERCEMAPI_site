<!DOCTYPE html>
<html lang="pt-br">

<?php
    $title = "Programação - ERCEMAPI";
    $cssFiles = ['css/programacao.css'];
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
                        <h2 class="schedule-day-title">Dia 04/12</h2>

                         <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading7">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>09:00-10:30</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/Arthur_icone.png" alt="Icone do Palestrante Arthur">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Abertura e Palestra: "Da Fonologia aos Mecanismos de Falha: Fenômenos Linguísticos do Português Brasileiro que Desafiam Modelos de ASR" <span class="seta">▼ </span></h4>
                                                 <p>Apresentador: Arthur Pereira Santana (Telus Digital)</p>
                                                <p>Local: Auditório</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>Bio:</strong></p>
                                            <p>Arthur Santana é Doutor em Linguística pela Universiade de São Paulo, com estágio Sanduíche pela University of Southern California, e há mais de sete anos trabalha como Linguista Computacional, tendo atuado em empresas como Cerence e Google, compondo times que desenvolvem Assistentes de Voz para o Português Brasileiro. Atualmente, trabalha como consultor para diversas empresas focando em uma variedade de Projetos de Processamento de Linguagem Natural.</p>
                                            <p><strong>Resumo da Palestra:</strong></p>
                                            <p>"Os avanços recentes em reconhecimento automático de fala ( Automatic Speech Recognition - ASR) têm sido substanciais, mas a persistência de erros recorrentes evidencia que os modelos atuais ainda não são suficientemente sensíveis a propriedades linguísticas fundamentais do Português Brasileiro. Este trabalho examina um conjunto de desafios de base linguística, derivados da fala encadeada cotidiana, da prosódia e de manifestações de fala atípica, a fim de demonstrar que muitas das falhas observadas em ASR não constituem limitações técnicas arbitrárias, mas, antes, consequências previsíveis de processos fonológicos, prosódicos e articulatórios subjacentes. Ao apresentar tais padrões a partir de uma perspectiva linguística, busca-se oferecer aos cientistas da computação pontos de entrada concretos para o desenvolvimento de pesquisas e modelos informados por cenários reais de uso.
                                            A primeira parte destaca o modo pelo qual a prosódia, as pausas e o fraseamento entoacional codificam distinções cruciais na fala do Português Brasileiro, distinções estas que a maioria dos sistemas de ASR podem apresentar dificuldade em recuperar. Diferenças sutis de fraseamento, como em “Não, era só isso” versus “Não era só isso”, veiculam significados discursivos contrastantes, mas são tipicamente apagadas nas etapas de modelagem acústica e linguística atualmente disponíveis. Discute-se como representações acústicas sensíveis à prosódia, modelos de aprendizado multi-tarefa e procedimentos de decodificação condicionados por intenção podem contribuir para a desambiguação desses casos, melhorando o desempenho de sistemas conversacionais e interativos.A segunda parte volta-se ao desempenho de ASR em contextos de fala com desordens, com ênfase em gagueira e disartria. Disfluências, irregularidades temporais, prolongamentos e articulações não canônicas violam sistematicamente pressupostos centrais das arquiteturas de ASR, resultando em taxas de erro elevadas. Com base em revisões sistemáticas recentes, identificam-se obstáculos centrais, entre eles, a ausência de corpora públicos de fala atípica no Português Brasileiro, e delineiam-se caminhos promissores, tais como ASR sensível a disfluências, modelagem adaptativa ao falante e práticas de anotação estratificadas que integrem conhecimentos da fonoaudiologia às técnicas de aprendizado de máquina. Essas abordagens não apenas ampliam a acessibilidade e sustentam aplicações clínicas, mas também contribuem para aumentar a robustez dos modelos de modo geral.
                                            Por fim, examinam-se processos fonológicos ordinários do Português Brasileiro (redução vocálica, elisão, degeminação, palatalização, variação nasal e sandhi) que frequentemente produzem formas de superfície significativamente distantes das pronúncias canônicas registradas em dicionários. Esses padrões respondem por parcela expressiva dos erros cotidianos em ASR. Argumenta-se que estratégias informadas linguisticamente, tais como aumento de dados guiado por regras, modelagem de variantes de pronúncia, tokenização orientada por restrições fonotáticas e decodificação sensível à morfologia, configuram direções frutíferas de pesquisa. Ao trazer esses mecanismos para o primeiro plano, pretende-se oferecer aos cientistas da computação um roteiro prático e orientado à pesquisa para o desenvolvimento de
                                            tecnologias de fala mais acuradas, inclusivas e profundamente ancoradas na estrutura linguística da língua."</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading13">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>11:00-12:30</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Sessão Técnica 1 - Ciências de Dados <span class="seta">▼ </span></h4>
                                                 
                                                <p>Local: Sala 1</p>
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
                                            <p><strong>"Além dos Números: Visualizando Gênero e Raça de Egressos em Cursos de Computação e TIC do IFCE"</strong></p>
                                            <p>Lara Beatriz Soares Gomes (Instituto Federal de Educação, Ciência e Tecnologia do Ceará), Melissa Sousa Felipe (UFC), Raquel Silveira (Ifce), Carina Teixeira de Oliveira (Ifce)</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Marcações Territoriais de Facções como Features Preditivas Análise de Risco Criminal em Grafos Viários"</strong></p>
                                            <p>Victor Carvalho Soares de Araujo (UFPI), Raimundo Santos Moura (UFPI) </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Verificação de Fatos com Transformers: Um Estudo com DistilBERT no Benchmark FEVER"</strong></p>
                                            <p>Beneilton Martins Leite (UFMA), Fael Faray de Paiva (UFMA), Anselmo Cardoso de Paiva (UFMA)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Recuperação Semântica em Normativas Públicas Federais: RAG com Re-ranking e Proveniência por Página"</strong></p>
                                            <p>Avelar Rodrigues de Sousa (IFPI-), Jean Sousa (IFPI), Karielly de Carvalho (IFPI), Manoel Messias Pereira Medeiros (IFPI), Marx Rodrigues de Moura (IFPI)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"SaudeBR-QA: Um Córpus de Perguntas e Respostas para o Domínio da Saúde em Português Brasileiro"</strong></p>
                                            <p>Carlos Henrique Santos Barros (IFPI), Gustavo Figueredo Rodrigues de Sousa (USP), Rogerio Figueredo de Sousa (IFPI)</p>
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
                                            <time>14:30-16:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Sessão Técnica 2 -Engenharia de Software, Empreendorismo e Inovação <span class="seta">▼ </span></h4>
                                                <p>Local: Sala 1</p>
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
                                            <p><strong>"Ensino prático de manutenção de software: uma experiência com a dinâmica cliente-empresa"</strong></p>
                                            <p>Miqueias Coelho (UFMA), Lucas Reis Abreu (UFMA), Bruno Silva (UFMA), Rodrigo Nascimento Siqueira (UFMA), Davi Viana (UFMA)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Avisaí: Aplicativo para Melhoria da Comunicação Cidadão-Governo no Registro de Irregularidades Urbanas"</strong></p>
                                            <p>Ingrid Silva (iCEV), João Neto (iCEV), João Filho (iCEV), Kévilla Aguiar (iCEV), Luís Gabriel Salvador Barros (iCEV), Wendril Gabriel Medeiros Holanda (iCEV), Beatriz Barbosa (iCEV), Francisco Luciani M. Vieira (iCEV)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Um juiz on-line em microserviços para escalabilidade em plataformas de ensino de programação"</strong></p>
                                            <p>William Valther Martins (UFMA), Ádilla Roberta Gomes Pereira (UFMA), Sávio Patrick Costa Câmara, Allan Kássio Beckman Soares da Cruz (UFMA), Carlos Salles (UFMA)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Lâmpada de Fenda Portátil"</strong></p>
                                            <p>Kassandra Rabêlo (IFPI - Floriano), Priscila Freitas Martins (IFPI), Isac Brito Matos (IFPI Campus Floriano), Silvino Marques da Silva Junior (IFPI - Floriano), Marcony Santana (IFPI)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Proposta de Um Aplicativo Móvel Para Incentivar a Educação Ambiental e Combater o Descarte Irregular de Lixo: Estudo de Caso na Cidade de Primavera-PA"</strong></p>
                                            <p>Jailly Silva (UEPA), Maria Mar, Alya Chaves, Wanderson Quinto (UEPA) </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Gamificação na Orientação Vocacional: Uma Plataforma Interativa para Alunos de Ciência e Tecnologia"</strong></p>
                                            <p>José Nunes de Sousa Neto (UFMA), Mario Meireles Teixeira (UFMA), Alana Oliveira (UFMA) </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>14:30-16:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>Minicurso 1 - Agentes de IA: Construção de Chatbot no paradigma Multiagente com LangChain e LangGraph</h4>
                                    <p>Apresentadores(as):  Gutemberg da Silva <gutemberg.silva@ufpi.edu.br> (UFPI, Brazil), Jailson Zarur <jailson.zarur@ufpi.edu.br> (UFPI, Brazil), Luis Henrique Miranda Queiroz <luis.hmq@ufpi.edu.br> (UFPI, Brazil), Raimundo Santos Moura <rsm@ufpi.edu.br> (UFPI, Brazil) </p>
                                    <p>Local: Laboratório </p>
                                </div>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br>
                                <time>16:30 - 18:00</time>
                            </div>
                             <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>Minicurso 1 - Agentes de IA: Construção de Chatbot no paradigma Multiagente com LangChain e LangGraph</h4>
                                    <p>Apresentadores(as):  Gutemberg da Silva <gutemberg.silva@ufpi.edu.br> (UFPI, Brazil), Jailson Zarur <jailson.zarur@ufpi.edu.br> (UFPI, Brazil), Luis Henrique Miranda Queiroz <luis.hmq@ufpi.edu.br> (UFPI, Brazil), Raimundo Santos Moura <rsm@ufpi.edu.br> (UFPI, Brazil) </p>
                                    <p>Local: Laboratório </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-2">
                        <h2 class="schedule-day-title">Dia 05/12</h2>

                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading8">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>09:00-10:30</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/Leandro_icone.jpg" alt="Icone do Palestrante Arthur">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Palestra: "Inteligência Artificial Agêntica: Origens, Estado Atual e Caminhos para o Futuro" <span class="seta">▼ </span></h4>
                                                 <p>Apresentador: Leandro Marinho (UFCG)</p>
                                                <p>Local: Sala 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>Bio:</strong></p>
                                            <p>Leandro Balby Marinho é Doutor em Ciência da Computação pela Universidade de Hildesheim,Alemanha, 2010. Mestre em Engenharia Elétrica pela UFMA, Brasil, 2005. Bacharel em Ciência da Computação pela UFMA, Brasil, 2002. Professor do Departamento de Sistemas e Computação da Universidade Federal de Campina Grande (UFCG). Atua como docente, pesquisador e orientador nos cursos de graduação e de pós-graduação em ciência da computação. Suas áreas de especialização são: aprendizagem de máquina, sistemas de recomendação e modelos de linguagem em grande escala. Atualmente, pesquisa na área de agentes generativos em vários domínios de aplicação, tais como a educação, a previsão, a simulação e o combate à desinformação.</p>
                                            <p><strong>Resumo da Palestra:</strong></p>
                                            <p>"A IA vive um novo ponto de inflexão. Depois dos grandes modelos de linguagem (LLMs), emergem agora os sistemas agênticos — arquiteturas em que modelos passam a agir, decidir e colaborar com autonomia em busca de objetivos. Esse novo paradigma transforma profundamente a lógica de uso: deixamos de simplesmente “usar um modelo” para delegar tarefas de complexidade arbitrária a sistemas compostos por múltiplos agentes, com diferentes graus de autonomia, especialização e coordenação.

                                            Nesta breve palestra, revisitamos a trajetória que nos trouxe até aqui, exploramos o estado atual da pesquisa em IA agêntica, seus desafios — como controle, coordenação e fidedignidade — e as perspectivas futuras, em que sistemas de agentes leves e especializados poderão resolver problemas complexos de forma colaborativa.

                                            Por fim, apresento pesquisas e aplicações desenvolvidas pelo meu grupo de pesquisa, que vem criando ecossistemas de agentes para o combate à desinformação, apoio à educação, automação de código e geração de soluções de impacto social."</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading3">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>11:00-12:30</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Sessão Técnica 3 - Aprendizado de Máquina <span class="seta">▼ </span></h4>
                                                <p>Local: Sala 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Comparando Modelos Compactos e Especializados para Análise de Sentimento em Tweets"</strong></p>
                                            <p>leandro Freitas (UFMA), Anselmo Cardoso de Paiva (UFMA), Arnaud Guedes de Paiva Neto (UFMA), Fael Faray de Paiva (UFMA) </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Efficient Convolutional Neural Networks for Mosquito Species Recognition"</strong></p>
                                            <p>Raniery Alves Vasconcelos (UFC), Lucas José Lemos Braz (UFC), Vinicius Santos (UFC), Lucas Pedrosa Valente (UFC), Marcelo Marques Simões de Souza (UFC), Iális Cavalcante Paula Jr (UFC)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Avaliação de Redes Neurais Convolucionais na Classificação da Posição do Olhar em Vídeos do Exame Cover Test"</strong></p>
                                            <p>Steven Roger dos Santos Soares (UFMA), João Dallyson Sousa de Almeida (UFMA) </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Classificação Automática de Relatos de Ocorrências Policiais para Crimes Cibernéticos em Português Brasileiro"</strong></p>
                                            <p>Victor Carvalho soares de araujo (UFPI), José Victor Vieira de Oliveira (UFPI), Pedro Soares (UFPI), Yasmine Silva (UFPI), Rogerio Figueredo de Sousa (IFPI), Raimundo Santos Moura (UFPI)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>11:00-12:30</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>Minicurso 2 - Perfilamento e visualização da escalabilidade de aplicações paralelas com o Parallel Scalability Suite</h4>
                                    <p>Apresentadores: Felipe Hidequel Santos da Silva (UFERSA), João Batista Fernandes (UFRN), Anderson Bráulio Nóbrega da Silva (IFPB), Italo Assis (UFERSA) Samuel Xavier de Souza (UFRN)</p>
                                    <p>Local: Laboratório </p>
                                </div>
                            </div>
                        </div>
                         <div class="row schedule-item">
                            <div class="col-md-2">
                                <br><br>
                                <time>14:30-16:00</time>
                            </div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                </div>
                                <div class="text-prog">
                                    <h4>Minicurso 2 - Perfilamento e visualização da escalabilidade de aplicações paralelas com o Parallel Scalability Suite</h4>
                                    <p>Apresentadores: Felipe Hidequel Santos da Silva (UFERSA), João Batista Fernandes (UFRN), Anderson Bráulio Nóbrega da Silva (IFPB), Italo Assis (UFERSA) Samuel Xavier de Souza (UFRN)</p>
                                    <p>Local: Laboratório </p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                                <div role="tab" id="heading4">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <div class="row schedule-item">
                                            <div class="col-md-2">
                                            <time>14:30-16:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/ercemapi_icone.png" alt="ERCEMAPI 2025">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Sessão Técnica 4 - Revisão de Literatura e Visualização de Dados <span class="seta">▼ </span></h4>
                                                <p>Local: Sala 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                             <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Mapeamento Sistemático da Literatura sobre Detecção de Pessoas Negras em Obras Audiovisuais com Visão Computacional"</strong></p>
                                            <p>Anne Gabrielly Marques Ávila (IFCE, Campus Tianguá), Gabriel Marinho de Oliveira Machado (UFC), Francisca Raquel de Vasconcelos Silveira (Ifce), Maria de Jesus do Nascimento (Instituto Federal do Ceará campus Tianguá), Carina Teixeira de Oliveira (Ifce)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Visualização de Dados como Ferramenta de Apoio ao Estudo Analítico dos Indicadores de Permanência e Desempenho Acadêmico"</strong></p>
                                            <p>João Ferreira Linhares (IFCE), Everton de Almeida Veras (IFCE), Roberta da Silva Oliveira (IFCE - Tianguá), Lara Beatriz Soares Gomes (IFCE), Raquel Silveira (IFCE), Carina Teixeira de Oliveira (IFCE)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Revisão Narrativa sobre Modelos de Alocação de Recursos em UTI durante Pandemias: Abordagens Computacionais e Desafios Éticos"</strong></p>
                                            <p>Carlos Eduardo Veras Gomes (UFMA), Joao Autusto Ferreira Nunes de Carvalho (UFMA), Fael Faray de Paiva (UFMA), Francisco Glaubos Nunes Clímaco (UFMA)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>"Pecuária de Precisão com IoT e Machine Learning: Uma Revisão Sistemática"</strong></p>
                                            <p>Matusalen Alves (IFPI), Cairon Ferreira Prado (IFPI), Fabricio Mota (IFPI), Pedro Valentino (IFPI), Jonathas Jivago de Almeida Cruz, Iallen Gábio Sousa Santos (IFPI)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mais posteres -->
                            </div>
                        </div>
                        <div id="accordionEx" role="tablist" aria-multiselectable="false">
                            <div role="tab" id="heading6">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <div class="row schedule-item">
                                        <div class="col-md-2">
                                            <time>16:30-18:00</time>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="speaker">
                                                <img src="img/favicon-v1/Rodrigo_icone.png" alt="Icone do Palestrante Rodrigo">
                                            </div>
                                            <div class="text-prog">
                                                <h4>Encerramento e Palestra: "Ecossistemas de Software na Indústria" <span class="seta">▼ </span></h4>
                                                 <p>Apresentador: Rodrigo Pereira dos Santos (UNIRIO)</p>
                                                <p>Local: Auditório</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Card body --> <!-- Subcard de apresentação de poster -->
                            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time></time>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="text-prog">
                                            <p><strong>Bio:</strong></p>
                                            <p>Professor Adjunto III do Departamento de Informática Aplicada e membro efetivo do Programa de Pós-Graduação em Informática da Universidade Federal do Estado do Rio de Janeiro (UNIRIO). Bolsista de Produtividade em Pesquisa do CNPq Nível 2 e Jovem Cientista do Nosso Estado FAPERJ. Lidera o Grupo de Pesquisa em Engenharia de Sistemas Complexos (LabESC). Foi pesquisador visitante na University College London (2014-2015) e Coordenador do Curso de Mestrado do PPGI/UNIRIO (2019-2020). Atuou como consultor em projetos de P&D em engenharia de sistemas na indústria nacional pela Fundação Coppetec (2008-2017). Foi editor-chefe da iSys: Revista Brasileira de Sistemas de Informação (2017-2021). É membro da Sociedade Brasileira de Computação desde 2006, atuando como Coordenador (ou vice) da CE-SI (2019-2025) e membro da CE-ES (2021-2022), da CE-Jogos (2020-2024) e do GI-EC (2020-2024). É avaliador de cursos superiores e avaliador institucional no INEP/MEC desde 2011. Seus principais campos de atuação são ecossistemas de software, sistemas-de-sistemas e educação em computação. Foi coordenador e proferiu comunicações em mais de 100 eventos. Publicou mais de 300 artigos em periódicos e congressos (alguns premiados) e recebeu distinções acadêmicas como revisor de destaque em conferências e orientador de teses e dissertações premiadas pela SBC.</p>
                                            <p><strong>Resumo da Palestra:</strong></p>
                                            <p>The globalization of the software industry creates business opportunities for organizations that acquire and offer IT products and services in several domains. However, the growing dependency on the networks of suppliers and external developers to reach organizational objectives and to analyze diversified stakeholders’ demands brings several challenges. The reason is the fact that the set of technologies and applications – extensible and/or integrated – forms a common technological platform that joins a community of suppliers, external developers and users, generating networks known as software ecosystems (SECO). An important concern refers to SECO modeling and analysis since IT managers should make decisions based on a systemic perspective. In this talk, we aim to introduce some concepts and factors that affect SECO modeling and analysis in industry. In addition, some SECO implications on the applied software engineering & sustainability and diversity will be pointed out.</p>


                                        </div>
                                    </div>
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
