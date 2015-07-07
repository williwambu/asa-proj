<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>ASA Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="../bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->

    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="../bower_components/materialize/dist/css/materialize.min.css">
      <link rel="stylesheet" href="../styles/main.css">
    <!-- endbuild -->
    <!-- build:js scripts/vendor/modernizr.js -->
      <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/modernizr/modernizr.js"></script>
      <script src="../bower_components/trumbowyg/dist/trumbowyg.min.js"></script>
    <!-- endbuild -->

  </head>
  <body ng-app="app">

        <div>
            @yield('content')
        </div>
        {{HTML::script('/bower_components/angular/angular.min.js')}}
        {{HTML::script('/bower_components/jquery/dist/jquery.min.js')}}
        {{HTML::script('/bower_components/materialize/dist/js/materialize.min.js')}}
        {{HTML::script('/bower_components/trumbowyg/dist/trumbowyg.min.js')}}
        {{HTML::script('/scripts/main.js')}}
</body>
</html>
