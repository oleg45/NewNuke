<?php 
  require_once('models/Member.php');
  /**
  * 
  */
  class Session{

    function __construct($id=null){
      session_start();
      if(isset($id)){
        $_SESSION['id'] = $id;
      }
    }

    function getId(){
      return $_SESSION['id'];
    }

    function getMember(){
      return Member::getMember($_SESSION['id']);
    }
  }
?>