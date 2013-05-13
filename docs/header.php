<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/select2.css" rel="stylesheet">
    <link href="assets/css/todc-bootstrap.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->


    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <link href="assets/css/todc-bootstrap.css" rel="stylesheet"></head>


    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>

      <script>
        $('#blue-drop-button').click(function() {
          $('.menu-li').toggle()
        });
      </script>

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container height-100" id="header-top">
          <img src="assets/img/logo.png" id="header-logo" class="pull-left">
          <div class="pull-right" id="top-buttons">
            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                My Account
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>Callum</li>
                <li>Logout</li>
              </ul>
            </div>
            <button type="button" class="btn btn-primary" id="add-studio-button">Add A Studio</button>
          </div>
        </div>
      </div>
      <div id="blue-nav">
        <div class="container">
          <ul class="inline-ul" id="header-menu">
            <li class="search-li">
              <input type="search" placeholder="Search" id="site-search"><i class="icon-align-justify icon-15x pull-right icon-white" id="blue-drop-button"></i>
            </li>            
            <li class="menu-li"><a href="#">Home</a></li>
            <li class="menu-li"><a href="#">Stretch</a></li> <!-- This will link to search results with studios that do Stretch (yoga) -->
            <li class="menu-li"><a href="#">Dance</a></li>  <!-- This will link to search results with studios that do Dance -->
            <li class="menu-li"><a href="#">Train</a></li>  <!-- This will link to search results with studios that do Train (personal training) -->
            <li class="menu-li"><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
    </div>