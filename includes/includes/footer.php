    <footer>
      <br>
        <center><p>&copy; 2012. Tweetile by <a href="http://www.twitter.com/anareyna">@anareyna</a></p></center>
      </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.7.1.min.js"></script>

    <script src="./js/bootstrap.js"></script>

    <script src="./js/jquery.embedly.js"></script>

    <script src="./js/jquery.masonry.js"></script>

  
      <script type="text/javascript">
        $('document').ready(function(){
              $('.tweet-text').find('a').not('.username, .ht').embedly({
                maxWidth: 280,
                wmode: 'transparent',
                method: 'afterParent',
                words: 20,
                width: 280,
                key:':cd54253e69944ae18ad5ece38b4d0e1e' //temporal
              }).bind('embedly-oembed',function(){    
                  var $container =  $('#main-container');
                  $container.imagesLoaded( function(){
                      $container.masonry({
                        itemSelector: '.tweet-item',
                        isAnimated: true,
                        isFitWidth: true
                      });
                  });

              });

        });


      </script>

   
  </body>
</html>
