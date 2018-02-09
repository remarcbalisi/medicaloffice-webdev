<!DOCTYPE html>
<html>
<head>
	<title>Patient Registration</title>
	 <link rel="stylesheet" type="text/css" href="register.css">
    </head>
<body>
  

<form action="view.php">
  
    <h1 class="A">REGISTRATION FORM</h1>
  
  
	  <h3 class="A">Today's Date
		<input type="Date" name="Date" value="Date"> 
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
    	<input type="number" placeholder="" name="phone" required><br><br>

  Work Phone #<br>
    	<input type="number" placeholder="" name="phone2" required><br><br>
  Cellphone #<br>
    	<input type="number" placeholder="" name="cellphone" required><br><br>

  Email<br>
     <input type="text" placeholder="" name="email" required>
    <br><br>
  Date of Birth<br>
		<input type="date" name="bday"><br><br>
	Age<br>
    	<input type="text" placeholder="" name="age" required><br><br>

  Socal Security #<br>
	   <input type="number" placeholder="" name="sss" ><br><br>
		
  Marital Status
	    <select>
  <option value="volvo">Single</option>
  <option value="saab">Married</option>
  <option value="opel">Widow</option>
  <option value="audi">Divorced</option>
   </select> <br><br>
  Gender
      <select>
  <option value="volvo">Male</option>
  <option value="saab">Female</option>
   </select>
	 <br><br>

   Prefix
	 <select>
  <option value="volvo">Mr.</option>
  <option value="saab">Mrs.</option>
  <option value="opel">Dr.</option>
  <option value="audi">Miss</option>
  </select>
	     <br><br>
            </p>
          
             
	<h2 class="A">INSURANCE INFORMATION</h2>

  <p class="p3">
  Occupation<br>
     <input type="text" placeholder="" name="occupation" required><br><br>

  Insured Employer's<br>
     <input type="text" placeholder="" name="insured" required><br><br>

  Insured Employer's Adress<br>
     <input type="text" placeholder="" name="insured" required>
     <br><br>

	PLEASE INDICATE PRIMARY INSURANCE:
  <br>
  Insured's Name<br>
     <input type="text" placeholder="" name="insuredname" required><br><br>

	Insured's S.S. #<br>
     <input type="number" placeholder="" name="insurednum" required><br><br>

  Insured's ID<br>
     <input type="text" placeholder="" name="insuredid" required>
    <br><br>
  Co-Payment Amount $<br>
     <input type="text" placeholder="" name="amount" required>
     <br><br>

  Patient's Relationship to Insured
      <select>
  <option value="volvo">Self</option>
  <option value="saab">Spouse</option>
  <option value="opel">Child</option>
  <option value="audi">Other</option>
   
</select>
     <br><br>

	Insured's Birthdate<br>
	   <input type="date" name="bday">
     <br><br>

	PLEASE INDICATE SECONDARY INSURANCE:
  <br>
	Insured's Name<br>
     <input type="text" placeholder="" name="insuredname"><br><br>

	Insured's S.S. #<br>
     <input type="number" placeholder="" name="insurednum"><br><br>

  Insured's ID<br>
     <input type="text" placeholder="" name="insuredid">
      <br><br>
  Co-Payment Amount $<br>
     <input type="text" placeholder="" name="amount">
     <br><br>

  Relationship to Insured
    <select>
  <option value="volvo">Self</option>
  <option value="saab">Spouse</option>
  <option value="opel">Child</option>
  <option value="audi">Other</option>
   </select>
     <br><br>

	Insured's Birthdate<br>
	   <input type="date" name="bday">
     <br><br>

	Does your plan require a referral?<br>
	   <input type="checkbox"  name="referral" value="yes"> YES
   	 <input type="checkbox" name="referral" value="no"> NO
   	<br><br>
 If Yes, was a referral obtained?<br>
	   <input type="checkbox" name="referral1" value="yes"> YES
   	 <input type="checkbox" name="referral1" value="no"> NO
   <br><br>
	Referral #<br>
     <input type="number" placeholder="" name="refnum">
     <br>
		</p> 
		
	
	<h2 class="A">FAMILY PHYSICIAN INFORMATION</h2>
  <p class="p3">
	Medical Doctor's Name<br>
     <input type="text" placeholder="" name="doctorname" required><br><br>

	Medical Doctor's Phone #<br>
     <input type="number" placeholder="" name="phone3" required>
     <br><br>

  Medical Doctor's Street Address<br>
     <input type="text" placeholder="" name="address" required><br><br>

 City<br>
     <input type="text" placeholder="" name="city" required><br><br>

 	State<br>
     <input type="text" placeholder="" name="state" required><br><br>

	Zip Code<br>
     <input type="text" placeholder="" name="zipcode"><br><br>

 Date of last physical exam<br>
	 <input type="date" name="physicalexam">
	<br><br>

	Date of last blood test<br>
	 <input type="date" name="bloodtest">
	<br></p>


	
	<h2 class="A">WHO PREFERRED YOU TO OUR PRACTICE?</h2>
   <p class="p3">
<select>
  <option value="volvo">Doctor</option>
  <option value="saab">Hospital</option>
  <option value="opel">Insurance</option>
  <option value="audi">Family</option>
   <option value="opel">Friend</option>
  <option value="audi">Website</option>
   <option value="opel">Other</option>
</select>
	  <input type="text" placeholder="" name="prefer">
  </p> 

     
      <center><button type="submit"  class="button">
       R E G I S T E R </button></center>
    


    
</form>

</body>
</html>