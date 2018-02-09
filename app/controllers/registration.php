<?php

class Registration extends Controller{

    public function index(){

        $prefixnames = $this->model('PrefixName')->get();
        $gender = $this->model('Gender')->get();
        $maritalstats = $this->model('MaritalStatus')->get();
        $referrals = $this->model('Referral')->get();
        $this->view('home/index', ['prefixnames'=>$prefixnames,
            'gender'=> $gender,
            'maritalstats' => $maritalstats,
            'referrals' => $referrals
        ]);

    }


}

?>
