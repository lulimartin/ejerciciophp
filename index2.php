<?php

echo "<h4>Ejercicio 1</h4>";

for ($i=0; $i < 10; $i++) {
   echo $i*2 . "<br>";
};

echo '<hr>' ;

echo "<h4>Ejercicio 2</h4>";

$a = 100;
while ($a >= 85) {
  echo $a . "<br>";
  $a--;
};

echo '<hr>' ;

echo "<h4>Ejercicio 3</h4>";

$i = 1;

while ($i <= 5) {
  $i++;
  $i * 2;
    echo $i;
};

echo '<br>';



echo "<h4>Ejercicio 4</h4>";

$monedascara = 0;

while ($monedascara < 5) {
  $moneda= rand(0,1);

  if ($moneda == 1) {
    echo $monedascara++;
  }

}

echo '<br>';



echo "<h4>Ejercicio 5a</h4>";

$nombres =['lucia','florencia','julieta','mariana','daira'];

for ($i=0; $i < 4; $i++) {
  echo $nombres[$i];
}
echo '<br>';

echo "<h4>Ejercicio 5b</h4>";
$i = 0;
while ($i < 4) {
  echo $nombres[$i];
  $i++;
};
echo '<br>';

echo "<h4>Ejercicio 5c</h4>";

$c=0;
do {
  echo  $nombres[$c];
  $c++;
} while ($c< 4);

echo '<br>';

echo "<h4>Ejercicio 6</h4>";

$aleatorio = rand(0,10);

foreach ($aleatorio as $ejercicio6 => $value) {
  // code...
}


 ?>
