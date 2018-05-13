
<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center">Independent Class Assessment</h1>
<div class="center">
  <form action="" class="card">
  <h4 class="form-heading">Details of Principal Applicant</h4> 

  <div class="form-mini">
    <h4>Personal Info</h4>
    <div class="form-inline flex-between">
      <label for="firstName">First Name <span class="col-pri">*</span></label>
      <input type="name" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="First Name" required>
    </div>
    <div class="form-inline flex-between">
      <label for="middleName">Middle Name</label>
      <input type="name" class="form-control" id="middleName" aria-describedby="middleNameHelp" placeholder="Middle Name">
    </div>
    <div class="form-inline flex-between">
      <label for="lastName">Last Name <span class="col-pri">*</span></label>
      <input type="name" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Last Name" required>
    </div>
    <div class="form-inline flex-between">
      <label for="sex">Sex <span class="col-pri">*</span></label>
      <select name="sex" id="sex" required>
        <option value="-1" selected>Select sex</option>
        <option value="m">Male</option>
        <option value="f">Female</option>
      </select>
    </div>
    <div class="form-inline flex-between">
      <label for="dob">Date of Birth <span class="col-pri">*</span></label>
      <input type="text" class="form-control" id="dob" aria-describedby="dobHelp"  placeholder="DD/MM/YYYY" required 
      pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY/MM/DD">    
    </div>

    <div class="form-inline flex-between">
      <label for="citizCountry">Country of citizenship <span class="col-pri">*</span></label>
      <select name="citizCountry" id="citizCountry" required>
              <option value="-1">Select Country</option>
      </select>
    </div>
    <div class="form-inline flex-between">
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
  </div>

  <div class="form-mini">
    <h4>Contact Info</h4>
    <div class="form-inline flex-between">
      <label for="street">Current Mailing Address</label>
      <input type="text" class="form-control" id="street" aria-describedby="addressHelp" placeholder="Street">
    </div>
    <div class="form-inline flex-between">
      <label for="city">City/Town</label>
      <input type="text" class="form-control" id="city" name="city" aria-describedby="cityHelp" placeholder="City/Town">
    </div>
    <div class="form-inline flex-between">
      <label for="state">State/Province</label>
      <input type="text" class="form-control" id="state" name="state" aria-describedby="stateHelp" placeholder="State/Province">
    </div>
    <div class="form-inline flex-between">
      <label for="addrCountry">Country <span class="col-pri">*</span></label>
      <select name="addrCountry" id="addrCountry" required>
        <option value="-1">Select Country</option>
      </select>
    </div>
    <div class="form-inline flex-between">
      <label for="postalCode">Postal Code</label>
      <input type="text" id="postalCode" name="postalCode" class="form-control" aria-describedby="postalCodeHelp" placeholder="Postal Code">
    </div>
    <div class="form-inline flex-between">
      <label for="homePhone">Home Phone</label>
      <input type="tel" id="homePhone" name="homePhone" class="form-control" aria-describedby="homePhoneHelp" placeholder="Phone">
    </div>
    <div class="form-inline flex-between">
      <label for="altPhone">Alternate Phone</label>
      <input type="tel" id="altPhone" name="altPhone" class="form-control" aria-describedby="altPhoneHelp" placeholder="alt Phone">
    </div>
    <div class="form-inline flex-between">
      <label for="email">Email <span class="col-pri">*</span></label>
      <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="form-inline flex-between">
      <label for="altEmail">Alternate Emai</label>
      <input type="email" id="altEmail" name="altEmail" class="form-control" aria-describedby="altEmailHelp" placeholder="alt Email">
    </div>
  </div>

  <div class="form-mini">
    <h4>Education</h4>
    <div class="form-inline flex-between">
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
  </div>

   <div class="form-mini">
   <h4>IELTS</h4>
    <div class="form-inline flex-between">
      <label for="ielts"> IELTS Taken</label>
      <select name="ielts" id="ielts">
        <option value="-1" selected>-</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="form-inline flex-between">
      <label for="">If yes, specify the scores</span></label>
      <div class="col">
        <label for="ieltsListening">Listen</span></label>
        <input type="number" id="ieltsListening" name="ieltsListening" class="form-control form-control-sm" aria-describedby="ieltsListeningHelp" placeholder="">
      </div>
      <div class="col">
        <label for="ieltsSpeaking">Speak</span></label>
        <input type="number" id="ieltsSpeaking" name="ieltsSpeaking" class="form-control form-control-sm" aria-describedby="ieltsSpeakingHelp" placeholder="">
      </div>
      <div class="col">
        <label for="ieltsWriting">Write</span></label>
        <input type="number" id="ieltsWriting" name="ieltsWriting" class="form-control form-control-sm" aria-describedby="ieltsWritingHelp" placeholder="">
      </div>
      <div class="col">
        <label for="ieltsWriting">Read</span></label>
        <input type="number" id="ieltsWriting" name="ieltsWriting" class="form-control form-control-sm" aria-describedby="ieltsReadingHelp" placeholder="">
      </div>
    </div>
   </div>

  <div class="form-mini">
    <h4>Language Proficiency</h4>
    <div class="form-inline flex-between">
      <label for="ieltsListening">1st Language <span class="col-pri">*</span></label>
      <select name="edu" id="edu" required>
        <option value="-1" selected>-</option>
        <option value="en">English</option>
        <option value="fr">French</option>
      </select>
    </div>
    <div class="form-inline flex-between">
      <label for="">Proficiency in language 1 <span class="col-pri">*</span></label>
      <div class="col">
        <label for="lang1Listen">Listen</span></label>
        <select name="lang1Listen" id="lang1Listen" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Speak">Speak</span></label>
        <select name="lang1Speak" id="lang1Speak" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Write">Write</span></label>
        <select name="lang1Write" id="lang1Write" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Read">Read</span></label>
        <select name="lang1Read" id="lang1Read" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
    </div>
    
    <div class="form-inline flex-between">
      <label for="">Proficiency in language 2 <span class="col-pri">*</span></label>
      <div class="col">
        <label for="lang2Listen">Listen</span></label>
        <select name="lang2Listen" id="lang2Listen" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Speak">Speak</span></label>
        <select name="lang1Speak" id="lang1Speak" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Write">Write</span></label>
        <select name="lang1Write" id="lang1Write" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
      <div class="col">
        <label for="lang1Read">Read</span></label>
        <select name="lang1Read" id="lang1Read" required>
          <option value="-1" selected>-</option>
          <option value="4">High</option>
          <option value="3">Moderate</option>
          <option value="2">Basic</option>
          <option value="1">None</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-mini">
    <h4>Employment</h4>
    <div class="form-inline flex-between">
      <label for="employmentYears">Total years of full time employment <span class="col-pri">*</span></label>
      <input type="number" class="form-control" id="employmentYears" aria-describedby="employmentYearsHelp" placeholder="" required>
    </div>
    <div class="form-inline flex-between">
      <label for="currOcu">Current Occupation</label>
      <select name="currOcu" id="currOcu">
        <option value="-1" selected>Select Occupation</option>
      </select>
    </div>
  </div>

  <div class="form-mini">
    <h4>Ties With Canada</h4>
    <div class="form-inline flex-start">
    <label class="form-check-label" for="arranged-employment">Do you have arranged Employment in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="arranged-employment" id="arranged-employment-yes" value="y">
        <label class="form-check-label" for="arranged-employment-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="arranged-employment" id="arranged-employment-no" value="n">
        <label class="form-check-label" for="arranged-employment-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="studied-in-canada">Have you ever studied in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="studied-in-canada" id="studied-in-canada-yes" value="y">
        <label for="studied-in-canada-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="studied-in-canada" id="studied-in-canada-no" value="n">
        <label for="studied-in-canada-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="worked-in-canada">Have you ever worked in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="worked-in-canada" id="worked-in-canada-yes" value="y">
        <label for="worked-in-canada-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="worked-in-canada" id="worked-in-canada-no" value="n">
        <label for="worked-in-canada-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="close-relatives">Do you have any close relatives in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="close-relatives" id="close-relatives-yes" value="y">
        <label for="close-relatives-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="close-relatives" id="close-relatives-no" value="n">
        <label for="close-relatives-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-between">
      <label for="rel-relation"> Your relationship to above relative</label>
      <select name="rel-relation" id="rel-relation">
        <option value="-1" selected>-</option>
        <option value="mf">Mother / Father</option>
        <option value="ds">Daughter / Son</option>
        <option value="sb">Sister / Brother</option>
        <option value="nn">Niece / Nephew</option>
        <option value="gmgf">Grandmother / Grandfather</option>
        <option value="gdgs">Granddaughter / Grandson</option>
        <option value="au">Aunt / Uncle</option>
        <option value="spcl">Spouse / Commin-law Partner</option>
      </select>
    </div>
  </div>

    
  
  <h4 class="form-heading space-top">Details of Spouse/Common-law Partner</h4> 
  <div class="form-mini">
    <h4>Education</h4>
    <div class="form-inline flex-between">
      <label for="edu-spouse"> Highest Level of College/University Education Achieved <span class="col-pri">*</span></label>
      <select name="edu-spouse" id="edu-spouse" required>
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
  </div>

  <div class="form-mini">
    <h4>Ties With Canada</h4>
    <div class="form-inline flex-start">
    <label class="form-check-label" for="arranged-employment-spouse">Does your spouse have arranged Employment in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="arranged-employment-spouse" id="arranged-employment-spouse-yes" value="y">
        <label for="arranged-employment-spouse-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="arranged-employment-spouse" id="arranged-employment-spouse-no" value="n">
        <label for="arranged-employment-spouse-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="studied-in-canada-spouse">Has your spouse ever studied in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="studied-in-canada-spouse" id="studied-in-canada-spouse-yes" value="y">
        <label for="studied-in-canada-spouse-yes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="studied-in-canada-spouse" id="studied-in-canada-spouse-no" value="n">
        <label for="studied-in-canada-spouse-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="worked-in-canada-spouse">Has your spouse ever worked in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="worked-in-canada-spouse" id="worked-in-canada-spouse-yes" value="y">
        <label for="worked-in-canada--spouseyes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="worked-in-canada-spouse" id="worked-in-canada-spouse-no" value="n">
        <label for="worked-in-canada-spouse-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-start">
    <label class="form-check-label" for="close-relatives-spouse">Does your spouse have any close relatives in Canada? <spam class="col-pri">*</spam> </label> 
    <div class="flex-end">
      <div class="form-check form-check-inline">
        <input type="radio" name="close-relatives-spouse" id="close-relatives-spouse-yes" value="y">
        <label for="close-relatives--spouseyes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="close-relatives-spouse" id="close-relatives-spouse-no" value="n">
        <label for="close-relatives-spouse-no">No</label>
      </div>
    </div>
    </div>
    
    <div class="form-inline flex-between">
      <label for="rel-relation-spouse"> This relative is your spouse's</label>
      <select name="rel-relation-spouse" id="rel-relation-spouse">
        <option value="-1" selected>-</option>
        <option value="mf">Mother / Father</option>
        <option value="ds">Daughter / Son</option>
        <option value="sb">Sister / Brother</option>
        <option value="nn">Niece / Nephew</option>
        <option value="gmgf">Grandmother / Grandfather</option>
        <option value="gdgs">Granddaughter / Grandson</option>
        <option value="au">Aunt / Uncle</option>
        <option value="spcl">Spouse / Commin-law Partner</option>
      </select>
    </div>
  </div>

  
    
  <h4 class="form-heading space-top">Details of Children</h4> 
  <div class="form-mini">
    <div class="form-inline flex-between">
      <label for="street">Total number of children under 22 years old</label>
      <input type="number" class="form-control" id="num-child-under22" name="num-child-under22" aria-describedby="num-child-under22-help" placeholder="">
    </div>
    <div class="form-inline flex-between">
      <label for="street">Total number of children over 22 years old</label>
      <input type="number" class="form-control" id="num-child-over22" name="num-child-over22" aria-describedby="num-child-over22-help" placeholder="">
    </div>    
  </div>

  <div class="center btn-form">
      <button type="submit" id="submit" class="btn btn-primary btn-submit">Submit</button>	
    </div>
</form>
  
</div>





<?php echo file_get_contents("./footer.html"); ?>
