<?php

class Index extends Controller{

    public function index(){

        $this->view('home/index');

    }

    public function registration(){

        $this->view('home/registration');

    }

}

?>
