<?php 
    session_start();

    // checks if admin is logged in 
    if(!isset($_SESSION['id'])) {
        header("Location: admin.php");
    }

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
    <form action="blogpost-new.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input name="title" type="text" class="form-control" placeholder="Title"> 
        </div>
        <div class="form-group">
            <textarea placeholder="Content" name="content" class="form-control" rows="45"></textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-primary btn-post" name="post" type="submit" value="Post">
        </div>
    </form>
</div>


<?php echo file_get_contents("./footer.html"); ?>

