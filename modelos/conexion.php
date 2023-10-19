<?php 
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3306;dbname=Web_4A", "root", "122333");
        $link -> exec ("set names utf8");
        return $link;
    }
}
 ?>