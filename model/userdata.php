<?php 
include_once "db.php";
class Userdata extends Database{

    public $parameter;
    public $results;
    public function __construct ($parameter) {
        $this->parameter = (isset($parameter)) ? $this->connect()->real_escape_string($parameter) : "";     
    }

    public function isSessionExist(){
        if(isset($_SESSION['user'])){
            return true;
        } else{
            return false;
        }
    }

    public function search(){
        $userResults = $this->connect()->query("
            SELECT * 
            FROM myusers 
            WHERE
            usr_dssname LIKE '%$this->parameter%'
            OR usr_dssmail LIKE '%$this->parameter%'
        ");
        if ($userResults->num_rows) {
            $resultsOfUsers = [];
            foreach($userResults as $row){
                $resultsOfUsers[] = $row;
            }
            $this->results = $resultsOfUsers;
        }
    }

    public function showHtml(){
        $html = `
        <div class="alert alert-success">
            Results found!
        </div>
        <ul class="list-group">`;
        foreach ($this->results as $user) {
            $html .= `
            <li class="list-group-item">
                <strong>Name:</strong> `.$user['usr_dssname'].` 
                <strong>E-mail:</strong> `.$user['usr_dssemail'].`
            </li>`;
        }

        return $html . "<ul></div>";
          
    }

    public function showData(){
        if(!$this->isSessionExist()){
            echo "You are not logged in";
            die();
        }
    }
    

   
    


}





















?>