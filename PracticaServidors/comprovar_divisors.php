<?php

if(isset($_POST["numero"])){
   $numero = $_POST["numero"];
   if(primer($numero)){
      print_r("El número $numero és primer");
   }else{
      print_r("El número $numero no és primer");
   }
   pintarPagina();
}else{
pintarPagina();
}

function pintarPagina(){
print_r("<html>
 <body>
   <h1>COMPROVAR NÚMEROS PRIMERS</h1>
   <form action=\"comprovar_divisors.php\" method=\"POST\">
    <input type=\"text\" name=\"numero\"/>
    <input type=\"submit\" value=\"Comprovar número\"/>
   </form>
   <a href=\"menu.php\">Tornar al menú</a>
</body>
</html>");
}
function primer($num){
    $cont=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            if(++$cont>1)
                return false;
        }
    }
    return true;
}
?>

