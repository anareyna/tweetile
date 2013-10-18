<html>
<head>

    <title>Tweets</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
    <meta charset="utf-8">
</head>
<body>

<div id="twitter-feed">
                 <span id="letras"></span>
                <form name="tweet_post" method="post" style="width: 400px; margin: 0pt auto;clear:right;">
                    <textarea rows="4" cols="49" name="tweet_txt" id="tweet_txt" onKeyUp="contar(this);"></textarea>
                        <input type="hidden" name="reply_id" id="t_reply"/>
                    <button id="tweet_submit" class="tweet_button">Submit</button>
                </form>
 
               <ul class="t_tab">
            <li class="t_selected" id="#t_timeline">Timeline</li>
            <li id="#t_mentions">@Mentions</li>
            <li id="#t_messages">Messages</li>
        </ul>
 
               <div id="t_timeline" class="tab_content">
               <ul>
                   <li>
            <div class="foto">
                <img src="" alt="" width="" /> 
            </div>
            <a href="" title="">Nombre de usuario Twitter</a>
            <br/>Texto del tweet<br/>
                        <div style="text-align:right">
                 <a href="#" onClick="javascript:">Reply</a>
            </div>
         </li>
           </ul>
          </div>
 
<div style="clear: both;"></div>
</div>

<script>
/*    $(document).ready(function()
    {
    var hash = window.location.hash.substr(1);
    var href = $('ul.tabs li a').each(function(){
        var href = $(this).attr('href');
        href=href.substr(1);
        if(hash==href){
            $(".tab_content").hide();
            $("ul.tabs li").removeClass("active");
            $(this).parent('li').addClass("active");
            $('#'+hash).fadeIn();
        }                                           
    })
 
 
    $("ul.tabs li").click(function()
       {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
 
        var content = $(this).find("a").attr("href");
        $(content).fadeIn();
        return false;
    });
}); */

<script type="text/javascript">
   $(document).ready(function(){
       
        $("ul.t_tab li").click(function()     //cada vez que se hace click en un li
       {
        $("ul.t_tab li").removeClass("t_selected"); //removemos clase active de todos
        $(this).addClass("t_selected"); //añadimos a la actual la clase active
        $(".tab_content").hide(); //escondemos todo el contenido
 
        var content = $(this).attr("id"); //obtenemos el atributo id
        $(content).fadeIn(); // mostramos el contenido
        return false; //devolvemos false para el evento click
    });

   
                    
});

function replyTo(id,name){
            $('#t_reply').val(id);
            $('#tweet_txt').val("@"+name+" ").focus();
            
            return false;
}
function contar(input) {
//Comprobamos que no pase de 140 caracteres y si pasa, que borre los sobrantes
if (input.value.length >= 140) {
input.value = input.value.substring(0,140);
}
//alamacenamos el resto
var resto = 140 - input.value.length;

//imprimimos los caracteres restantes en el span
var final=document.getElementById('letras');
final.innerHTML=resto;

}
</script>
<script type="text/javascript">
function contar(input) {
//Comprobamos que no pase de 3000 caracteres y si pasa, que borre los sobrantes
if (input.value.length >= 140) {
input.value = input.value.substring(0,140);
}
//alamacenamos el resto
var resto = 140 - input.value.length;

//imprimimos los caracteres restantes en el span
var final=document.getElementById('letras');
final.innerHTML=resto;

}

</script>
</script>
</body>
</html>