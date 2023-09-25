<?php 
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3306;dbname=Web_4A", "BD_CIRO", "Omegaciro1");
        $link -> exec ("set names utf8");
        return $link;
    }
}
 ?>