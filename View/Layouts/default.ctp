<!DOCTYPE HTML>
<html>

<head>
    <title>hackathon</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template"/>
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>client/css/ie.css"/>
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/css/mystyles.css">

    <!-- magnific-popup -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/magnific-popup/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $this->webroot; ?>client/css/switcher.css">
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/apple.css"
          title="apple" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/pink.css"
          title="pink" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/teal.css"
          title="teal" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/gold.css"
          title="gold" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/downy.css"
          title="downy" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/atlantis.css"
          title="atlantis" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/red.css"
          title="red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/violet.css"
          title="violet" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="<?php echo $this->webroot; ?>client/css/schemes/pomegranate.css" title="pomegranate" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="<?php echo $this->webroot; ?>client/css/schemes/violet-red.css" title="violet-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="<?php echo $this->webroot; ?>client/css/schemes/mexican-red.css" title="mexican-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/victoria.css"
          title="victoria" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/orient.css"
          title="orient" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/jgger.css"
          title="jgger" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/de-york.css"
          title="de-york" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="<?php echo $this->webroot; ?>client/css/schemes/blaze-orange.css" title="blaze-orange" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $this->webroot; ?>client/css/schemes/hot-pink.css"
          title="hot-pink" media="all"/>


    <link href="<?php echo $this->webroot;?>client/css/schemes/bootstrap-datepicker.min.css" rel="alternate stylesheet" type="text/css" media="all"/>


    <!-- END Demo Examples -->

    <script src="<?php echo $this->webroot; ?>client/js/jquery.js"></script>
</head>

<body>


<div class="global-wrap">

    <!-- //////////////////////////////////
//////////////MAIN HEADER///////////// 
////////////////////////////////////-->
    <div class="top-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="" class="logo mt5">
                        <img src="<?php echo $this->webroot; ?>client/img/hack.png"
                             alt="Image Alternative text" title="Image Title" height="65"/>
                    </a>
                </div>
                <div class="col-md-6 col-md-offset-4">
                    <div class="pull-right">
                        <ul class="header-features">
                            <li>

                            </li>
                            <li>
                               
                            </li>
                            <li>
                              
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="main">
        <?php echo $this->element('header_client'); ?>
    </header>
    <!-- LOGIN REGISTER LINKS CONTENT -->

    <?php echo $this->element('login_client'); ?>


    <?php echo $this->element('inscription_client'); ?>


    <?php echo $this->element('password_client'); ?>

    <!-- END LOGIN REGISTER LINKS CONTENT -->


    <!-- SEARCH AREA -->
    <?php
    $role = $this->Session->read('role');
    echo $this->element('search_client');
    ?>
    <!-- END SEARCH AREA -->

    <div class="gap"></div>


    <!-- //////////////////////////////////
//////////////END MAIN HEADER////////// 
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////PAGE CONTENT///////////// 
////////////////////////////////////-->


    <div class="container">
        <div class="row">

                <?php echo $this->Flash->render(); ?>

                <?php echo $this->fetch('content'); ?>

        </div>

    </div>


    <!-- //////////////////////////////////
//////////////END PAGE CONTENT///////// 
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////MAIN FOOTER////////////// 
////////////////////////////////////-->

    <footer class="main" id="main-footer">
        <div class="footer-top-area">
            <div class="container">
                <div class="row row-wrap">

                    <div class="col-md-3">
                        <h4>A PROPOS</h4>
                        <ul style=" font-size:13px;" class="list-unstyled">
                            <li><a class="active" href="index.html">
                                    Accueil</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo $this->webroot; ?>deals/index/1" class="">Hackathon en cours</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>deals/index/2" class="">Hackathon passés</a>

                            </li>

                            <li>
                                <a class="" href="index1.php?idm=3">Organisateur</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>ESPACE MEMBRE participant</h4>
                        <ul style=" font-size:13px;" class="list-unstyled">

                            <li><a href="signup.php"></a></li>
                            <li><a href="signup.php"></a></li>


                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Participer en hackathon</h4>
                        <!-- START TWITTER -->
                        <ul style="   font-size:13px;" class="list-unstyled">
                            <li>
                                <a href="<?php echo $this->webroot; ?>partenaires/inscription">Inscription Organisateur</a></li>
                            <li><a href="<?php echo $this->webroot; ?>partenaires/inscription">Connexion Organisateur</a></li>
                            <li><a href=""> Compte Organisateur</a></li>
                        </ul>
                        <!-- END TWITTER -->
                    </div>
                    <div class="col-md-3">
                        <a href="index.html">
                            <img src="<?php echo $this->webroot; ?>client/img/h.png" alt="logo" title="logo"
                                 class="logo">
                        </a>
                        <ul class="list list-social">
                            <li>
                                <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                            </li>
                            <li>
                                <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Copyright © 2017 AMIRA . All rights reserved.</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="pull-right">
                            <ul class="list-inline list-payment">
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/american-express-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/cirrus-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/discover-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/ebay-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/maestro-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/mastercard-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="<?php echo $this->webroot; ?>client/img/payment/visa-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //////////////////////////////////
//////////////END MAIN  FOOTER///////// 
////////////////////////////////////-->


    <!-- Scripts queries -->

    <script src="<?php echo $this->webroot; ?>client/js/boostrap.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/countdown.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/flexnav.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/magnific.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/tweet.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/fitvids.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/mail.min.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/ionrangeslider.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/icheck.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/fotorama.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/card-payment.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/owl-carousel.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/masonry.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/nicescroll.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/bootstrap-datepicker.min.js"></script>


    <!-- magnific-popup scripts -->
    <script src="<?php echo $this->webroot; ?>client/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts -->
    <script src="<?php echo $this->webroot; ?>client/js/custom.js"></script>
    <script src="<?php echo $this->webroot; ?>client/js/switcher.js"></script>

    <script>
        $('.popup').magnificPopup({
            type: 'ajax'
        });
    </script>

</div>
</body>

</html>
