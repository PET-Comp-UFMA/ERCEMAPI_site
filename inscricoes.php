<!DOCTYPE html>
<html lang="pt-br">

<?php
    $title = "Inscrições - ERCEMAPI";
    $cssFiles = [];
    $jsFiles = [];
    include "head.php";
?>
<link href="css/inscricao.css" rel="stylesheet">
<body>
    <div class="wrapper">

        <!--==========================
            Header
        ============================-->
        <?php include "header.php"; ?>

        <main id="main">

            <section id="inscriçoes">
                <div class="container">
                    <div class="section-header">
                        <h2>INSCRIÇÕES</h2>
                    </div>
                    <p>Informação importante sobre as inscrições:</p>
                <p>
                    <ol>
                        <li><strong>Até dia 02/12/2025 (prazo superior a 15 dias e inferior a 30 dias antes da data de início do evento) pode-se fazer uma devolução de 50% do valor pago pela inscrição na ERCEMAPI 2025. Após esta data não haverá devolução de qualquer valor pago. A política se aplica tanto para o cancelamento da inscrição, quanto para o cancelamento de qualquer atividade adicional. Para solicitar o cancelamento, enviar a solicitação para faturamento@sbc.org.br.</strong></li>
                        <br>
                        <li>As inscrições podem ser feitas pelo site: <a href ="https://centraldesistemas.sbc.org.br/ecos/ercemapi2025">https://centraldesistemas.sbc.org.br/ecos/ercemapi2025</a></li>
                        <br>
                    </ol>
                </p>

                    <h2><center>Tabelas de Inscrição</h2>

                <div class="tabela_estudante">
                <p style="text-align:center;"><strong>Estudante (Educação Básica e Graduação)</strong></p>

                <table class="tg" style="table-layout: fixed; width: 645px; margin: 0 auto;">
                  <colgroup>
                    <col style="width: 410px">
                    <col style="width: 80px">
                    <col style="width: 80px">
                  </colgroup>
                  <thead>
                    <tr>
                      <th class="tg-2">Descrição</th>
                      <th class="tg-4">Até 02/12</th>
                      <th class="tg-4">Até 05/12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tg-1">Estudante associado à SBC com anuidade vigente</td>
                      <td class="tg-6">R$ 30,00</td>
                      <td class="tg-6">R$ 40,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Estudante associado à SBC com anuidade vencendo em até 90 dias (COMBO: inscrição no evento + renovação da associação à SBC)</td>
                      <td class="tg-5">R$ 63,00</td>
                      <td class="tg-5">R$ 73,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Estudante não associado ou com associação não vigente à SBC (COMBO: inscrição no evento + associação à SBC)</td>
                      <td class="tg-6">R$ 63,00</td>
                      <td class="tg-6">R$ 73,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Estudante não associado à SBC (Somente inscrição no evento)</td>
                      <td class="tg-5">R$ 66,00</td>
                      <td class="tg-5">R$ 77,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>

              <div class="tabela_estudante2">
                <p style="text-align:center;"><strong>Estudante (Pós-Graduação)</strong></p>

                <table class="tg" style="table-layout: fixed; width: 645px; margin: 0 auto;">
                  <colgroup>
                    <col style="width: 410px">
                    <col style="width: 80px">
                    <col style="width: 80px">
                  </colgroup>
                  <thead>
                    <tr>
                      <th class="tg-2">Descrição</th>
                      <th class="tg-4">Até 02/12</th>
                      <th class="tg-4">Até 05/12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tg-1">Estudante de pós-graduação associado à SBC com anuidade vigente</td>
                      <td class="tg-6">R$ 50,00</td>
                      <td class="tg-6">R$ 60,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Estudante de pós-graduação associado à SBC com anuidade vencendo em até 90 dias (COMBO: inscrição no evento + renovação da associação à SBC)</td>
                      <td class="tg-5">R$ 185,00</td>
                      <td class="tg-5">R$ 195,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Estudante de pós-graduação não associado ou com associação não vigente à SBC (COMBO: inscrição no evento + associação à SBC)</td>
                      <td class="tg-6">R$ 185,00</td>
                      <td class="tg-6">R$ 195,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Estudante de pós-graduação não associado à SBC (Somente inscrição no evento)</td>
                      <td class="tg-5">R$ 190,00</td>
                      <td class="tg-5">R$ 201,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>

              <div class="tabela_professor">
                <p style="text-align:center;"><strong>Professor</strong></p>

                <table class="tg" style="table-layout: fixed; width: 645px; margin: 0 auto;">
                  <colgroup>
                    <col style="width: 410px">
                    <col style="width: 80px">
                    <col style="width: 80px">
                  </colgroup>
                  <thead>
                    <tr>
                      <th class="tg-2">Descrição</th>
                      <th class="tg-4">Até 02/12</th>
                      <th class="tg-4">Até 05/12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tg-1">Professor de Educação Básica Municipal/Estadual associado à SBC com anuidade vigente</td>
                      <td class="tg-6">R$ 60,00</td>
                      <td class="tg-6">R$ 70,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Professor de Educação Básica Municipal/Estadual associado à SBC com anuidade vencendo em até 90 dias (COMBO: inscrição no evento + renovação da associação à SBC)</td>
                      <td class="tg-5">R$ 195,00</td>
                      <td class="tg-5">R$ 205,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Professor de Educação Básica Municipal/Estadual não associado ou com associação não vigente à SBC (COMBO: inscrição no evento + associação à SBC)</td>
                      <td class="tg-6">R$ 195,00</td>
                      <td class="tg-6">R$ 205,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Professor de Educação Básica Municipal/Estadual não associado à SBC (Somente inscrição no evento)</td>
                      <td class="tg-5">R$ 201,00</td>
                      <td class="tg-5">R$ 212,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Professor de Educação Básica Federal associado à SBC com anuidade vigente</td>
                      <td class="tg-6">R$ 60,00</td>
                      <td class="tg-6">R$ 70,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Professor de Educação Básica Federal associado à SBC com anuidade vencendo em até 90 dias (COMBO: inscrição no evento + renovação da associação à SBC)</td>
                      <td class="tg-5">R$ 430,00</td>
                      <td class="tg-5">R$ 440,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Professor de Educação Básica Federal não associado ou com associação não vigente à SBC (COMBO: inscrição no evento + associação à SBC)</td>
                      <td class="tg-6">R$ 430,00</td>
                      <td class="tg-6">R$ 440,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Professor de Educação Básica Federal não associado à SBC (Somente inscrição no evento)</td>
                      <td class="tg-5">R$ 436,00</td>
                      <td class="tg-5">R$ 447,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>

              <div class="tabela_profissional">
                <p style="text-align:center;"><strong>Profissional</strong></p>

                <table class="tg" style="table-layout: fixed; width: 653px; margin: 0 auto;">
                  <colgroup>
                    <col style="width: 410px">
                    <col style="width: 80px">
                    <col style="width: 80px">
                  </colgroup>
                  <thead>
                    <tr>
                      <th class="tg-2">Descrição</th>
                      <th class="tg-4">Até 02/12</th>
                      <th class="tg-4">Até 05/12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tg-1">Profissional associado à SBC com anuidade vigente</td>
                      <td class="tg-6">R$ 70,00</td>
                      <td class="tg-6">R$ 80,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Profissional associado à SBC com anuidade vencendo em até 90 dias (COMBO: inscrição no evento + renovação da associação à SBC)</td>
                      <td class="tg-5">R$ 445,00</td>
                      <td class="tg-5">R$ 455,00</td>
                    </tr>
                    <tr>
                      <td class="tg-1">Profissional não associado ou com associação não vigente à SBC (COMBO: inscrição no evento + associação à SBC)</td>
                      <td class="tg-6">R$ 445,00</td>
                      <td class="tg-6">R$ 455,00</td>
                    </tr>
                    <tr>
                      <td class="tg-3">Profissional não associado à SBC (Somente inscrição no evento)</td>
                      <td class="tg-5">R$ 452,00</td>
                      <td class="tg-5">R$ 463,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>


              <p>Política para participantes que utilizarem a isenção institucional <a href="https://www.sbc.org.br/associe-se/#beneficios"> (https://www.sbc.org.br/associe-se/#beneficios)</a></p>
            </section>
        </main>

        <!--==========================
            Footer
        ============================-->
        <?php include "footer.php"; ?>
    
    </div>
</body>

</html>
