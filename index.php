<?php
$persona = [
 'nombre' => 'Jon',
 'apellido' => 'Snow',
 'edad' => 27,
 'hobbies'=> ['netflix','futbol','programar']
];

$persona ['edad'] = 25;

$persona ['direccion']= 'Winterfell';


$persona['hobbies'][] = 'futbol';

var_dump($persona);

 $numero=5;
 $numero2= 7;

 if ($numero2 > $numero) {
   echo "El número mayor es " . $numero2 ;
 }

;
$numeroaleatorio = [ rand(1,5) . "\n"];

if ( $numeroaleatorio == 5  || $numeroaleatorio == 3 ) {
  echo $numeroaleatorio;
} else {
  echo "El numero NO es 3" ;
}

$n = [ rand(1,100) . "\n"];

if ($n > 50) {
  echo "El número es mayor a 50";
}else {

  echo "El número es menor a 50”";
}

$nombreDeUsuario = "admin";
 $ContraseniaDeUsuario=1234;

 if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario=1234 ) {
   echo "BIenvenido";
 } else  if ($nombreDeUsuario != "admin"){
   echo "Hay un error en el usuario";
 } else  if ($ContraseniaDeUsuario == [] || $nombreDeUsuario == []) {
   echo "Falta completar un campo";
 }else {
   echo "Error";
 }

$edad =[ rand(1,100) . "\n"];
$casado =false;
$sexo =['Masculino', 'Femenino' , 'Otro'];

if ($edad > 18  && $casado == false) {
  echo "BIenvenido";
}elseif ($sexo== 'otro') {
  echo "BIenvenido";
}

$cantidadDeAlumnos
 ?>
