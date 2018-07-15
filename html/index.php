<?php 
  echo file_get_contents("./header.html"); 
  session_start();
  include_once("db.php");

?>

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
      <img src="../assets/globe.jpg" class="img-fluid home2-img" alt="">
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
      <img src="../assets/it.jpg" class="img-fluid home2-img extra" width:="50%" alt="">
      <img src="../assets/student.jpg" class="img-fluid home2-img " width:="50%" alt="">
    </div>
  </div>

  <div class="flex-container home-contact">
    <h4>Ready to work with us ? <a href="./contact.php" class="btn btn-home-contact">Get in touch</a> </h4>
  </div>

  
  <h1 class="news-title-home">News</h1>
  <div class="news-container flex-container">
    <?php
      require_once("nbbc/nbbc.php");
      $bbCode = new BBCode;
      $sql = "SELECT * from posts ORDER BY id DESC";
      $res = mysqli_query($db, $sql) or die(mysqli_error($db));
  
      $i = 0;
      $posts = "";
  
      if (mysqli_num_rows($res) > 0) {
        while(($row = mysqli_fetch_assoc($res)) && ($i < 4)) {
            $id = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $date = substr($row['date'], 0,10);

            $output = $bbCode -> Parse($content);
            
            $posts .= 
              "<div class='card blogpost-card'>
                  <h1 class='post-title-card'>$title</h1>
                  $date
                  <p class='post-content-preview'>
              ";

            $posts .= substr($output,0,150);

            $posts .= "
              ...      
              </p>

              <div class='left'>
                  <a href='./about.php' class='btn btn-post'>Read More</a>
            ";

              // shows delet and edit buttons if logged in
            if(isset($_SESSION['username'])) {
                $posts .= 
                    "<a href='blogpost-edit.php?pid=$id' class='btn-post btn'>Edit</a>
                      <a href='blogpost-del.php?pid=$id' class='btn-post btn'>Delete</a>
                ";                
            }
  
            $posts .= "
                    </div>
                </div>
            ";

            ++$i;
          }

          echo $posts;
         
      } else {
          echo "There are no posts to display!";
      }
    ?>
  </div>

  <div class="flex-container news-container">

  </div>

</div>

<?php echo file_get_contents("./footer.html"); ?>
  