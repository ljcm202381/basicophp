<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conteo</title>
</head>
<body>
<h1>CONTEO DE PUNTOS</h1>

<?php
 $Num = rand(1,10);
 $Total = 0;
 $pares = 0;
 $impares = 0;
 $minimo = 7;
 $maximo = 0;

 if($Num == 1)
 {
	echo "<h2>$Num dado</h2>\n";
 } else {
    echo "<h2>$Num dado</h2>\n";
}
echo "\n";
for($i=0;$i < $Num; $i++)
{
	$dado = rand(1,6);
	echo "<img src=\"img/$dado.svg\" width=\"120\" height=\"120\">\n";
    if ($dado % 2) {
        $impares += 1;
    } else {
        $pares += 1;
    }
     if ($dado > $maximo) {
        $maximo = $dado;
    }
    if ($dado < $minimo) {
        $minimo = $dado;
    }
	$Total += $dado;

}
echo "<br>";
echo "El total de puntos son:".$Total;
echo "<br>";
if ($pares == 1) {
   echo "1 número par </p>\n";
} else {
   echo "$pares números pares  </p>\n";
}
if ($impares == 1) {
   echo "1 número impar.</p>\n";
} else {
   echo "$impares números impares.</p>\n";
}
echo "El valor más pequeño obtenido es <strong>$minimo</strong>.</p>\n";
echo "El valor más grande obtenido es <strong>$maximo</strong>.</p>\n";



?>
</body>
</html>