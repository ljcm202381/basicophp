<?php
$promedio =0;
$promedio1 = 0;

$Estudiantes = array('Carlos' => 5,'Andres' => 4,'Johanna'=> 6 , 'Jostin' => 9,'Lucy' => 5);
foreach ($Estudiantes as $key => $value) {
  echo "La nota del estudiante : ".$key." su valor es: ".$value;
  echo "<br>";

  $promedio = $promedio + $value;
}
$pro = $promedio/count($Estudiantes);
  echo "<br>";
  

echo "El promedio del grupo A es: ".$pro;
  echo "<br>";
    echo "<br>";
$Estudiantes1 = array('Janeth' => 2,'Felipe' => 9,'Leidy'=> 5, 'Carlos' => 3,'Pedro' =>2);
foreach ($Estudiantes1 as $keys => $values) {
  echo "La nota del estudiante : ".$keys." su valor es: ".$values;
  echo "<br>";
 $promedio1 = $promedio1 + $values;
   echo "<br>";
}
$proa = $promedio1/count($Estudiantes1);
echo "El promedio del grupo B es: ".$proa;
  echo "<br>";
    echo "<br>";

$pgeneral = ($pro+$proa)/2;
echo "<br>";
    echo "el promedio general de los grupos son: " .$pgeneral;

    echo "<br>";
    echo "<br>";

    if($pro > $proa)
    {
    echo "El grupo con mejor promedio es A";
}else
{
  echo "El grupo con mejor promedio es B";
}

?>