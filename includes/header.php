<? session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tweetile</title>


    <meta name="description" content="A different way to display and experience your Twitter timeline!">
    <meta name="author" content="Ana Reyna @anareyna">

    <!-- Le styles -->
    <link href="./css/superslides.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>



    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
    </style>




    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./img/favicon.ico">
    <? include_once('twitter_init.php'); ?>
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>      
          <a class="brand" href="./stream.php"><img src="./img/logo-white.png"></a>
          <div class="nav-collapse">
            <ul class="nav"><!--
              <li><a href="#"><i class="icon-comment icon-white"></i> Mentions</a></li>
              <li><a href="#"><i class="icon-envelope icon-white"></i> Messages</a></li>
              <li><button class="btn btn-mini btn-primary" type="button"><i class="icon-edit icon-white"></i> New tweet</button></li>-->
             
            <!--  <li>
                <form class="navbar-search">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
              </li>  -->
            </ul>
            <ul class="nav pull-right">
              <li><a href="clearsessions.php"><i class="icon-off icon-white" style="padding-right:5px;"></i>Sign out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>