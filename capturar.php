<?php
$Nom = $_POST['txtnom'];
//$Ed = $_POST['txtedad'];
$Esta = $_POST['txtesta'];
$Estado = $_POST['txtestado'];
$fecha = $_POST['txtfecha'];
$fechaEntero = strtotime($fecha);
$anio = date("Y", $fechaEntero);
$mes = date("m", $fechaEntero);
$dia = date("d", $fechaEntero);
$anitoa = date("Y");
$Ed = $anitoa - $anio;
/*

echo $Nmes
echo "<br>";
echo $Ed;
echo "<br>";
echo $Esta;
echo "<br>";
echo $Estado;*/

echo $fecha;
echo "<br>";
echo $anio;
echo "<br>";
echo $mes;
echo "<br>";
echo $dia;
echo "<br>";
if($Estado=="soltero")
{
	echo "Su Nombre :".$Nom."<br>"."Su edad :".$Ed;
}
else if($Estado=="casado")
{
  echo "Su Nombre : ".$Nom."<br>"."Su Estatura :".$Esta;
}
else if($Estado=="union libre")
{
	echo "Su Edad : " .$Ed."<br>"."Su Estatura :".$Esta;
}

echo "<br>";
switch ($mes) {
	case 1:
		if($dia <= 20)
		{
			echo "Su signo es capricornio";
		}
		else 
		{
			echo "Su signo es Acuario";
		}
		break;
	case 2:
	     if($dia<=18)
	     {
	     	echo "Su signo es Acuario";
	     }
	     else
	     {
	     	echo "Su signo es Piscis";
	     }
break;
	case 3:
	     if($dia <= 20)
	     {
	     	echo "Su signo es Piscis";
	     }
	     else 
	     {
	     	echo "Su signo es Aries";
	     }

break;
	
	case 4:
	    if($dia<=20)
	    {
	    	echo "Su signo es Aries";
	    }
	    else{
             echo "Su signo es Tauro";
	        }
	     break;
	case 5:
	    if($dia<=21)
	    {
	    	echo "Su signo es Tauro";
	    } 
	    else {
	    	echo "Su signo es Geminis";
	    }      
	default:
		echo "usted no ha seleccionado la fecha de nacimiento";
		break;
}

?>