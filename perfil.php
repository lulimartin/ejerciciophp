<?php
if ($_GET['mail']) {
  $json =file_get_contents('usuarios.json')
  $array = json_decode($json,true)
  //lee este archivo y lo convierte a un array
  foreach ($array as $user ) {
    if(user['email']===$_GET['email']){
      $profile = $user;
    }
  }
}


 ?>


<!DOCTYPE HTML>
<html>
<body>
<?php echo $profile['email'] ?>
</body>
</html>
