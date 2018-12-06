<?php
    include_once 'header.php';
    
    include 'includes/connectiondata.php';

// Create connection
$conn = new mysqli($server, $user, $pass, $dbname, $port);


$id = $_POST['cusID'];

$id = mysqli_real_escape_string($conn, $id);
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search customers:</h1>
        		<form action="search.php" method="POST">
        		<input type="text" name="cusID" placeholder = "Enter customerID or First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

<?php

$query = "SELECT * FROM client c WHERE c.id LIKE '$cusID';";
$result =mysqli_query($conn, $query)
or die(mysqli_error($conn));



echo '<div class="tablecontainer">
	<table>
  		<tr>
  			<th>Client ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th> 
    		<th>More</th>
    
  		</tr>';
  		
$Cid = $Fname = $Lname = "";
  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {
  $Cid = $row[id];
  $Fname = $row[first_name];
  $Lname = $row[last_name];
  
  }
  		echo '<tr>
  			  <td>'.$Cid.'</td>';
   		echo '<td>'.$Fname.'</td>'; 
    	echo '<td>'.$Lname.'</td>';
    	echo '<td><a href=clientmoreinfo.php>View More</a></td>';
    		
  		echo '</tr>
  		
	</table>
</div>';

?>		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>