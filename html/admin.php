<?php     
    session_start();
    if (isset($_POST['login'])) {
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
                
        $password = md5($password);

        $sql = "SELECT * FROM accounts where username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];

        //check if entered password is correct
        if ($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        }
        else {
            echo "Incorrect username or password entered!";        
        }
    }

    if (isset($_GET['logout'])) {
        session_start();
        session_destroy();
        header("Location: index.php");
    }

    echo file_get_contents("./header.html"); 
?>

<h1 class="page-title">Admin Login</h1>

<form action="admin.php" method="post" class="margin-top">
    <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input class="" type="password" name="password" 
               minLength="8" required 
               placeholder="" />
    </div>
    <div class="form-group">
        <input name="login" type="submit" value="Login">
    </div>
</form>

<a class="btn btn-primary" href="admin.php?logout=true">Logout</a>

<?php echo file_get_contents("./footer.html"); ?>
