<?php
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 1:32 PM
 */
 ?>

 <html lang="en">

   <head>
     <meta charset="utf-8">
     <title>Template &middot; Bootstrap</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="">

     <!-- Le styles -->
     <link href="../assets/css/bootstrap.css" rel="stylesheet">
     <style type="text/css">
       body {
         padding-top: 20px;
         padding-bottom: 40px;
       }

       /* Custom container */
       .container-narrow {
         margin: 0 auto;
         max-width: 700px;
       }
       .container-narrow > hr {
         margin: 30px 0;
       }

       /* Main marketing message and sign up button */
       .jumbotron {
         margin: 60px 0;
         text-align: center;
       }
       .jumbotron h1 {
         font-size: 72px;
         line-height: 1;
       }
       .jumbotron .btn {
         font-size: 21px;
         padding: 14px 24px;
       }

       /* Supporting marketing content */
       .marketing {
         margin: 60px 0;
       }
       .marketing p + h4 {
         margin-top: 28px;
       }
     </style>
     <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
     <!--[if lt IE 9]>
       <script src="../assets/js/html5shiv.js"></script>
     <![endif]-->

     <!-- Fav and touch icons -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                    <link rel="shortcut icon" href="../assets/ico/favicon.png">
   </head>

    <body>

        <div class="container-narrow">

            <div class="masthead">
                <h3 class="muted">TodoVel</h3>
            </div>

            <hr>

            <div class="jumbotron">
                <h5>@yield('title')</h5>
            </div>

            <hr>

            @yield('content')

            <hr>

            <div class="footer">
                <p>&copy; Jhonathan Wyterlin Inc. 2014</p>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap-transition.js"></script>
        <script src="../assets/js/bootstrap-alert.js"></script>
        <script src="../assets/js/bootstrap-modal.js"></script>
        <script src="../assets/js/bootstrap-dropdown.js"></script>
        <script src="../assets/js/bootstrap-scrollspy.js"></script>
        <script src="../assets/js/bootstrap-tab.js"></script>
        <script src="../assets/js/bootstrap-tooltip.js"></script>
        <script src="../assets/js/bootstrap-popover.js"></script>
        <script src="../assets/js/bootstrap-button.js"></script>
        <script src="../assets/js/bootstrap-collapse.js"></script>
        <script src="../assets/js/bootstrap-carousel.js"></script>
        <script src="../assets/js/bootstrap-typeahead.js"></script>

    </body>

 </html>