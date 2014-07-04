<?php
require_once('models/base.php');

class Member extends Base {
    var $members;
  
    public static function getAllMembers() {
      try {
          $stmt = parent::getConnection()->query('SELECT * FROM members');
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch(PDOException $ex) {
          echo "An Error occured!"; //user friendly message
      }
    }
}
?>