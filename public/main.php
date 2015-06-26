<!doctype html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <title>ASA | Accounting Students Association</title>
    <meta name="description" content="Accounting Students Association">
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
<header>
    <div class="navbar-fixed" ng-controller="homeCtrl">
        <nav>
            <div class="nav-wrapper">
                <a href="#/">
                    <img src="images/logo.jpg" class="brand-logo"/>
                </a>
                <ul id="slide-out" class="side-nav right">
                    <li><a ng-href="#/">Home</a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header">ASA Team<i class="mdi-navigation-arrow-drop-down"></i></a>

                                <div class="collapsible-body">
                                    <ul>
                                        <li><a ng-href="#executive">Team 1</a></li>
                                        <li><a ng-href="#directors">Team 2</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li><a ng-href="#gallery">Gallery</a></li>
                    <li><a href="#login-modal" data-target="login-modal" ng-click="open()">Login</a></li>
                    <li><a ng-href="#contact">Contact Us</a></li>
                </ul>
                <!-- end sidebar -->
                <!-- nav menu-->
                <ul class="right hide-on-med-and-down">
                    <li><a href="#/">Home</a></li>
                    <li><a class="dropdown-button" data-activates="team">ASA Team<i
                                class="mdi-navigation-arrow-drop-down right"></i></a>
                        <ul id='team' class='dropdown-content'>
                            <li><a ng-href="#executive">Team 1</a></li>
                            <li class="divider"></li>
                            <li><a ng-href="#directors">Team 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#login-modal" data-target="login-modal" ng-click="open()">Login</a></li>
                    <li><a href="#contact">Contacts Us</a></li>

                </ul>
                <!-- nav menu -->
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>
    </div>
</header>
<main>
    <div ng-view>

    </div>
</main>
<div class="row">
    <div class="col s12 l6 m6 modal offset-l3 offset-l3" id="login-modal">
        <div>
            <div class="modal-content">
                <h4 class="center">Login to ASA</h4>

                <p class="black-text light">When you login to our online portal you can:
                <ul>
                    <li>1. Read our monthly newsletter</li>
                    <li>2. Upload your CV for new opportunities.</li>
                    <li>3. And much more ...</li>
                </ul>
                </p>
                <a href="/login-fb" class=" btn waves-effect waves-light fb-btn btn-flat"><i
                        class="mdi mdi-facebook fb-icon left"></i>Login with Facebook</a>
                <a href="/login-google" class="btn waves-effect waves-light google-btn btn-flat"><i
                        class="mdi mdi-google google-icon left"></i>Login with Google</a>
            </div>
        </div>
    </div>
</div>
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
                    <a href="whatsapp://send" data-text="Take a look at this awesome website:" data-href=""
                       class="wa_btn wa_btn_l"
                       style="display:none">Share</a>
                </ul>
            </div>
            <div class="col m4 l4 s12">
                <h5 class="white-text">Site Links</h5>
                <ul class="links">
                    <li><a class="grey-text text-lighten-3 phone" ng-href="#gallery">
                            <i class="mdi mdi-link"></i>Gallery</a>
                    </li>
                    <li><a class="grey-text text-lighten-3 " ng-href="#executive">
                            <i class="mdi mdi-link"></i>Team/Executive</a>
                    </li>
                    <li><a class="grey-text text-lighten-3 " ng-href="#directors">
                            <i class="mdi mdi-link"></i>Team/Directors</a>
                    </li>
                    <li><a class="grey-text text-lighten-3 " ng-href="#contact">
                            <i class="mdi mdi-link"></i>Contact</a>
                    </li>

                </ul>
            </div>
            <div class="col m4 s12 l4">
                <h5 class="white-text">Check out our sponsors</h5>

                <div class="row">
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/kpmg.png"></a>
                    </div>
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/kasneb.png"></a>
                    </div>
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/pwc.jpg"></a>
                    </div>
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/pkf.jpg"></a>
                    </div>
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/youthfund.jpg"></a>
                    </div>
                    <div class="sponsor-small col s4 l4 m4">
                        <a href="#"><img class="sponsor-small-img" src="images/sponsors/icpak.jpg"></a>
                    </div>
                </div>
                <!-- <div class="row">
                     <div class="col s12 l12 m12">
                         Subscribe to our Mailing list for updates
                         <form class="white-text">
                             <div class="input-field">
                                 <label class="">Email</label>
                                 <input name="email" type="email" required>
                                 <button class="btn waves-effect wave-light">subscribe</button>
                             </div>
                         </form>
                     </div>
                 </div>-->
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
<script src="bower_components/gamma/js/jquery.history.js"></script>
<script src="bower_components/gamma/js/jquery.masonry.min.js"></script>
<script src="bower_components/gamma/js/jquerypp.custom.js"></script>
<script src="bower_components/gamma/js/js-url.min.js"></script>
<script src="bower_components/gamma/js/modernizr.custom.70736.js"></script>
<script src="bower_components/whatsapp-sharing/dist/whatsapp-button.js"></script>

<!-- build:js({app,.tmp}) scripts/main.js -->
<script src="scripts/main.js"></script>
<!-- endbuild -->
<script src="scripts/app.js"></script>

<script type="text/javascript">
    if (typeof wabtn4fg === "undefined") {
        wabtn4fg = 1;
        h = document.head || document.getElementsByTagName("head")[0], s = document.createElement("script");
        s.type = "text/javascript";
        s.src = "bower_components/whatsapp-sharing/dist/whatsapp-button.js";
        h.appendChild(s)
    }
</script>
</body>
</html>

