<?php


$Nota1 = $_POST['txtn1'];
$Nota2 = $_POST['txtn2'];
$Nota3 =$_POST['txtn3'];
$Examen = $_POST['txtparcial'];
$trabajo = $_POST['txtfinal'];


$Promedionotas = (($Nota1+$Nota2+$Nota3)/3)*0.35;
echo "El promedio de las 3 notas: ".$Promedionotas;
echo "<br>";

$PromedioExamen = ($Examen * 0.35);
echo "El promedio del examen es: ".$PromedioExamen;
echo "<br>";

$Promediotrabajo = ($trabajo * 0.30);
echo "EL promedio del trabajo es: ".$trabajo;
echo "<br>";

$Notafinal = $Promedionotas+$PromedioExamen+$Promediotrabajo;
echo "La nota final del alumno es: ".$Notafinal;




?>