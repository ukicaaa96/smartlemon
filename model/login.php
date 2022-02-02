<?php 
include_once "db.php";
class Login extends Database{

    public $mail;
    public $password;
    public $dbPassword;
    public $hash;

    public function __construct ($mail,$password) {
        $this->mail = (isset($mail)) ? $this->connect()->real_escape_string($mail) : "";
        $this->password = (isset($password)) ? $this->connect()->real_escape_string($password) : "";
    }

    public function isUserExist(){
        $encryptedPass = $this->encryptPassword();

        $results = $this->connect()->query("SELECT * FROM myusers WHERE usr_dssmail = '$this->mail'");
        
        if ($results->num_rows) {
            $userResults = $results->fetch_array();
            $this->dbPassword = $userResults['usr_dsspassword'];
            $this->hash = $userResults['usr_dsshash'];
            return true;
        } else{
            return false;
        }
    }

    private function setSession(){
        $_SESSION['user'] = $this->hash;
    }
    private function validatePassword(){
        $encryptedPass = $this->encryptPassword();
        if ($encryptedPass == $this->dbPassword) {
            return true;
        } else{
            return false;
        }
    }

    private function encryptPassword(){
        return sha1($this->password);
    }

    public function LoginUser(){
        if (!$this->isUserExist()) {
            echo "Usert with this email doesn't exist";
            die();
        }
        if (!$this->validatePassword()){
            echo "Passwrod is incorrect!";
            die();
        }

        $this->setSession();
        echo "User is logged in";


    }


}





















?>