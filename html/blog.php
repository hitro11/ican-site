<?php 
    session_start();
    include_once("db.php");
    echo file_get_contents("./header.html"); 
    
    echo "
    <div class='news-container'> 
        <h1 class='page-title'>News</h1>                  
    ";
    
    require_once("nbbc/nbbc.php");
    $bbCode = new BBCode;
    $sql = "SELECT * from posts ORDER BY id DESC";
    $res = mysqli_query($db, $sql) or die(mysqli_error($db));

    $posts = "";

    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $pid = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $date = substr($row['date'], 0,10);

            $output = $bbCode -> Parse($content);
            
            $posts .= 
            "<div class='card blogpost-card blog-card'>
                <h1 class='post-title-card'>$title</h1>
                $date
                <p class='post-content-preview'>";

            $posts .= substr($output,0,300);

            $posts .=
            "        
							...      
							</p>

							<div class='left'>
									<a href='./blogpost-view.php?pid=$pid' class='btn btn-post'>Read More</a>
						";

             // checks if admin is logged in 
            if(isset($_SESSION['username'])) {
                $posts .= 
                    "<a href='blogpost-edit.php?pid=$pid' class='btn-post btn'>Edit</a>
                     <a href='blogpost-del.php?pid=$pid' class='btn-post btn'>Delete</a>
                ";                
            }

            $posts .= "
                    </div>
                </div>
            ";
        }

        echo $posts;
    } else {
        echo "There are no posts to display!";
    }

echo "</div>";

echo file_get_contents("./footer.html");
?>
