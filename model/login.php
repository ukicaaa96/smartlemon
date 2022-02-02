<?php 
include_once "db.php";
class Login extends Database{

    public $mail;
    public $password;
 
    public function __construct ($mail,$password) {
        $this->mail = (isset($mail)) ? $this->connect()->real_escape_string($mail) : "";
        $this->password = (isset($password)) ? $this->connect()->real_escape_string($password) : "";
    }

    public function insert(){
        $encryptedPass = encryptPassword();
        $hash = generateHash();
        $results = $this->connect()->query("INSERT INTO myusers(usr_dssname,usr_dssmail,usr_dsspassword,usr_dsshash) VALUES('$this->name','$this->mail','$encryptedPass','$hash')");
        if ($results->affected_rows) {
            return true;
        } else{
            return false;
        }
    }

    public function validateMail(){
      if(filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
        $validMail = true;
      } else{
        $validMail = false;
      }
      return $validMail;
    }

    public function validatePassword(){
      if($this->password == $this->password_repeat) {
        $validPass = true;
      } else{
        $validPass = false;
      }
      return $validPass;
    }

    public function encryptPassword(){
        return sha1($this->password);
    }

    public function encryptPassword(){
        return sha1($this->password);
    }

    public function generateHash($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}





















?>