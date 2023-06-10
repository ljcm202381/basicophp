<?php

 class Persona
 {
    //Definir los atributos
   public $Nombre;
   public $Apellido;
   public $Estatura;
   public $Edad;
   public $Genero;

    //Definir metodos

   public function cantar($Nom)
   {
      
      $this->Nombre=$Nom;
      echo $this->Nombre;
      echo "<br>";
      echo "Estoy cantando";

   }

   public function hablar($Ape)
   {
   	  $this->Apellido=$Ape;
   	  echo "<br>";
   	  echo $this->Apellido;
   	  echo "<br>";
   	  echo "voy a pedir la palabra";
   }

   public function caminar($ed)
   {
      echo "<br>"; 
   	  $this->Edad=$ed;
   	  echo $this->Edad;
   	  echo "<br>";
   	echo "Es la edad para caminar mas rapido";
   }

 }
 //crear objetos

 $apre = new Persona();
 $apre->cantar("Johanna");
 $apre->hablar("Cifuentes");
 $apre->caminar(15);


?>