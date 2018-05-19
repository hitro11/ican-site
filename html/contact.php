<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center page-title">Contact Us</h1>

<div class="flex-container-contact">
  
  <div class="flex-item-2"> 
    <h4>Head Office</h4> </br>
    <p>
      1055 Canadian Place, Unit 11</br>
      Mississauga, ON. </br>
      L4W 0C2 </br>
      Canada
    </p>
    <i class="fas fa-phone contact-icon"></i> 905­-­625-9933</br>
    <i class="fas fa-envelope contact-icon"></i> info@icaninc.ca</br> 
    <i class="fas fa-fax contact-icon"></i> 905­-­625-9902</br>   
  </div>

  <div class="flex-item" id="map"></div>

  <div class="flex-item">
    <form action="" class="card">
      <div class="form-group">
        <input type="name" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subjectHelp" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Message"></textarea>
      </div>
    </form>    
  </div>
</div> 

  
<h2 class="text-center">Other Locations</h2>

  <div class="flex-container-contact">
    <div class="flex-item">
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

    <div class="flex-item">
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

    <div class="flex-item">
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
