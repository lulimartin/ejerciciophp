<?php
 $numero =rand(0,1);
 if ($numero == 1) {
   $resultado = "si";

  } else {
   $resultado = "no";
  };

  $sitios =[
    'Google' => 'https://google.com',
    'Facebook' => 'https://facebook.com',
    "Twitter" => "https://twitter.com",

  ]

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombres ="Lucia" ?>  </h2>
    <h3>¿Es usted un ganador? <?= $resultado ?> </h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($sitios as $nombre => $link) { ?>
        <li>
          <a href="<?php echo $link ?>"><?php echo $nombre ?></a>
        </li>
      <?php } ?>
    </ul>
  </body>
</html>
