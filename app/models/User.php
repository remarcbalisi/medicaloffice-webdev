<?php

class User{
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
        }

    }

    public function getByRole($role){



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

    public function save($model){

        $this->createConnection();

        $sql = "INSERT INTO user (role_id, maritalstat_id, prefixname_id, gender_id, fname, mname, lname, st_address, city, state, zipcode, homephone, workphone, cellphone, email, birth, age, sss_no, password, registration_date)
        VALUES ('".$model->role_id."', '".$model->maritalstat_id."', '".$model->prefixname_id."', '".$model->gender_id."', '".$model->fname."', '".$model->mname."', '".$model->lname."', '".$model->st_address."', '".$model->city."', '".$model->state."',
        '".$model->zipcode."', '".$model->homephone."', '".$model->workphone."', '".$model->cellphone."', '".$model->email."', '".$model->birth."', '".$model->age."', '".$model->sss_no."', '".$model->password."', '".$model->registration_date."')";

        $result = $this->conn->query($sql);
        $data = [];

        if (!$result) {
            trigger_error('Invalid query: ' . $this->conn->error);
        }

        $model->id = $this->conn->insert_id;

        $this->closeConnection();

        return $model;

    }

    public function login($email){

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
