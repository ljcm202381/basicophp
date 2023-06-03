<?php

$promedio=0;
$NotasA[0]=5;
$NotasA[1]=6;
$NotasA[2]=8;
$NotasA[3]=9;
$NotasA[4]=3;

$promedio1=0;
$NotasB[0]=3;
$NotasB[1]=7;
$NotasB[2]=8;
$NotasB[3]=9;
$NotasB[4]=2;

//echo count($Pesos);

for($i=0;$i<count($NotasA);$i++)
{
	//acumulador
  $promedio = $promedio + $NotasA[$i];
}

$pro = $promedio/count($NotasA);


for($y=0;$y<count($NotasB);$y++)
{
	$promedio1 = $promedio1 + $NotasB[$y];
}
$pro1 = $promedio1/count($NotasB);
$general = ($pro+$pro1)/2;
echo "el promedio registrado del 1 grupo es:".$pro;
echo "<br>";
echo "el promedio registrado del 2 grupo es:".$pro1;
echo "<br>";
echo "El promedio general es:".$general;
echo "<br>";
if ($pro > $pro1)
{
	echo "El grupo con mejor promedio es A";
}else
{
	echo "El grupo con mejor promedio es B";
}
?>