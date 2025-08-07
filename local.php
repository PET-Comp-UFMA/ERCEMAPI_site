<!DOCTYPE html>
<html lang="pt-br">

<?php
    $title = "Local - ERCEMAPI";
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

        <section id="info">
            <div class="container">
                <div class="section-header"> <!-- para mudar a cor é so acessar essa classe em style.css -->
                    <h2>Local</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas tellus sed mi varius luctus. 
                Nunc ut leo nulla. Ut pretium ultricies placerat. Aliquam egestas massa at purus convallis ornare. 
                Nullam quam elit, malesuada interdum mauris et, finibus blandit massa. Phasellus maximus, ex et bibendum consectetur, 
                ex tellus vehicula diam, eu hendrerit ligula justo nec sapien. Suspendisse pulvinar sed dolor id cursus. 
                Maecenas interdum dui dapibus erat porta, nec posuere risus scelerisque. Sed vitae dui varius, auctor justo a, 
                bibendum enim. Suspendisse pellentesque tortor eu posuere gravida.</p>
            </div>

            <div class="container text-center">
                <div class="maps1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.093948971546!2d-44.30848047051652!3d-2.5584263458454153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x780f0a32464f4178!2sCCET!5e1!3m2!1spt-BR!2sbr!4v1619092173090!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <br>

        <!--==========================
            Footer
        ============================-->
        <?php include "footer.php"; ?>
        
    </div>

</body>

</html>
