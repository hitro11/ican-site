<?php     
    session_start();
    if ($_POST['login']) {
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $sql = "";
    }

    echo file_get_contents("./header.html"); 
?>

<h1>Admin Login</h1>

<form action="" method="post" class="margin-top">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="" type="password" name="password" 
               minLength="8" required 
               placeholder="" />
    </div>
</form>

<?php echo file_get_contents("./footer.html"); ?>
