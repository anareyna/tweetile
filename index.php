<!DOCTYPE html>
<html>
<head>
  
    <title>Tweetile</title>
    <meta name="description" content="A different way to display and experience your Twitter timeline!">
    <meta name="author" content="Ana Reyna @anareyna">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Le styles -->
    <link href="./css/normalize.css" rel="stylesheet">
    <link href="./css/superslides.css" rel="stylesheet">
    <link href="./css/splash.css" rel="stylesheet">
</head>
<body>
   

  <div id="slides">
    <ul class="slides-container">
      <li>
        <img src="img/splash0.jpg" alt="">
        <div class="container-splash">
          <h1>Welcome to Tweetile</h1>
          <div class="contrast">
            <p>Discover a different way to display and experience your Twitter timeline!</p>
            <p><i>by</i> <a href="http://www.twitter.com/anareyna" target="_blank">@anareyna</a></p>
            <p>
              <a class="btn btn-large btn-primary" href="redirect.php"><i class="icon-twitter"></i>Sign in with Twitter</a> <span style="font-size: 14px">or <a href="demo.php">View Demo</a></span>
            </p>
          </div>
        </div>
      </li>
      <li>
        <img src="img/splash2.jpg" alt="">
        <div class="container-splash">
          <h1>It's responsive.</h1>
          <div class="contrast">
            <p>
              Images are smartly centered in the viewport. Use Tweetile in your mobile device.
            </p>
          </div>
        </div>
      </li>     
    </ul>
    <nav class="slides-navigation">
      <a href="#" class="next">
        <i class="icon-chevron-right"></i>
      </a>
      <a href="#" class="prev">
        <i class="icon-chevron-left"></i>
      </a>
    </nav>
  </div>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.7.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/application.js"></script>
    <script src="./js/jquery.animate-enhanced.min.js"></script>    
    <script src="./js/jquery.easing.1.3.js"></script>
    <script src="./js/jquery.superslides.js"></script>

  
      <script type="text/javascript">
        $('document').ready(function(){
              
              $('#toggle-gallery').click(function() {
                if ($('#gallery').is(':visible')) {
                  $('#popup').hide();
                  $('#gallery').superslides('destroy');
                  $('#backslides').superslides('start');
                } else {
                  $('#popup').show();
                  $('#gallery').superslides();
                  $('#backslides').superslides('stop');
                }

              });

              $('#backslides').superslides({
                play: 5000,
                pagination: false,
                navigation: false
              });

        });


      </script>

      <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-25374375-1']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
    </script>
   
  </body>
</html>
