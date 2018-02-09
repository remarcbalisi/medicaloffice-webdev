<?php

class PhysicianInfo{

    public $id;
    public $doctor_name;
    public $doctor_phone_no;
    public $doctor_st_addr;
    public $doctor_city;
    public $doctor_state;
    public $doctor_zipcode;
    public $date_physical_exam;
    public $date_last_bloodtest;
    public $user_id;
    protected $conn;

    public function get(){

        $this->createConnection();

        $sql = "SELECT * FROM physician_info";
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

        $sql = "INSERT INTO physician_info (doctor_name, doctor_phone_no, doctor_st_addr, doctor_city, doctor_state, doctor_zipcode, date_physical_exam, date_last_bloodtest, user_id)
        VALUES ('".$model->doctor_name."','".$model->doctor_phone_no."','".$model->doctor_st_addr."', '".$model->doctor_city."', '".$model->doctor_state."', '".$model->doctor_zipcode."', '".$model->date_physical_exam."', '".$model->date_last_bloodtest."', '".$model->user_id."' )";

        $result = $this->conn->query($sql);
        $data = [];

        if (!$result) {
            trigger_error('Invalid query: ' . $this->conn->error);
        }

        $model->id = $this->conn->insert_id;

        $this->closeConnection();

        return $model;

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
