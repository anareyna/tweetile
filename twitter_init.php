<?
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
//ini_set( 'error_reporting', E_ALL );
 
 
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
 
  
   $twitter_content='<div class="tweet_login"><a href="redirect.php"><img src="http://hq.graphdeal.com/images/twitter_connect_button.gif" alt="Sign in with Twitter"/></a></div>';
				}else{



				/* Recuperar los datos de la session. */
				$access_token = $_SESSION['access_token'];
 
				/* Creamos el objeto twitterOauth. */
				$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
 
				/* Verificamos credenciales. */
				$content = $connection->get('account/verify_credentials');
 
 
				/* Formulario */
			//	$twitter_content='<span id="letras"></span>
              //  <form name="tweet_post" method="post" style="width: 400px; margin: 0pt auto;clear:right;">
                //	<textarea rows="4" cols="49" name="tweet_txt" id="tweet_txt" onKeyUp="contar(this);"></textarea>
				//		<input type="hidden" name="reply_id" id="t_reply"/>
                //	<button id="tweet_submit" class="tweet_button">Submit</button>
                //</form>
				//';
				/* Si hay un mensaje nuevo lo publicamos */
				/*
				if(isset($_POST['tweet_txt'])){
						/* En caso de ser respuesta, publicarlo como tal */
					/*	if(isset($_POST['reply_id'])){
							$connection->post('statuses/update', array('status' => $_POST['tweet_txt'],'in_reply_to_status_id' => $_POST['reply_id'] ));
						}else{
							$connection->post('statuses/update', array('status' => $_POST['tweet_txt']));
						}
 
				} */
				/*Función que añade los links */
				function twitify($string){
					$t= preg_replace('/(http|https)(:\/\/)([^ ]+)/i', '<a href="$1$2$3" target="_blank">$1$2$3</a>', $string);
 
					$t=  preg_replace('/@([^ :]+)/i', '<a href="http://twitter.com/$1" target="_blank" class="username">@$1</a>', $t);
					$t=  preg_replace('/#([^ :]+)/i', '<a href="http://search.twitter.com/search?q=%23$1" target="_blank" class="ht">#$1</a>', $t);
					return $t;
				}
 
 
				/* Obtenemos el timeline */
				$t = $connection->get('statuses/home_timeline', array('count' => 40));					
				

				foreach($t as $k=>$val){
 
					$twitter_content.=
					'
					     
						 <div class="tweet-item">
	                  		<div class="stream-item-header">
			                    <small class="time"></small>
			                    
			                    <a href="#" class="account-group" >
			                    	<img src="'.$val->user->profile_image_url.'" alt="'.$val->user->name.'" width="48px" class="avatar" /> 
			                      	<strong class="fullname"><a href="http://twitter.com/'.$val->user->screen_name.'" title="'.$val->user->name.'">'.$val->user->name.'</a></strong>
			                      	<span></span>
			                      	<span class="username">@'.$val->user->screen_name.'</span>
			                    </a>
		                  	</div>
			                  <p class="tweet-text">'
			                  .twitify($val->text).
			                  '</p>
			                  <div class="stream-item-footer">
			                    <span class="number">1</span>
			                  </div>
		                </div>
		             ';
 
				}
				//
				

				/* 
				$t = $connection->get('statuses/mentions', array('count' => 20));  
				$twitter_content.='<div id="t_mentions" class="tab_content" style="display:none;"><ul>';
				foreach($t as $k=>$val){
 
					$twitter_content.='<li>
					<div class="foto">
						<img src="'.$val->user->profile_image_url.'" alt="'.$val->user->name.'" width="48px" />
					</div> 
					<a href="http://twitter.com/'.$val->user->screen_name.'" title="'.$val->user->name.'">'.$val->user->name.'</a>
					<br/>'.twitify($val->text).'<br/>
					<div style="text-align:right">
						<a href="#" onClick="javascript: replyTo(\''.$val->id.'\',\''.$val->user->screen_name.'\');">Reply</a>
					</div>
					</li>';
 
				}
				$twitter_content.='</ul></div>';	
 				
 				/* 
				/* Mensajes directos */	
				/*
				$t = $connection->get('direct_messages', array('count' => 20));  
				$twitter_content.='<div id="t_messages" class="tab_content" style="display:none;"><ul>';
				foreach($t as $k=>$val){
 
					$twitter_content.='<li>
					<div class="foto">
						<img src="'.$val->sender->profile_image_url.'" alt="'.$val->sender->name.'" width="48px" />
					</div> 
					<a href="http://twitter.com/'.$val->sender->screen_name.'" title="'.$val->sender->name.'">'.$val->sender->name.'</a>
					<br/>'.twitify($val->text).'<br/>
					<div style="text-align:right">
						<a href="#" onClick="javascript: replyTo(\''.$val->id.'\',\''.$val->sender->screen_name.'\');">Reply</a>
					</div>
					</li>';
 
				}
				$twitter_content.='</ul></div>';	
 
 				*/
				}
				?>