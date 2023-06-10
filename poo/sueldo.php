<?php

class Empleado
{
	private $Nombree;
	private $Sueldoe;

	public function __construct($nome,$suee)
	{
       $this->Nombree=$nome;
       $this->Sueldoe=$suee;
	}

	public function impuestos()
	{
		echo "<br>";
		echo $this->Nombree;
		echo "<br>";
		if($this->Sueldoe > 2000000)
		{
			echo "Debe pagar impuestos";
		}else
		{
			echo "No paga impuestos";
			echo "<br>";
		}
	}
}
$emple1 = new Empleado("Felipe",1500000);
$emple1->impuestos();
$emple2 = new Empleado("Tomas",2500000);
$emple2->impuestos();


?>