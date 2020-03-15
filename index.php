<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <form method="post" action="" style="padding-left: 400px; background-color: blue;">
  	<h2>To Do List: </h2>
  	<p><input type="text" name="tast" placeholder="Enter the tast"></p>
  	<p><input type="submit" value="Submit" name="submit"></p>
  </form>
  
  <?php
// session_start();
    
if (isset($_POST['submit']) && !empty($_POST['submit']))
   {
	   $taskn = $_POST['tast'];
	   // $id = time().uniqid();
	   $name = "Imran Islahi";
	   $email = "webworksimran@gmail.com";
	   $date = date("d-m-y");
	   $comp = compact("name", "email", "date", "taskn");
	   $_SESSION[time().uniqid()] = $comp;
   }

   // if (!empty($_SESSION)) 
   // {

      echo "<table>";
         echo "<tr>";
           echo "<th>"."Name"."</th>";
           echo "<th>"."Email"."</th>";
           echo "<th>"."Date"."</th>";
           echo "<th>"."Task"."</th>";
           echo "<th>"."Delete"."</th>";
           echo "<th>"."Update"."</th>";
         echo "</tr>";

	     foreach ($_SESSION as $key => $value)
	     {
		       echo "<tr>";
		    foreach ($value as $keys => $values)
		    {
		 	   echo "<td>".$values."</td>";
	
		 	
		    }
		echo "<td>";
  		echo "<form method='get'><button type='submit' value='$key' name='delete' class='btn btn-info btn-lg'>DELETE</button>";
  		echo "</td></form>";
  		echo "<td><form action='back.php' form method='get'>";
  		echo "<button type='submit' value='$key' name='update' class='btn btn-info btn-lg'>UPDATE</button>";
  		echo "</td></form>";
	     }
        echo "</tr>";
	    echo "</table>"; 
	    //All delete session
	    echo "<form method='get' action='clear.php' style='padding-left:500px;'><br><button type='submit' name='clear'>All Delete</button>";
	    echo "</form>";
      // }

      if (isset($_GET['delete'])) {
          	foreach ($_SESSION as $key => $value2) {
          		//echo "<br>".$key;
          		if ($key == $_GET['delete']) {
          			unset($_SESSION[$key]);
              
               }
          		}
          	}
// session_unset();
// session_destroy();
?>
         	

</body>
</html>