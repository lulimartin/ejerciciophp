
<?php
if ($_GET) {
  $json =file_get_contents('usuarios.json');
  $array = json_decode($json,true);
}
foreach ($array as $user) {

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($users as $users): ?> {
  
    } ?>
  </body>
</html>
