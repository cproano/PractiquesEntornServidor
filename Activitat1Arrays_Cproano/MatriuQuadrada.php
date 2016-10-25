<?php
//Executar apartat a)
$MatriuQuadrada = CrearMatriuQuadrada(11);
//Executar apartat b)
PrintarMatriu($MatriuQuadrada);
print_r("<br>");
//Executar apartat c)
PrintarMatriu(RetornaMatriuGirada($MatriuQuadrada));

//Apartat a)
function CrearMatriuQuadrada($NumPosicions){
	$MatriuQuadrada = array(array());
	
	for($i = 0; $i < $NumPosicions; $i++){
		for($j = 0; $j < $NumPosicions; $j++){
			if($i === $j){
				$MatriuQuadrada[$i][$j]= "*";
				//print_r($MatriuQuadrada[$i][$j]." ");
			}else{
				if($j > $i){
					$MatriuQuadrada[$i][$j] = sum($j, $i); //sum($j, $i) -> Mètode creat per realitzar la suma.
					//print_r($MatriuQuadrada[$i][$j]." ");
				}else{
					$MatriuQuadrada[$i][$j]= rand(10,20);	
					//print_r($MatriuQuadrada[$i][$j]." ");
					
				}
			}
		}
		//print_r("<br>");
	}
	return $MatriuQuadrada;
}

//Apartat b)
function PrintarMatriu($MatriuQuadrada){
	$NumPosicions = count($MatriuQuadrada[0]);
	print_r("<table>");
	for($i = 0; $i < $NumPosicions; $i++){
		print_r("<tr>");
		for($j = 0; $j < $NumPosicions; $j++){
			print_r("<td style=\"border-style:solid\">".$MatriuQuadrada[$i][$j]."</td>");
		}
		print_r("</tr>");
	}		
	print_r("</table>");
}
function sum($PrimerValor, $SegonValor){
	return $PrimerValor + $SegonValor;
}
//Apartat c)
function RetornaMatriuGirada($MatriuQuadrada){
	$MatriuQuadradaGirada = array(array());
	$NumPosicions = count($MatriuQuadrada[0]);
	for($i = 0; $i < $NumPosicions; $i++){
		for($j = 0; $j < $NumPosicions; $j++){
			$MatriuQuadradaGirada[$i][$j] = $MatriuQuadrada[$j][$i];
			$MatriuQuadradaGirada[$j][$i] = $MatriuQuadrada[$i][$j];
		}
	}
	return $MatriuQuadradaGirada;
}
?>