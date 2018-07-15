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
            header("Location: blog.php");
        }
        else {
            echo "Incorrect username or password entered!";        
        }
    }

    if (isset($_GET['logout'])) {
        session_start();
        session_destroy();
        header("Location: admin.php");
    }

    echo file_get_contents("./header.html"); 
?>

<h1 class="page-title">Admin Page</h1>

<?php
    // checks if admin is logged in 
    if(isset($_SESSION['username'])) {

        echo "
					<a class='btn btn-primary btn-logout' href='blogpost-new.php'>New Post</a>	
					<a class='btn btn-logout' href='admin.php?logout=true'>Logout</a>
        ";
    }
    else {
			echo "
					<form action='admin.php' method='post' class='margin-top'>
						<div class='form-group'>
							<label for='username'>Username: </label>
							<input type='text' name='username' required>
						</div>
					
						<div class='form-group'>
							<label for='password'>Password: </label>
							<input class='' type='password' name='password' 
									minLength='8' required 
									placeholder='' />
						</div>
					
						<div class='form-group'>
							<input class='btn btn-primary' name='login' type='submit' value='Login'>        
						</div>   
					</form>        
			";

    }

    echo file_get_contents("./footer.html"); ?>
