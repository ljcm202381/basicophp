<?php

class Empleado
{
  //atributos globales
  private $Nombre;
  private $Apellido;
  private $Edad;


  //Constructor

  public function __construct()
  {
   //$this->Nombre=$Nom;
   //$this->Apellido=$Ape;
   //$this->Edad=$Edad;
  }


  public function inicializar($Nom,$Ape,$Edad)
  {
   echo $this->Nombre=$Nom;
   echo $this->Apellido=$Ape;
   echo $this->Edad=$Edad;
  }

  public function setNombre($Nombre)
  {
  	$this->Nombre=$Nombre;
  }
  public function getNombre()
  {
  	return $this->Nombre;
  }
  public function setApellido($Ape)
  {
  	$this->Apellido=$Ape;
  }
  public function getApellido()
  {
  	return $this->Apellido;
  }
  public function setEdad($Ed)
  {
  	$this->Edad=$Ed;

  }
  public function getEdad()
  {
  	return $this->Edad;
  }




}

class Supervisor extends Empleado
{
   protected $Sueldo;

	public function cargarsueldo($sue)
	{
      $this->Sueldo=$sue;
	}
	
	public function impuesto()
	{
		if($this->Sueldo > 500000)
		{
			echo "Debe pagar impuestos";
		}
		else 
		{
			echo "No debe pagar impuesto";
		}
	}

}

//crear un objeto

$empleado = new Empleado();
$empleado->setNombre("Felipe");
echo $empleado->getNombre();
echo "<br>";
$empleado->setApellido("Martinez");
echo $empleado->getApellido();
echo "<br>";
$empleado->setEdad(25);
echo $empleado->getEdad();
echo "<br>";
$empleado1 = new Empleado();
echo "<br>";
$empleado1->inicializar("Tomas","Gomez",45);
echo "<br>";

echo "creacion de otro objeto con herencia";

$empleado2 = new Supervisor();
echo "<br>";
$empleado2->inicializar("Nicolas","Cifuentes",40);
echo "<br>";
$empleado2->cargarsueldo(600000);
echo "<br>";
$empleado2->impuesto();

?>