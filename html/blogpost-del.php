<?php
    session_start();
    include_once("db.php");

    if(!isset($_SESSION['username'])) {
        header("Location: admin.php");
    }

    if (!isset($_GET['pid'])) {
        header("Location: blog.php");
    }
    else {
        $pid = $_GET['pid'];
        $sql = "DELETE FROM posts WHERE id=$pid";
        mysqli_query($db, $sql);
        header("Location: blog.php");
    }
?>