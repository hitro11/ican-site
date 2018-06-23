<?php 
    session_start();
    include_once("db.php");
    echo file_get_contents("./header.html"); 

    if (isset($_POST['post'])) {
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);

        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);

        $sql = "INSERT into posts (title, content) VALUES ('$title', '$content')";

        if ($title == "" || $content == "") {
            echo "Please fill in all fields.";
        }

        mysqli_query($db, $sql);
        header("Location: blog.php");
    }
?>

<div class="text whitesmoke margin-top">
    <h2 class="new-post-title" >New Post</h2>
    <form action="blog-new.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input placeholder="Title" name="title" class="form-control" type="text" autofocus size="30"><br/>
            <textarea placeholder="Content" name="content" class="form-control" rows="45"></textarea>
            <input class="btn btn-primary btn-post" name="post" type="submit" value="Post">            
        </div>
    </form>
</div>


<?php echo file_get_contents("./footer.html"); ?>