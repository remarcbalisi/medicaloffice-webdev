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

    public function create(){

        $registration_date = $_POST['registration_date'];
        $lname = $_POST['last_name'];
        $fname = $_POST['first_name'];
        $mname = $_POST['middle_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $homephone = $_POST['home_phone'];
        $workphone = $_POST['work_phone'];
        $cellphone = $_POST['cellphone'];
        $email = $_POST['email'];
        $bday = $_POST['bday'];
        $age = $_POST['age'];
        $sss = $_POST['sss'];
        $maritalstats = $_POST['maritalstatus'];
        $gender = $_POST['gender'];
        $prefixname = $_POST['prefixname'];
        $insured_occupation = $_POST['insured_occupation'];
        $insured_emp = $_POST['insured_emp'];
        $insured_addr = $_POST['insured_addr'];
        $insuredname1 = $_POST['insuredname1'];
        $insuredssnum1 = $_POST['insuredssnum1'];
        $insuredid1 = $_POST['insuredid1'];
        $co_payment_amount1 = $_POST['co_payment_amount1'];
        $rel_to_insured1 = $_POST['rel_to_insured1'];
        $insuredbday1 = $_POST['insuredbday1'];

        $insuredname2 = $_POST['insuredname2'];
        $insuredssnum2 = $_POST['insuredssnum2'];
        $insuredid2 = $_POST['insuredid2'];
        $co_payment_amount2 = $_POST['co_payment_amount2'];
        $rel_to_insured2 = $_POST['rel_to_insured2'];
        $insuredbday2 = $_POST['insuredbday2'];

        $referral = $_POST['referral'];
        $referralobtain = $_POST['referralobtain'];
        $referralnum = $_POST['referralnum'];
        $doctorname = $_POST['doctorname'];
        $doctor_phone_no = $_POST['doctor_phone_no'];
        $doctor_st_address = $_POST['doctor_st_address'];
        $doctor_city = $_POST['doctor_city'];
        $doctor_state = $_POST['doctor_state'];
        $doctor_zipcode = $_POST['doctor_zipcode'];
        $physicalexam = $_POST['physicalexam'];
        $bloodtest = $_POST['bloodtest'];
        $who_referral = $_POST['who_referral'];
        $who_referral_info = $_POST['who_referral_info'];

        $newuser = $this->model('User');

        $newuser->maritalstat_id = $maritalstats;
        $newuser->prefixname_id = $prefixname;
        $newuser->gender_id = $gender;
        $newuser->fname = $fname;
        $newuser->mname = $mname;
        $newuser->lname = $lname;
        $newuser->email = $email;
        $newuser->st_address = $address;
        $newuser->city = $city;
        $newuser->state = $state;
        $newuser->zipcode = $zipcode;
        $newuser->homephone = $homephone;
        $newuser->workphone = $workphone;
        $newuser->cellphone = $cellphone;
        $newuser->birth = $bday;
        $newuser->age = $age;
        $newuser->sss_no = $sss;
        $newuser->registration_date = $registration_date;
        $newuser->role_id = 2;

        $newuser = $newuser->save($newuser);

        $newinsuranceinfo = $this->model('InsuranceInfo');
        $newinsuranceinfo->occupation = $insured_occupation;
        $newinsuranceinfo->insureds_employer = $insured_emp;
        $newinsuranceinfo->insureds_emp_addr = $insured_addr;
        $newinsuranceinfo->req_referral = $referral;
        $newinsuranceinfo->referral_obtained = $referralobtain;
        $newinsuranceinfo->referral_no = $referralnum;
        $newinsuranceinfo->user_id = $newuser->id;

        $newinsuranceinfo = $newinsuranceinfo->save($newinsuranceinfo);

        $newprimaryinsurance = $this->model('PrimSecon');
        $newprimaryinsurance->type = "primary";
        $newprimaryinsurance->insureds_name = $insuredname1;
        $newprimaryinsurance->insureds_ss_no = $insuredssnum1;
        $newprimaryinsurance->insureds_id = $insuredid1;
        $newprimaryinsurance->co_payment_amount = $co_payment_amount1;
        $newprimaryinsurance->relationship_to_ins = $rel_to_insured1;
        $newprimaryinsurance->insureds_bday = $insuredbday1;
        $newprimaryinsurance->insurance_info_id = $newinsuranceinfo->id;
        $newinsuranceinfo = $newinsuranceinfo->save($newinsuranceinfo);

        $newsecondaryinsurance = $this->model('PrimSecon');
        $newsecondaryinsurance->type = "secondary";
        $newsecondaryinsurance->insureds_name = $insuredname2;
        $newsecondaryinsurance->insureds_ss_no = $insuredssnum2;
        $newsecondaryinsurance->insureds_id = $insuredid2;
        $newsecondaryinsurance->co_payment_amount = $co_payment_amount2;
        $newsecondaryinsurance->relationship_to_ins = $rel_to_insured2;
        $newsecondaryinsurance->insureds_bday = $insuredbday2;
        $newsecondaryinsurance->insurance_info_id = $newinsuranceinfo->id;
        $newsecondaryinsurance = $newsecondaryinsurance->save($newsecondaryinsurance);

        $newphysicianinfo = $this->model('PhysicianInfo');
        $newphysicianinfo->doctor_name = $doctorname;
        $newphysicianinfo->doctor_phone_no = $doctor_phone_no;
        $newphysicianinfo->doctor_st_addr = $doctor_st_address;
        $newphysicianinfo->doctor_city = $doctor_city;
        $newphysicianinfo->doctor_state = $doctor_state;
        $newphysicianinfo->doctor_zipcode = $doctor_zipcode;
        $newphysicianinfo->date_physical_exam = $physicalexam;
        $newphysicianinfo->date_last_bloodtest = $bloodtest;
        $newphysicianinfo->user_id = $newuser->id;

        $newphysicianinfo = $newphysicianinfo->save($newphysicianinfo);

    }


}

?>
