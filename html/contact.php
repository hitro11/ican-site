<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center page-title">Contact Us</h1>

<div class="center">
  <form action="../scripts/contactFormEmail.php" class="card contact-form" method="post">
    <div class="form-group">
      <label for="name">Name <span class="col-pri">*</span></label>
      <input type="name" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="email">Email <span class="col-pri">*</span></label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="subject">Subject <span class="col-pri">*</span></label>
      <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subjectHelp" placeholder="Subject" required>
    </div>
    <div class="form-group">
      <label for="msg">Message <span class="col-pri">*</span></label>
      <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Message"></textarea>
    </div>

    <div class="g-recaptcha" data-sitekey="6LckG1sUAAAAAF7gYPSiA335pbwXBznJAI87HkD3"></div>

    <div class="center btn-form">
      <button type="submit" id="submit" class="btn btn-primary btn-submit">Submit</button>	
    </div>
  </form>   
</div>

<div class="container-headOffice">
  <h1 class="center col-pri-dark">Head Office</h1>
  <div class="flex-container-contact">
    <div class="flex-item-2 contact-card"> 
      <p>
        1055 Canadian Place, Unit 11</br>
        Mississauga, ON. </br>
        L4W 0C2 </br>
        Canada
      </p>
      <i data-feather="phone"></i> 905­-­625-9933 <br>
      <i data-feather="mail"></i> info@icaninc.ca 
    </div>

    <div class="flex-item" id="map"></div>
  </div> 
</div>



  <h1 class="text-center col-pri-dark">Other Locations</h1>

  <div class="flex-container-contact2">
    <div class="flex-item card">
      <h4>Kareer Krafters India Pvt. Ltd.</h4> <br>
      <p>
        405/ B Vertax Vikas, M.V. Road</br>
        Andheri (E) </br>
        Mumbai, Maharashtra-400 069 </br>
      </p>
      <p>
        <i data-feather="phone"></i> 91-222-684-2210 </br>
        <i data-feather="phone"></i> 91-222-684-2728 </br> 
      </p>   
    </div>

    <div class="flex-item card">
      <h4>Bilal Ali-Bokhari</h4> <br>
      <p>
        APT #1A, 455A Adra Colony,Tench Road</br>
        Rawalpindi, Lahore </br>
      </p>
      <p>
        <i data-feather="phone"></i> +92­-­51­-­5524923</br>
        <i data-feather="smartphone"></i></i> 0300­-­8557494</br> 
      </p>   
    </div>

    <div class="flex-item card">
      <h4>Toronto Office</h4> <br>
      <p>
        150 Ferrand Drive, Suite 1501 </br>
        Toronto, ON </br>
        M3C 3E5 </br> 
      </p>
      <p>
        <i data-feather="phone"></i> 905-625-9933</br>
      </p>   
    </div>
  </div>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-KE-F52AwwpwcAQlKBDT6216FfvV8aDg&callback=initMap">
</script>

<?php echo file_get_contents("./footer.html"); ?>
