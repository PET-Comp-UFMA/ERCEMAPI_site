<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title: "ERCEMAPI"; ?></title>
    
    <meta content="Template, Evento, petcomp, " name="keywords">
    <meta content="PETCOMP-UFMA" name="author">
    <meta content="index, follow" name="robots">
    <meta name=”creator” content=”PETCOMP-UFMA”>
    <meta name="google-site-verification" content="Vq1j2NBJRrVdJnbfpVGku9UCJFm-OD1rTIO7XZ7i7Rs" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon-v1/ercemapi_icone.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-v1/ercemapi_icone_32x32.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-v1/ercemapi_icone_16x16.ico">
    <link rel="manifest" href="/favicon-v1/site.webmanifest">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/globals.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">


    <!-- JavaScript Libraries -->
    <script src="venobox.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js" defer></script>

    <?php 
        if (isset($cssFiles) && is_array($cssFiles)) {
            foreach ($cssFiles as $cssFile) {
                echo '<link rel="stylesheet" href="' . $cssFile . '">';
            }
        }
        if (isset($jsFiles) && is_array($jsFiles)) {
            foreach ($jsFiles as $jsFile) {
                echo '<script src="' . $jsFile . '" defer></script>';
            }
        }
        if (isset($jsFilesnondefer) && is_array($jsFilesnondefer)) {
            foreach ($jsFilesnondefer as $jsFilenondefer) {
                echo '<script src="' . $jsFilenondefer . '"></script>';
            }
        }
    ?>

</head>