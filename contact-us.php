<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Weather-Widgets-1.css">
    <link rel="stylesheet" href="assets/css/Weather-Widgets.css">
</head>

<body>
    <?php include 'includes/navbar.php';?>

        <main class="page contact-us-page">
            <div class="navigation-links">
                <a href="/">ACCEUIL >  </a> <a href="">Contact</a>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-container card-shadow">
                            <div class="block-heading">
                                <h2  id="contactus">Contact us</h2>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label class="separator">Votre nom</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="separator">Subject</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="separator">Email</label>
                                    <input class="form-control" type="email">
                                </div>
                                <div class="form-group">
                                    <label class="separator">Message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btnForm" type="submit">Send</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row ">
                            <svg class="svgShadow" height="300" width="300">
                                <foreignObject id="map" width="300" height="300">
                                    <iframe style="overflow:hidden;" width="300" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13301.900179068509!2d-7.6570737!3d33.5410318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65b786162ba01eb0!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;%C3%A9lectricit%C3%A9%20et%20m%C3%A9canique!5e0!3m2!1sfr!2sma!4v1582198256879!5m2!1sfr!2sma"></iframe>
                                </foreignObject>
                                <circle cx="150" cy="150" r="140" stroke="#DBDBDB" stroke-width="20" fill="url(#map)" /> Sorry, your browser does not support inline SVG.
                            </svg>
                        </div>
                        
                        <div class="row">
                            <div>
                                <h4 class="block-title td-block-title">
	                                <span id=".block-title">NOS COORDONNÉES</span>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </main>

        <?php include 'includes/footer.php'; ?>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
            <script src="assets/js/smoothproducts.min.js"></script>
            <script src="assets/js/theme.js"></script>
</body>

</html>