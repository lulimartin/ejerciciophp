<?php
$pdo =  new PDO('mysql:host=localhost;dbname=movies_db','root','root');

//le paso consultas

$stmt = $pdo->prepare('select * from series where id = :id');

$idSerie = $_GET['id'];

$stmt->bindValue('id', $idSerie);


$result = $stmt->execute();

$series = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($series);
 ?>
