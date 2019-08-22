<?php

class user
{

  public static $MIN_PASSWORD = 6;
  public static $MAX_PASSWORD = 16;


}

//alterando un dato de las classes, casos muy raros
user::$MIN_PASSWORD = 8;


/////////////////////////////////
$pdo = new PDO('mysql:host=localhost;dbname=dh');
class DB{
  public static $HOST;
  public static $USER;
  public static $PASS;
  public static $PORT = 3306;

  protected function connection()
  {
    new PDO('mysql:host='.self::$HOST . ';dbname=' . self::$name, self::$USER self::$PASS);
  }
}
//los dos puntos dicen que es algo de la clase.Las constantes no llevan $
DB::$HOST='localhost';
DB::$NAME = 'digitalhouse';
DB::$USER='root';
DB::$PASS='root';


 ?>
