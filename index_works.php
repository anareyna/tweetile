<? session_start();?>
<html>
<head>
 <meta charset="utf-8">
   <title>Como Crear una aplicación de  Twitter con PHP + OAuth</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css"> 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
$('#letras').html(resto);
 
}
</script> 
<?
include_once('twitter_init.php');
?>
</head>
  <body>
  <div id="header">
</div>
    <div id="twitter-feed">
<? echo $twitter_content;?>
 
        <div style="clear: both;"></div>
    </div>
 
</body>
</html>