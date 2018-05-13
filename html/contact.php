
<?php echo file_get_contents("./header.html"); ?>

<h1 class="text-center">Contact Us</h1>

<div class="flex-container-contact">  

  <div class="card flex-item flex-container corp">

    <div class="corp flex-item-2">
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

    <div id="map" class="flex-item"> </div>     

  </div>

  <form class="card flex-item-2">
    <div class="form-group">
      <input type="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Name" required>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="inputSubject" aria-describedby="subjectHelp" placeholder="Subject" required>
    </div>
    <div class="form-group">
      <textarea class="form-control" id="inputMsg" rows="7" aria-describedby="messageHelp" placeholder="Message" required></textarea> 
    </div>
    <div class="btn-container center">
        <button type="submit" id="submit" class="btn btn-primary btn-submit">Submit</button>	
      </div>
  </form>   

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
