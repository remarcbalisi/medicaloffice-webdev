<?php

class InsuranceInfo{

    public $id;
    public $occupation;
    public $insureds_employer;
    public $insureds_emp_addr;
    public $req_referral;
    public $referral_obtained;
    public $referral_no;
    public $user_id;
    protected $conn;

    public function get(){

        $this->createConnection();

        $sql = "SELECT * FROM insurance_info";
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

        $sql = "INSERT INTO insurance_info (occupation, insureds_employer, insureds_emp_addr, req_referral, referral_obtained, referral_no, user_id)
        VALUES ('".$model->occupation."','".$model->insureds_employer."','".$model->insureds_emp_addr."', '".$model->req_referral."', '".$model->referral_obtained."', '".$model->referral_no."', '".$model->user_id."' )";

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
