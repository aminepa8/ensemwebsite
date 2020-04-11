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
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Weather-Widgets-1.css">
    <link rel="stylesheet" href="assets/css/Weather-Widgets.css">
    <!--  Special Stylesheets
    ======================-======================= -->
    <link href="includes/css/global_font.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="includes/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="includes/style.css" type="text/css" />
    <link rel="stylesheet" href="includes/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="includes/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="includes/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="includes/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="includes/css/responsive.css" type="text/css" />
    <style>
        #header.sticky-on-upscroll #header-wrap {
          -webkit-transition: height .4s ease, opacity .3s ease, top .4s ease;
          -o-transition: height .4s ease, opacity .3s ease, top .4s ease;
          transition: height .4s ease, opacity .3s ease, top .4s ease;
        }

        #header.sticky-on-upscroll.sticky-header #header-wrap { top: -60px; }

        #header.sticky-on-upscroll.show-sticky-onscroll.sticky-header #header-wrap { top: 0px; }
    </style>
    <!--  End header Stylesheets
    ======================-======================= -->

</head>

<body class="stretched">

    <?php include 'includes\header.php';?>

        <main class="page contact-us-page">
            <div class="navigation-links">
                <a href="../ensemwebsite/">ACCEUIL <strong>></strong>  </a> <a href="">Contact</a>
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
                    <div class="col-lg-6">
                       <div class="mapCercle animated fadeInUp">
                            <svg class="svgShadow" height="300" width="300">
                                <foreignObject id="map" width="300" height="300">
                                    <iframe style="overflow:hidden;" width="300" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13301.900179068509!2d-7.6570737!3d33.5410318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65b786162ba01eb0!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;%C3%A9lectricit%C3%A9%20et%20m%C3%A9canique!5e0!3m2!1sfr!2sma!4v1582198256879!5m2!1sfr!2sma"></iframe>
                                </foreignObject>
                                <circle cx="150" cy="150" r="140" stroke="#DBDBDB" stroke-width="20" fill="url(#map)" /> Sorry, your browser does not support inline SVG.
                            </svg>
                       </div>

                        <div class="contact-details">
                            <div class="outer">
                                <p class="inner">NOS COORDONNÉES</p>
                            </div>
                            <div class="ct-details">
                            <h4><span class="fa fa-home"><strong> Adresse : </strong> Route d'El Jadida,Km 7 BP</h4>
                            <h4><span class="fa fa-phone"><strong>  Tél : </strong>  0522230789 </h4>
                            <h4><span class="fa fa-fax"> <strong>Fax : </strong> 0522231299</h4>
                            <h4><span class="fa fa-envelope"><strong> Email : </strong> contact@ensem.ac.ma</h4>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </main>

        <?php  include 'includes/footer.php';?>

            <script src="includes/js/jquery.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
            <script src="assets/js/smoothproducts.min.js"></script>
            <script src="assets/js/theme.js"></script>
            <!-- Header animations JavaScripts
            ============================================= -->
            <script src="includes/js/plugins.js"></script>



            <script src="includes/js/functions.js"></script>
            <script>
                 jQuery(document).ready( function($){
                   var lastScrollTop = 0;
                   window.addEventListener("scroll", function(event){
                     var st = $(this).scrollTop();
                     if (st > lastScrollTop){
                       jQuery('#header.sticky-on-upscroll').removeClass('show-sticky-onscroll'); // Down Scroll
                     } else {
                       jQuery('#header.sticky-on-upscroll').addClass('show-sticky-onscroll'); // Up Scroll
                     }
                     lastScrollTop = st;
                   });
                 });
           </script>

</body>

</html>
