<?php
//Calcular le promedio del peso de 5 pesrsonas x medio array
$promedio=0;
$bajo=0;
$alto=0;
$Pesos[0]=62.5;
$Pesos[1]=95.5;
$Pesos[2]=70.2;
$Pesos[3]=55.5;
$Pesos[4]=92.6;
//echo count($Pesos);

for($i=0;$i<count($Pesos);$i++)
{
	//acumulador
  $promedio = $promedio + $Pesos[$i];
}

$pro = $promedio/5;

for($i=0;$i<count($Pesos);$i++){
if($Pesos[$i] > $pro)
{
	$alto++;
}
else
{
	$bajo++;
}
}

echo "el promedio registrado es:".$pro;
echo "<br>";
echo "Por encima del promedio :".$alto;
echo "<br>";
echo "Por debajo del promedio :".$bajo;
?>