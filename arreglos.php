<?php
/*$dia[0]= "Lunes";
$dia[1]= "Martes";
$dia[2]= "Miercoles";
$dia[3]= "Jueves";
$dia[4]="Viernes";
$dia[5]= "sabado";
$dia[6]= "Domingo";

echo $dia[1];
echo "<br>";
echo count($dia);
echo "<br>";
*/
$autos = array("Mazda","Toyota","BMW");

//echo "las marcas de auto son:".$autos[0]." ".$autos[1]." ".$autos[2];
$tan=count($autos);
for($x=0; $x<$tan;$x++)
{
 echo $autos[$x];
 echo "<br>";
}

//arreglos asociativos

$registros = array('Docu' => 40414,'Nombre' => "Felipe", 'Direccion' => "Cenigraf");

echo $registros['Docu'];

$articulos = array('Codigo' => 100,'Nombrep' => "Fresas",
'Precio' => 7000);
foreach ($articulos as $key => $value) {
	echo "para la llave :".$key."su valo es:".$value;
	echo "<br>";
}


$aprendices = array('Docu' => 28540,'NombreA'=>"Edna",
'Programa'=> "adso",'trimestre' =>5);

foreach($aprendices as $fi => $valor)
{
	echo "Para los datos :" .$fi. " su valor es: ".$valor;
	echo "<br>";
}
$suma=0;
$numeros = array('Numero1' =>1,'Numero2'=>2,'Numero3' => 3,
'Numero4'=>4,'Numero5'=>5);

foreach($numeros as $sumar => $valor)
{
	$suma = $suma+$valor;
}
 echo "La suma es: " . $suma;





?>