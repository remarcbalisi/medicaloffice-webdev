<?php

class AuthUser{
    public $id;
    public $maritalstat_id;
    public $prefixname_id;
    public $gender_id;
    public $fname;
    public $mname;
    public $lname;
    public $email;
    public $password;
    public $st_address;
    public $city;
    public $state;
    public $zipcode;
    public $homephone;
    public $workphone;
    public $cellphone;
    public $birth;
    public $age;
    public $sss_no;
    public $registration_date;
    public $role_id;
    public $auth;

    protected $conn;

    public function __construct(){

        if(!isset($_SESSION))
        {
            session_start();
        }

        if(!isset($_SESSION['usermail']) || empty($_SESSION['usermail'])){

            $this->auth = false;

        }
        else{
            $this->auth = true;
            $user = $this->getByEmail($_SESSION['usermail']);
            $this->setAttributes($user);
        }

    }

    public function setAttributes($model){

        $this->id = $model[0]['id'];
        $this->fname = $model[0]['fname'];
        $this->mname = $model[0]['mname'];
        $this->lname = $model[0]['lname'];
        $this->email = $model[0]['email'];
        $this->address = $model[0]['st_address'];
        $this->role_id = $model[0]['role_id'];

    }

    public function getByEmail($email){

        $this->createConnection();

        $sql = "SELECT * FROM user WHERE email = '".$email."'";
        $result = $this->conn->query($sql);
        $data = [];

        if (!$result) {
            trigger_error('Invalid query: ' . $this->conn->error);
        }

        if ($result->num_rows > 0) {
            // output data of each row
            while( $row = $result->fetch_assoc() ){
                array_push($data, $row);
            }
            return $data;

        } else {
            $result = [];
            return $result;
        }

        $this->closeConnection();

    }

    public function createConnection(){

        $database = new DatabaseConn;
        $this->conn = $database->connection;

    }

    public function closeConnection(){
        $this->conn->close();
    }
}

?>
