
<?php 
    session_start();

    // checks if admin is logged in 
    if(!isset($_SESSION['username'])) {
        header("Location: admin.php");
    }

    if(!isset($_SESSION['id'])) {
        header("Location: admin.php");
    }

    include_once("db.php");
    echo file_get_contents("./header.html"); 

    $pid = $_GET['pid'];

    if (isset($_POST['update'])) {
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);

        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);

        if ($title == "" || $content == "") {
            echo "Please fill in all fields.";
        }

        $sql = "UPDATE posts SET title='$title', content='$content' WHERE id='$pid'";

        mysqli_query($db, $sql);
        header("Location: blog.php");
    }
?>

<div class="text whitesmoke margin-top">
    <h2 class="new-post-title" >Edit Post</h2>

    <?php
        $sql_get = "SELECT * from posts WHERE id=$pid LIMIT 1";
        $res = mysqli_query($db, $sql_get);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $title = $row['title'];
                $content = $row['content'];

                echo "
                <form action='blogpost-edit.php?pid=$pid' method='post' enctype='multipart/form-data'>
                    <div class='form-group'>
                        <input name='title' type='text' class='form-control' value='$title' placeholder='Title'> 
                    </div>
                    <div class='form-group'>
                        <textarea placeholder='Content' name='content' class='form-control' rows='45'>$content</textarea>
                    </div>
                    <div class='form-group'>
                        <input class='btn btn-primary btn-post' name='update' type='submit' value='Update'>
                    </div>
                </form>
                ";
            }
        }
    ?>
    
</div>


<?php echo file_get_contents("./footer.html"); ?>
