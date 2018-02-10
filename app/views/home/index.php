<?php include_once '../app/views/header/header.php' ?>

<?php if( !empty($data['success_msg']) ): ?>
        <p style="color:green"><?=$data['success_msg']?></p>
    <?php endif; ?>
    <?php if( !empty($data['error_msg']) ): ?>
        <p style="color:red"><?=$data['error_msg']?></p>
    <?php endif; ?>
<form action="<?php echo Globals::baseUrl(); ?>/public/registration/create" method="POST">

    <h1 class="A">REGISTRATION FORM</h1>


	  <h3 class="A">Today's Date
		<input type="date" name="registration_date" required>
     </h3>



  <h2 class="A">PATIENT PERSONAL INFORMATION</h2>

    <p class="p1">
    Last Name<br>
    	<input type="text" placeholder="" name="last_name" required>
      <br><br>

  First Name<br>
    	<input type="text" placeholder="" name="first_name" required><br><br>

 Middle Name<br>
    	<input type="text" placeholder="" name="middle_name" required>
    <br><br>

  Street Address<br>
    	<input type="text" placeholder="" name="address" required><br><br>

   City<br>
    	<input type="text" placeholder="" name="city" required><br><br>

 	State<br>
    	<input type="text" placeholder="" name="state" required><br><br>

	Zip Code<br>
    	<input type="text" placeholder="" name="zipcode" required>

 	<br><br>
	Home Phone #<br>
    	<input type="text" placeholder="" name="home_phone" required><br><br>

  Work Phone #<br>
    	<input type="text" placeholder="" name="work_phone" required><br><br>
  Cellphone #<br>
    	<input type="text" placeholder="" name="cellphone" required><br><br>

  Email<br>
     <input type="text" placeholder="" name="email" required>
    <br><br>
  Date of Birth<br>
		<input type="date" name="bday"><br><br>
	Age<br>
    	<input type="number" placeholder="" name="age" required><br><br>

  Socal Security #<br>
	   <input type="text" placeholder="" name="sss" ><br><br>

  Marital Status
	    <select name="maritalstatus">
            <?php foreach( $data['maritalstats'] as $ms ): ?>
                <option value="<?php echo $ms['id'] ?>"><?php echo $ms['maritalstatname'] ?></option>
            <?php endforeach; ?>
   </select> <br><br>
  Gender
    <select name="gender">
          <?php foreach( $data['gender'] as $g ): ?>
              <option value="<?php echo $g['id'] ?>"><?php echo $g['gendername'] ?></option>
          <?php endforeach; ?>
   </select>
	 <br><br>

   Prefix
  <select name="prefixname">
      <?php foreach( $data['prefixnames'] as $pn ): ?>
          <option value="<?php echo $pn['id']?>"><?php echo $pn['prename']?></option>
      <?php endforeach; ?>
  </select>
	     <br><br>
            </p>


	<h2 class="A">INSURANCE INFORMATION</h2>

  <p class="p3">
  Occupation<br>
     <input type="text" placeholder="" name="insured_occupation" required><br><br>

  Insured Employer's<br>
     <input type="text" placeholder="" name="insured_emp" required><br><br>

  Insured Employer's Adress<br>
     <input type="text" placeholder="" name="insured_addr" required>
     <br><br>

	PLEASE INDICATE PRIMARY INSURANCE:
  <br>
  Insured's Name<br>
     <input type="text" placeholder="" name="insuredname1" required><br><br>

	Insured's S.S. #<br>
     <input type="text" placeholder="" name="insuredssnum1" required><br><br>

  Insured's ID<br>
     <input type="text" placeholder="" name="insuredid1" required>
    <br><br>
  Co-Payment Amount $<br>
     <input type="number" placeholder="" name="co_payment_amount1" required>
     <br><br>

  Patient's Relationship to Insured
      <select name="rel_to_insured1">
  <option value="Self">Self</option>
  <option value="Spouse">Spouse</option>
  <option value="Child">Child</option>
  <option value="Other">Other</option>

</select>
     <br><br>

	Insured's Birthdate<br>
	   <input type="date" name="insuredbday1">
     <br><br>

	PLEASE INDICATE SECONDARY INSURANCE:
  <br>
	Insured's Name<br>
     <input type="text" placeholder="" name="insuredname2"><br><br>

	Insured's S.S. #<br>
     <input type="text" placeholder="" name="insuredssnum2"><br><br>

  Insured's ID<br>
     <input type="text" placeholder="" name="insuredid2">
      <br><br>
  Co-Payment Amount $<br>
     <input type="text" placeholder="" name="co_payment_amount2">
     <br><br>

  Relationship to Insured
    <select name="rel_to_insured2">
  <option value="Self">Self</option>
  <option value="Spouse">Spouse</option>
  <option value="Child">Child</option>
  <option value="Other">Other</option>
   </select>
     <br><br>

	Insured's Birthdate<br>
	   <input type="date" name="insuredbday2">
     <br><br>

	Does your plan require a referral?<br>
	   <input type="radio"  name="referral" value="1" checked="checked"> YES
   	 <input type="radio" name="referral" value="0"> NO
   	<br><br>
 If Yes, was a referral obtained?<br>
	   <input type="radio" name="referralobtain" value="1" checked="checked"> YES
   	 <input type="radio" name="referralobtain" value="0"> NO
   <br><br>
	Referral #<br>
     <input type="text" placeholder="" name="referralnum" required>
     <br>
		</p>


	<h2 class="A">FAMILY PHYSICIAN INFORMATION</h2>
  <p class="p3">
	Medical Doctor's Name<br>
     <input type="text" placeholder="" name="doctorname" required><br><br>

	Medical Doctor's Phone #<br>
     <input type="text" placeholder="" name="doctor_phone_no" required>
     <br><br>

  Medical Doctor's Street Address<br>
     <input type="text" placeholder="" name="doctor_st_address" required><br><br>

 City<br>
     <input type="text" placeholder="" name="doctor_city" required><br><br>

 	State<br>
     <input type="text" placeholder="" name="doctor_state" required><br><br>

	Zip Code<br>
     <input type="text" placeholder="" name="doctor_zipcode"><br><br>

 Date of last physical exam<br>
	 <input type="date" name="physicalexam">
	<br><br>

	Date of last blood test<br>
	 <input type="date" name="bloodtest">
	<br></p>



	<h2 class="A">WHO PREFERRED YOU TO OUR PRACTICE?</h2>
   <p class="p3">
<select name="who_referral">
    <?php foreach( $data['referrals'] as $r ): ?>
        <option value="<?php echo $r['id'] ?>"><?php echo $r['referral_name'] ?></option>
    <?php endforeach; ?>
</select>
	  <input type="text" placeholder="" name="who_referral_info">
  </p>


      <center><button type="submit"  class="button">
       R E G I S T E R </button></center>




</form>
</body>
</html>
