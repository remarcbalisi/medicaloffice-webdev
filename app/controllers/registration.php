<?php

class Registration extends Controller{

    public function index(){

        $prefixnames = $this->model('PrefixName')->get();
        $gender = $this->model('Gender')->get();
        $this->view('home/index', ['prefixnames'=>$prefixnames,
            'gender'=> $gender
        ]);

    }


}

?>
