<!DOCTYPE html>
<html>
<head>
	<title>Patient Registration</title>
	 <link rel="stylesheet" type="text/css" href="medical.css">
    </head>
<body>
  

<form action="view.php">
  
    <h1 class="A"><center>REGISTRATION FORM</center></h1>
  
  
	  <h3 class="A">Today's Date
		<input type="Date" name="Date" value="Date"> 
     </h3>


 
  <h2 class="A">PATIENT PERSONAL INFORMATION</h2>
     
    <p class="p1">
    Last Name
    	<input type="text" placeholder="" name="last_name" required>

  First Name
    	<input type="text" placeholder="" name="first_name" required>

 Middle Name
    	<input type="text" placeholder="" name="middle_name" required>
    <br><br>
	
  Street Address
    	<input type="text" placeholder="" name="address" required>

   City
    	<input type="text" placeholder="" name="city" required>

 	State
    	<input type="text" placeholder="" name="state" required>

	Zip Code
    	<input type="text" placeholder="" name="zipcode" required>

 	<br><br>
	Home Phone #
    	<input type="number" placeholder="" name="phone" required>

  Work Phone #
    	<input type="number" placeholder="" name="phone2" required>
  Cellphone #
    	<input type="number" placeholder="" name="cellphone" required>

  Email
     <input type="text" placeholder="" name="email" required>
    <br><br>
  Date of Birth
		<input type="date" name="bday">
	Age
    	<input type="text" placeholder="" name="age" required>

  Socal Security #
	   <input type="number" placeholder="" name="sss" ><br><br>
		
  Marital Status<br>
	   <input type="radio" name="status" value="single"> Single
	   <input type="radio" name="status" value="married"> Married
	   <input type="radio" name="status" value="widow"> Widow
	   <input type="radio" name="status" value="divorced"> Divorced<br><br>

  Gender<br>
	   <input type="radio" name="gender" value="male"> Male
	   <input type="radio" name="gender" value="female">Female
	 <br>
	<label for="Mr.">Mr.</label>
	   <input type="radio" name="gender" id="male" value="male">
	<label for="Mrs">Mrs.</label>
	   <input type="radio" name="gender" id="female" value="female">
	<label for="Dr.">Dr.</label>
	   <input type="radio" name="gender" id="other" value="other">
	<label for="Miss">Miss</label>
	   <input type="radio" name="gender" id="other" value="other">
	     <br><br>
            </p><hr>
          
             
	<h2 class="B">INSURANCE INFORMATION</h2>

  <p class="p3">
  Occupation
     <input type="text" placeholder="" name="occupation" required>

  Insured Employer's
     <input type="text" placeholder="" name="insured" required>

  Insured Employer's Adress
     <input type="text" placeholder="" name="insured" required>
     <br><br>

	PLEASE INDICATE PRIMARY INSURANCE:
  <br>
  Insured's Name
     <input type="text" placeholder="" name="insuredname" required>

	Insured's S.S. #
     <input type="number" placeholder="" name="insurednum" required>

  Insured's ID
     <input type="text" placeholder="" name="insuredid" required>
    <br><br>
  Co-Payment Amount $
     <input type="text" placeholder="" name="amount" required>
     <br><br>

  Patient's Relationship to Insured<br>
     <input type="radio" name="relationship" value="slef"> Self
   	 <input type="radio" name="relationship" value="spouse"> Spouse
   	 <input type="radio" name="relationship" value="child"> Child
     <input type="radio" name="relationship" value="other"> Other
     <br><br>

	Insured's Birthdate
	   <input type="date" name="bday">
     <br><br>

	PLEASE INDICATE SECONDARY INSURANCE:
  <br>
	Insured's Name
     <input type="text" placeholder="" name="insuredname">

	Insured's S.S. #
     <input type="number" placeholder="" name="insurednum">

  Insured's ID
     <input type="text" placeholder="" name="insuredid">
      <br><br>
  Co-Payment Amount $
     <input type="text" placeholder="" name="amount">
     <br><br>

  Relationship to Insured<br>
     <input type="radio" name="relationship" value="self"> Self
   	 <input type="radio" name="relationship" value="spouse"> Spouse
   	 <input type="radio" name="relationship" value="child"> Child
   	 <input type="radio" name="relationship" value="other"> Other
     <br><br>

	Insured's Birthdate
	   <input type="date" name="bday">
     <br><br>

	Does your plan require a referral?<br>
	   <input type="radio" name="referral" value="yes"> YES
   	 <input type="radio" name="referral" value="no"> NO
   	<br><br>
 If Yes, was a referral obtained?<br>
	   <input type="radio" name="referral1" value="yes"> YES
   	 <input type="radio" name="referral1" value="no"> NO
   <br><br>
	Referral #
     <input type="number" placeholder="" name="refnum">
     <br>
		</p> <hr> 
		
	
	<h2 class="B">FAMILY PHYSICIAN INFORMATION</h2>
  <p class="p3">
	Medical Doctor's Name
     <input type="text" placeholder="" name="doctorname" required>

	Medical Doctor's Phone #
     <input type="number" placeholder="" name="phone3" required><br><br>

  Medical Doctor's Street Address
     <input type="text" placeholder="" name="address" required>

 City
     <input type="text" placeholder="" name="city" required>

 	State
     <input type="text" placeholder="" name="state" required>

	Zip Code
     <input type="text" placeholder="" name="zipcode"><br><br>

 Date of last physical exam
	 <input type="date" name="physicalexam">
	<br><br>

	Date of last blood test
	 <input type="date" name="bloodtest">
	<br></p>


	<hr>
	<h2 class="B">WHO PREFERRED YOU TO OUR PRACTICE?</h2>
   <p class="p3">
	 <input type="radio" name="prefer" value="doctor"> Doctor
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="hospital"> Hospital
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="insrncplan"> Insurance
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="family"> Family
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="friend"> Friend
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="website"> Website
	 <input type="text" placeholder="" name="prefer">
   <br><br>

	 <input type="radio" name="prefer" value="other">Other
	 <input type="text" placeholder="" name="prefer">
   <br><br>
  </p> <hr>

     
      <center><button type="submit"  class="button">
       R E G I S T E R </button></center>
    


    
</form>

</body>
</html>