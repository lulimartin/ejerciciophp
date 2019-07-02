<?php

if (!empty($_POST)) {
  //habria que agregar un proceso de validacion
  $user = [
    'nombre' => $_POST['name'],
    'mail' => $_POST['mail'],
    'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
  ];
  $json=file_get_contents('usuarios.json');

  $array = json_decode($json,true);
  //lo trnsformo para manejarlo

  $array[] = $user;
  //lo sumo, para que se acumulen los usuarios

  //HAGO LO MISMO AL REVES:
$json = json_encode($array, JSON_PRETTY_PRINT);

  file_put_contents($file,$json);

  //aca transforme y guarde.

}



?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="register.php" method="post">
     <div>
         <label for="name">Name:</label>
         <input type="text" id="name" name="name" />
     </div>
     <div>
         <label for="mail">E-mail:</label>
         <input type="email" id="mail" name="mail" />
     </div>
     <div>
         <label for="password">password:</label>
         <textarea id="password" name="password" ></textarea>
     </div>

     <button>Enviar</button>
 </form>

   </body>
 </html>
