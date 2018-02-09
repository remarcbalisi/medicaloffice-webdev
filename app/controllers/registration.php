<?php

class Registration extends Controller{

    public function index(){

        $prefixnames = $this->model('PrefixName')->get();
        $this->view('home/index', ['prefixnames'=>$prefixnames]);

    }


}

?>
