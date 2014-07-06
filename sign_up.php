<?php
  require_once("models/Member.php");
  require_once("models/Session.php");

  $member = new Member($_POST);

  if($member->isValid()){
    // create the user
    $id = $member->create();
    $session = new Session($id);
  }else{
    // show error messages to user
    var_dump($member->getErrors());
  }
?>