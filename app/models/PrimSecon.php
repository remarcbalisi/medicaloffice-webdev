<?php

class PrimSecon{

    public $id;
    public $type;
    public $primary_insurance;
    public $insureds_name;
    public $insureds_ss_no;
    public $insureds_id;
    public $co_payment_amount;
    public $relationship_to_ins;
    public $insureds_bday;
    public $insurance_info_id;
    protected $conn;

    public function get(){

        $this->createConnection();

        $sql = "SELECT * FROM prim_secon";
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

        $sql = "INSERT INTO prim_secon (type, primary_insurance, insureds_name, insureds_ss_no, insureds_id, co_payment_amount, relationship_to_ins, insureds_bday, insurance_info_id)
        VALUES ('".$model->type."','".$model->primary_insurance."','".$model->insureds_name."', '".$model->insureds_ss_no."', '".$model->insureds_id."', '".$model->co_payment_amount."', '".$model->relationship_to_ins."', '".$model->insureds_bday."', '".$model->insurance_info_id."' )";

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
