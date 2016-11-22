<?php

if(isset($_POST["numero"])){

  $numero = $_POST["numero"];

  $numeroMesGran = conjeturaCollatz($numero);

 print_r("<h1>El número més gran de $numero és $numeroMesGran</h1>");
}
printForm();



function conjeturaCollatz($numero){
  $numeroGran;   
  if(multipleDos($numero) ||$numero == 1){
         $numeroGran = $numero;
  }else{
    while($numero != 1){
    if(parell($numero)){
         $numero = $numero / 2;
      }else{
        $numero = 3 * $numero + 1;
        if($numero > $numeroGran){
           $numeroGran = $numero;
        }
      }
    }
  }    
  return $numeroGran;
}
function multipleDos($numero){
  if($numero % 2 > 0){
    return false;
  }else{
    if($numero == 2){
      return true;
    }else{
      return multipleDos($numero / 2);
    }
  }
}
function parell($numero){
  return $numero % 2 == 0;
}
function printForm(){
print_r("<html>
<body>
<h1>CONJETURA COLLATZ!</h1>
<form action=\"conjetura_collatz.php\" method=\"POST\">
<input type=\"text\" placeholder=\"Número\" name=\"numero\"/>
<input type=\"submit\" value=\"Conjetura collatz!\"/>
</form>
<a href=\"menu.php\">Tornar al menú</a>
</body>
</html>");
}

?>
