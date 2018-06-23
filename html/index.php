<?php echo file_get_contents("./header.html"); ?>

<img class="hero" src="../assets/home_bg.jpg" alt="">    

<div class="call-to-action">
  <h1 class="home-title text-center">ICAN</h1>
  <h1 class="text-center">Your trusted immigration company since 2000</h1>
  <a href="./assessment.php" class="button btn btn-primary btn-hero">Take the free assessment</a>
</div>

<div class="home2">
  <div class="flex-container-home">
    <div class="flex-item-home">
      <h4 class="home2-title">We have helped clients from over 55 countries come to Canada</h4>  
      <p>
        Our team of legal professionals are duly licensed with years of glowing 
        experience and an enviable reputation. We are proud of our near 100% Canadian 
        immigration success rate.
      </p>    
      <div class=""><a href="./about.php" class="btn btn-home2">Learn More</a></div> 
    </div>
    <div class="flex-item-home img-container">
      <img src="../assets/globe.jpg" class="img-fluid" alt="">
    </div>
  </div>

  <div class="flex-container-home">
    <div class="flex-item-home">
        <h4 class="home2-title">We provide professional services for</h4>  
        <ul>
          <li>Permanent Resident Visas</li>
          <li>Student Visas</li>
          <li>Work Permits</li>
          <li>And more...</li>
        </ul>    
        <div class=""><a href="./services.php" class="btn btn-home2">All our services</a></div> 
    </div>
    <div class="flex-item-home img-container">
      <img src="../assets/it.jpg" class="img-fluid home2-img" width:="50%" alt="">
      <img src="../assets/student.jpg" class="img-fluid home2-img" width:="50%" alt="">

    </div>
  </div>

  <div class="news">
    <h1 class="">News</h1>
  </div>

</div>

<?php echo file_get_contents("./footer.html"); ?>
  