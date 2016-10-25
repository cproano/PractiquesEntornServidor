<?php
//Executem la funció amb una variable que no és un array
$array = "patata";
$arrayRetorn = FactorialArray($array);
if(is_array($arrayRetorn)){
	print_r("És un array i és array d'enters. Printant resultats... ".$arrayRetorn);
}else if(!$arrayRetorn){
	print_r("\"".$array ."\""." No és un array.");
}
print_r("<br>");
//Executem la funció amb una variable que si és un array
$array = array(1,2,3,4,5);
$arrayFactorial = FactorialArray($array);
print_r("És un array i és array d'enters. Printant resultats... ");
print_r($arrayFactorial);
print_r("<br>\n\nFinalitzant programa...");

function FactorialArray( $array ) {
	$arrayRetorn = [];
	if(is_array($array)){
		for($i = 0; $i < count($array); $i++){
			$num = $array[$i]; 
			if(is_int($num)){
				$arrayRetorn[$num] = factorial($num);	
			}
		}
		return $arrayRetorn;
	}else{
		return false;
	}
}
function factorial( $num ){
	if($num === 0) return 1;
	return $num*factorial($num - 1);
}
?>