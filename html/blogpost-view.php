<?php 
	session_start();
	include_once("db.php");
	echo file_get_contents("./header.html");
	
	require_once("nbbc/nbbc.php");
	$bbCode = new BBCode;
	$pid = $_GET["pid"];
	$sql = "SELECT * from posts WHERE id = $pid ";
	$res = mysqli_query($db, $sql) or die(mysqli_error($db));

	while ($row = mysqli_fetch_array($res)) {
		$title = $row['title'];
		$date = substr($row['date'], 0,10);
		$content = $row['content'];
	}

	$post = "
		<div class='text'>
			<h1 class='post-title'>$title</h1>    
			$date

			<p class='post-content-preview'>$content</p>
		</div>
	";

	echo $post;


	echo file_get_contents("./footer.html");
?>