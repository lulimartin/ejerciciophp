<?php
echo "<h4>Ejercicio 2a</h4>";
  function triangulo($base,$altura){
    return ($base*$altura)/2;

  }
  echo triangulo(4,6);

  echo "<h4>Ejercicio 2b</h4>";
    function rectangulo($base,$altura){
      return ($base*$altura);

    }
    echo rectangulo(rand(0,10),rand(0,10));

    echo "<h4>Ejercicio 2c</h4>";
      function cuadrado($base){
        return ($base*$base);

      }
      echo cuadrado(rand(0,10));
  echo "<h4>Ejercicio 2d</h4>";
        function circulo($radio){
          return 3.14*$radio*$radio;

        }
        echo circulo(rand(0,10));


 ?>
