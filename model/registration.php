<?php 
include_once "db.php";
class Registration extends Database{

    public $name;
    public $mail;
    public $password;
    public $password_repeat;
    
    public function __construct ($name,$mail,$password,$password_repeat) {
        $this->name = (isset($name)) ? $this->connect()->real_escape_string($name) : "";
        $this->mail = (isset($mail)) ? $this->connect()->real_escape_string($mail) : "";
        $this->password = (isset($password)) ? $this->connect()->real_escape_string($password) : "";
        $this->password_repeat = (isset($password_repeat)) ? $this->connect()->real_escape_string($password_repeat) : "";
    }

    private function insert(){
        $encryptedPass = $this->encryptPassword();
        $hash = $this->generateHash();
        $this->connect()->query("INSERT INTO myusers(usr_dssname,usr_dssmail,usr_dsspassword,usr_dsshash) VALUES('".$this->name."','".$this->mail."','$encryptedPass','$hash')");
        if ($this->connect()) {
            echo "User created!";
        } else{
            echo "User not created!";
        }
    }

    private function isUserExist(){
        $results = $this->connect()->query("SELECT * FROM myusers WHERE usr_dssmail = '$this->mail'");
        if ($results->num_rows) {
            return true;
        } else{
            return false;
        }
    }
    private function validateMail(){
      if(filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
        $validMail = true;
      } else{
        $validMail = false;
      }
      return $validMail;
    }

    private function validatePassword(){
      if($this->password == $this->password_repeat) {
        $validPass = true;
      } else{
        $validPass = false;
      }
      return $validPass;
    }

    private function encryptPassword(){
        return sha1($this->password);
    }

    private function generateHash($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function registerUser(){
        if($this->isUserExist()){
            echo "User alredy exist with this mail";
            die();
        }
        if(!$this->validateMail()){
            echo "Mail not correct!";
            die();
        }
        if(!$this->validatePassword()){
            echo "Password not matching!";
            die();
        }

        $this->insert();


    }
}





















?>











