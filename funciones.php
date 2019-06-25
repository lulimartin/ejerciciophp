<?php
echo "<h4>Ejercicio 1a</h4>";
  function mayor($numero1,$numero2,$numero3){
    if ($numero1 > $numero2 && $numero1 > $numero3) {
      return $numero1;
    } else if ($numero2 > $numero1 && $numero2 > $numero3) {
      return $numero2;
    }else {
      return $numero3;
    }
  }
 echo mayor(rand(0,10),rand(0,10),rand(0,10));

 /* function mayor($x,$y,$z){
    max($x,$y,$z);
}*/
echo "<h4>Ejercicio 1b</h4>";


  function tabla($base,$limite){
    $resultados=[];
    for ($i= $base; $i <$limite ; $i++) {
      $resultados[] = $i;
    }
    return $resultados;
  }
print_r (tabla(5,10));

echo "<h4>Ejercicio 1c</h4>";

  function mayor2($numero1,$numero2,$numero3 = 100){
    if ($numero1 > $numero2 && $numero1 > $numero3) {
      return $numero1;
    } else if ($numero2 > $numero1 && $numero2 > $numero3) {
      return $numero2;
    }else {
      return $numero3;
    }
  }
  echo "<h4>Ejercicio 1d</h4>";
 echo mayor2(rand(0,10),rand(0,10));
 function tabla2($base,$limite=100){
   $resultados=[];
   for ($i= $base; $i <$limite ; $i++) {
     $resultados[] = $i;
   }
   return $resultados;
 }
print_r (tabla2(5));
 ?>
