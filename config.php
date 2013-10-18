<?php

/**
 * @file
 * A single location to store configuration.
 */

define('CONSUMER_KEY', '4uxJMZf3Y1lP3w85AuSJZA');
define('CONSUMER_SECRET', 'APNBfzQMYUoonuwTW3t4focUrwlmqWdx8Dvos07n5c');
/*define('OAUTH_CALLBACK', 'http://localhost/tweetilephp/tweetile/callback.php');*/
define('OAUTH_CALLBACK',  "http://" .$_SERVER['HTTP_HOST'].dirname($_SERVER["REQUEST_URI"]).'/callback.php'  );



