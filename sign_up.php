<?php
  require("models/Member.php");

  $member = new Member($_POST);

  if($member->isValid()){
    // create the user
    $member->create();
    echo "success";
  }else{
    // show error messages to user
    var_dump($member->getErrors());
  }
?>