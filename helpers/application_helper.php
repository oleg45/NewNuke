<?php
  require_once('models/Session.php');

  function currentUser(){
    $session = new Session();
    return $session->getMember();
  }
?>