<?php
require_once('models/base.php');

class Member extends Base {
    var $members;
    var $email;
    var $password;
    var $password_confirmation;
    var $errors;
    var $id;
    var $username;

    function __construct ($params){
      $this->email = $params["email"];
      $this->username = $params["username"];
      $this->password = $params["password"];
      $this->password_confirmation = $params["password_confirmation"];
      if(isset($params["id"])){
        $this->id = $params["id"];  
      }
    }
    public static function getAllMembers() {
      try {
        $stmt = parent::getConnection()->query('SELECT * FROM members');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch(PDOException $ex) {
          echo "An Error occured!"; //user friendly message
      }
    }

    public static function getMember($id) {
      try {
        $stmt = parent::getConnection()->prepare("SELECT * FROM members WHERE id = ?");
        $stmt->execute(array($id));
        return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
      } catch(PDOException $ex) {
          echo "An Error occured!"; //user friendly message
      }
    }

    public function isValid(){
      $this->errors = [];

      if($this->password != $this->password_confirmation){
        array_push($this->errors, "Passwords don't match");
      }

      return sizeof($this->errors) == 0;
    }

    public function getErrors(){
      return $this->errors;
    }

    public function create(){
      try {
        $connection = parent::getConnection();
        $sth = $connection->prepare("INSERT INTO members (email, password_hash, username) VALUES(?, ?, ?)");
        $sth->execute(array($this->email, md5($this->password), $this->username));
        return $connection->lastInsertId();
      } catch(PDOException $ex) {
          echo "An Error occured!"; //user friendly message
          return false;
      }
    }

    public function getId(){
      return $this->id;
    }
}
?>