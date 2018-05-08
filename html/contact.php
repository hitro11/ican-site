
<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center">Get in Touch</h1>

<div class="center">
<form class="card">
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Name" required>
  </div>
  <div class="form-group">
    <label for="inputEmail1">Email address</label>
    <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="inputSubject">Subject</label>
    <input type="text" class="form-control" id="inputSubject" aria-describedby="subjectHelp" placeholder="Subject" required>
  </div>
  <div class="form-group">
    <label for="inputMsg">Message</label>
    <textarea class="form-control" id="inputMsg" rows="7" aria-describedby="messageHelp" placeholder="Message" required></textarea> 
  </div>
  <div class="btn-container">
      <button type="submit" id="submit" class="btn btn-block btn-primary">Submit</button>	
    </div>
  </form>  
</div>


<div class="flex-container">  
  <div class="card flex-item left-attach">
    <h4>Corporate Office</h4> </br>
    <p>
      1055 Canadian Place, Unit 11</br>
      Mississauga, ON. </br>
      L4W 0C2 </br>
      Canada
    </p>
    <p>
      <i class="fas fa-phone contact-icon"></i> 905­-­625-9933</br>
      <i class="fas fa-envelope contact-icon"></i> info@icaninc.ca</br> 
      <i class="fas fa-fax contact-icon"></i> 905­-­625-9902</br>
    </p>   
  </div>  

  <div id="map" class="card">    
  </div>
</div> 

<h2 class="text-center">Other Offices</h2>

  <div class="flex-container">
    <div class="card flex-item">
      <h4>India Office (Kareer Krafters India Pvt. Ltd.)</h4> <br>
      <p>
        405/ B Vertax Vikas, M.V. Road</br>
        Andheri (E) </br>
        Mumbai, Maharashtra-400 069 </br>
      </p>
      <p>
        <i class="fas fa-phone contact-icon"></i> 91-222-684-2210 </br>
        <i class="fas fa-phone contact-icon"></i> 91-222-684-2728 </br> 
      </p>   
    </div>

    <div class="card flex-item">
      <h4>Pakistan Office (Bilal Ali-Bokhari)</h4> <br>
      <p>
        APT #1A, 455A Adra Colony,Tench Road</br>
        Rawalpindi, Lahore </br>
      </p>
      <p>
        <i class="fas fa-phone contact-icon"></i> +92­-­51­-­5524923</br>
        <i class="fas fa-mobile contact-icon"></i> 0300­-­8557494</br> 
        <i class="fas fa-fax contact-icon"></i> +92-51-5584522</br>
      </p>   
    </div>

    <div class="card flex-item">
      <h4>Toronto Office</h4> <br>
      <p>
        150 Ferrand Drive, Suite 1501</br>
        Toronto, ON. </br>
        M3C 3E5 </br>
        Canada    
      </p>
      <p>
        <i class="fas fa-phone contact-icon"></i> 905-625-9933</br>
      </p>   
    </div>
  </div>


<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-KE-F52AwwpwcAQlKBDT6216FfvV8aDg&callback=initMap">
</script>

<?php echo file_get_contents("./footer.html"); ?>
