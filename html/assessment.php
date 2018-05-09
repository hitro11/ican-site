
<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center">Independent Class Assessment</h1>
<div class="center">
  <form action="" class="card">
  <h4 class="form-heading">Details of Principal Applicant</h4> 
  <h4>Personal Info</h4>
  <div class="form-inline form-row-around">
    <label for="firstName">First Name <span class="col-pri">*</span></label>
    <input type="name" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="Name" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="middleName">Middle Name</label>
    <input type="name" class="form-control" id="middleName" aria-describedby="middleNameHelp" placeholder="Name">
  </div>
  <div class="form-inline form-row-around">
    <label for="lastName">Last Name <span class="col-pri">*</span></label>
    <input type="name" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Name" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="sex">Sex <span class="col-pri">*</span></label>
    <select name="sex" id="sex" required>
      <option value="-1" selected>Select sex</option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
  </div>
  <div class="form-inline form-row-around">
    <label for="dob">Date of Birth <span class="col-pri">*</span></label>
    <input type="text" class="form-control" id="dob" aria-describedby="dobHelp"  placeholder="DD/MM/YYYY" required 
    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY/MM/DD">    
  </div>

  <div class="form-inline form-row-around">
    <label for="citizCountry">Country of citizenship <span class="col-pri">*</span></label>
    <select name="citizCountry" id="citizCountry" required>
    </select>
  </div>
  <div class="form-inline form-row-around">
    <label for="maritalStat">Marital Status</label>
    <select name="maritalStat" id="maritalStat" required>
      <option value="-1" selected>Select marital status</option>
      <option value="nm">Never Married</option>
      <option value="m">Married</option>
      <option value="ds">Deceased Spouse</option>
      <option value="ls">Legally Seperated</option>
      <option value="am">Anulled Marriage</option>
      <option value="d">Divorced</option>
      <option value="cl">Common-Law Spouse</option>
    </select>
  </div>

  <h4>Contact Info</h4>
  <div class="form-inline form-row-around">
    <label for="street">Current Mailing Address <span class="col-pri">*</span></label>
    <input type="text" class="form-control" id="street" aria-describedby="addressHelp" placeholder="Address" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="city">City/Town <span class="col-pri">*</span></label>
    <input type="text" class="form-control" id="city" name="city" aria-describedby="cityHelp" placeholder="City/Town" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="state">State/Province <span class="col-pri">*</span></label>
    <input type="text" class="form-control" id="state" name="state" aria-describedby="stateHelp" placeholder="State/Province" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="addrCountry">Country <span class="col-pri">*</span></label>
    <select name="addrCountry" id="addrCountry" required>
    </select>
  </div>
  <div class="form-inline form-row-around">
    <label for="postalCode">Postal Code <span class="col-pri">*</span></label>
    <input type="text" id="postalCode" name="postalCode" class="form-control" aria-describedby="postalCodeHelp" placeholder="Postal Code" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="homePhone">Home Phone <span class="col-pri">*</span></label>
    <input type="tel" id="homePhone" name="homePhone" class="form-control" aria-describedby="homePhoneHelp" placeholder="" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="altPhone">Alternate Phone</label>
    <input type="tel" id="altPhone" name="altPhone" class="form-control" aria-describedby="altPhoneHelp" placeholder="">
  </div>
   <div class="form-inline form-row-around">
    <label for="email">Email <span class="col-pri">*</span></label>
    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="" required>
  </div>
  <div class="form-inline form-row-around">
    <label for="altEmail">Alternate Email <span class="col-pri">*</span></label>
    <input type="email" id="altEmail" name="altEmail" class="form-control" aria-describedby="altEmailHelp" placeholder="">
  </div>

  <h4>Education</h4>
  <div class="form-inline form-row-around">
    <label for="edu"> Highest Level of College/University Education Achieved <span class="col-pri">*</span></label>
    <select name="edu" id="edu" required>
      <option value="-1" selected>-</option>
      <option value="hs">High School (Grade 12) Certificate</option>
      <option value="1d12">1 year diploma, trade certificate or apprenticeship & 12 years of study</option>
      <option value="1d13">1 year diploma, trade certificate or apprenticeship & 13 years of study</option>
      <option value="1u13">1 year university degree at bachelor's level & 13 years of study</option>
      <option value="2d14">2 year diploma, trade certificate or apprenticeship & 14 years of study</option>
      <option value="b">University degree of 2 years or more at bachelor's level & 14 years of study</option>
      <option value="3d15">3 year diploma, trade certificate or apprenticeship & 15 years of study</option>
      <option value="2b">2 or more university degrees at bachelor's level & 15 years of study</option>
      <option value="m">Master's degree or PhD & 17 years of study</option>
    </select>
  </div>

  <h4>IELTS</h4>
  <div class="form-inline form-row-around">
    <label for="ielts"> IELTS Taken</label>
    <select name="ielts" id="ielts">
      <option value="-1" selected>-</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </div>
  <div class="form-inline form-row-around">
    <label for="">If yes, specify the scores</span></label>
    <div class="col">
      <label for="ieltsListening">Listening</span></label>
      <input type="number" id="ieltsListening" name="ieltsListening" class="form-control form-control-sm" aria-describedby="ieltsListeningHelp" placeholder="">
    </div>
    <div class="col">
       <label for="ieltsSpeaking">Speaking</span></label>
       <input type="number" id="ieltsSpeaking" name="ieltsSpeaking" class="form-control form-control-sm" aria-describedby="ieltsSpeakingHelp" placeholder="">
    </div>
    <div class="col">
      <label for="ieltsWriting">Writing</span></label>
      <input type="number" id="ieltsWriting" name="ieltsWriting" class="form-control form-control-sm" aria-describedby="ieltsWritingHelp" placeholder="">
    </div>
    <div class="col">
      <label for="ieltsWriting">Reading</span></label>
      <input type="number" id="ieltsWriting" name="ieltsWriting" class="form-control form-control-sm" aria-describedby="ieltsReadingHelp" placeholder="">
    </div>
  </div>
  
  <h4>Language Proficiency</h4>
  <div class="form-inline form-row-around">
    <label for="ieltsListening">1st Language <span class="col-pri">*</span></label>
     <select name="edu" id="edu" required>
       <option value="-1" selected>-</option>
       <option value="en">English</option>
       <option value="fr">French</option>
    </select>
  </div>
  
  <h4>Employmenty</h4>
  
  
  <h4>Ties With Canada</h4>
  
  
  <h4 class="form-heading">Details of Spouse/Common-law Partner</h4> 
  <h4>Education</h4>
  
  <h4>Ties With Canada</h4>
  
  
  <h4 class="form-heading">Details of Children</h4> 


  






  <div class="btn-container center">
      <button type="submit" id="submit" class="btn btn-primary btn-submit">Submit</button>	
    </div>
</form>
  
</div>





<?php echo file_get_contents("./footer.html"); ?>
