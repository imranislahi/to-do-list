<?php
  session_start();
  foreach ($_SESSION as $key => $value2) 
  	// echo $key."<br>";

  {
  	if (isset($_POST['update'])) {
  		if ($key == $_GET['update']) {
  	
  			$name = "Imran Islahi";
  			$email = "webworksimran@gmail.com";
  			$date = date("d-m-y");
  			$task = $_POST['task'];
  			$task1 = compact('name', 'email', 'date', 'task');
  			$_SESSION[$key] = $task1;
  			header("Location: index.php");

  		}
  	}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
   <form method="post" action="" style="padding-left: 400px; background-color: gray;">
   	    <p>Update Task</p>
   	    <p><input type="text" name="task" placeholder="Enter the tast"></p>
  	    <input type="submit" name="update" value="submit">
   </form>
</body>
</html>