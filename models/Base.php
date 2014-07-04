<?php

class Base { 

  public static function getConnection(){
    return new PDO('mysql:host=localhost;dbname=new_nuke;charset=utf8', 'root', null);
  }
}
?>