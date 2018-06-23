<?php 
    session_start();
    include_once("db.php");
    echo file_get_contents("./header.html"); 
    echo "
    <div class='text'> 
        <h1 class='page-title'>News</h1>                  
    ";
    
    require_once("nbbc/nbbc.php");
    $bbCode = new BBCode;
    $sql = "SELECT * from posts ORDER BY id DESC";
    $res = mysqli_query($db, $sql) or die(mysqli_error($db));

    $posts = "";

    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $date = $row['date'];

            $output = $bbCode -> Parse($content);

            $admin = "
            <div>
                <a href='edit_post.php?pid=$id'>Edit</a>
            </div>
            <div>
                <a href='del_post.php?pid=$id'>Delete</a>
            </div>
            ";   
            
            $posts .= 
            "<div class='card post-card'>
                <h1 class='post-title'>$title</h1>
                $date
                <p class='post-content-preview'>";

            $posts .= substr($output,0,300);

            $posts .=
            "        
                    ...      
                </p>

                <a href='./about.php' class='btn btn-primary btn-post'>Read More</a>
             </div>";
        }

        echo $posts;
    } else {
        echo "There are no posts to display!";
    }

echo "</div>";

echo file_get_contents("./footer.html"); ?>
