<!doctype html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <title>Accounting Students Association</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width initial-scale=1,maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link href="bower_components/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="styles/unoSlider.min.css" rel="stylesheet" type="text/css">
    <link href="styles/animate.min.css" rel="stylesheet" type="text/css">
    <link href="styles/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<header class="row">
    <div class="header-wrapper">
        <a href="#" data-activates="slide-out" class="menu-btn button-collapse left"><i class="mdi-navigation-menu"></i></a>
        <div class="container">
            <div class="nav-wrapper-portal">
                <a href="#" class="center page-title">ASA Members Portal</a>
            </div>
        </div>
    </div>
</header>
<!-- side nav -->
<div class="the-side-nav">
    <ul id="slide-out" class="side-nav fixed">
        <li class="logo">
            <a href="/" class="brand-logo">
               <img src="{{$user_details["picture"]}}" class="circle"/>
            </a>
            <p class="white-text">{{$user_details["name"]}}</p>
        </li>
        <li><a href="#!" class="white-text">Upload your CV <i class="mdi mdi-cloud-upload"></i></a></li>
        <li><a href="#!" class="white-text"></a></li>
    </ul>
</div>
<!-- end side nav -->
<main class="content-area">
    <div class="row">
        <div class="col l6 m6 s12">
            <ul class="collection ">
                <li class="collection-header center custom-header"><h4>Newsletters</h4></li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi mdi-cloud-download medium"></i></a>                </li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi mdi-cloud-download medium"></i></a>                </li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi mdi-cloud-download medium"></i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi mdi-cloud-download medium"></i></a>
                </li>
            </ul>

        </div>
    </div>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">

            <div class="col l4 m4 s12">
                <h5 class="white-text">Contacts</h5>
                <ul class="links">
                    <li><a class="grey-text text-lighten-3 phone" href="tel:0700 000 000"><i
                                    class="mdi mdi-phone ico"></i>0700 000 000</a></li>
                    <li><a class="grey-text text-lighten-3 email" href="mailto:#"><i class="mdi mdi-email ico"></i>info@asauon.or.ke</a>
                    </li>
                    <a href="#" class="fb"><i class="mdi mdi-facebook-box medium "></i></a>
                    <a href="#" class="twitter"><i class="mdi mdi-twitter medium "></i></a>
                    <a href="#" class="ig"><i class="mdi mdi-instagram medium"></i></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © Copyright
            <script>document.write(new Date().getFullYear())</script>
            <div class="right"> Accounting Students Association(ASA)</div>
        </div>
    </div>
</footer>
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<!-- build:js(.) scripts/vendor.js -->
<!-- bower:js -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<!-- endbower -->
<!-- endbuild -->
<script src="bower_components/materialize/bin/materialize.js"></script>
<script src="scripts/jquery.bxslider.min.js"></script>
<script src="scripts/jquery.easing.1.3.js"></script>

<script src="scripts/unoSlider.min.js"></script>
<!--
<script src="bower_components/gamma/js/jquery.history.js"></script>
<script src="bower_components/gamma/js/jquery.masonry.min.js"></script>
<script src="bower_components/gamma/js/jquerypp.custom.js"></script>
<script src="bower_components/gamma/js/js-url.min.js"></script>
<script src="bower_components/gamma/js/modernizr.custom.70736.js"></script>
-->

<!-- build:js({app,.tmp}) scripts/main.js -->
<script src="scripts/main.js"></script>
<!-- endbuild -->
<script src="scripts/app.js"></script>
</body>
</html>

