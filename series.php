<?php

$pdo =  new PDO('mysql:host=localhost;dbname=movies_db','root','root');

//le paso consultas

$stmt = $pdo->prepare('select * from series');



$result = $stmt->execute();

$series = $stmt->fetchAll(PDO::FETCH_ASSOC);



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Series</h1>
    <ul>
      <!-- serie.php?id=123 -->
      <?php foreach ($series as $serie):    ?>
        <li>
          <a href="serie.php?id=<?= $serie['id'] ?>">  <?= $serie['title'] ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>
