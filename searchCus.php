<?php
    include_once 'header.php';
    
    include 'includes/connectiondata.php';

// Create connection
$conn = new mysqli($server, $user, $pass, $dbname, $port);



$id = mysqli_real_escape_string($conn, $id);
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search customers:</h1>
        		<form action="searchCus.php" method="POST">
        		<input type="text" name="cusID" placeholder = "Enter customerID or First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

<?php



$id = $_POST['cusID'];
if (empty($id)){
$query = "SELECT * FROM client c;";
}
else{
$query = "SELECT * FROM client c WHERE c.id LIKE '$id' 
			OR c.first_name LIKE '$id' 
			OR c.last_name LIKE '$id';";}

$result =mysqli_query($conn, $query)
or die(mysqli_error($conn));
$queryResult = mysqli_num_rows($result);


if($queryResult < 1){
	echo'<div class="notecontainer">
	<p>No matches found, please enter something else.</p>
	</div>';
	
	include_once 'footer.php';
	exit;
}




echo '<div class="tablecontainer">
	<table>
		<thead>
  		<tr>
  			<th>Client ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th> 
    		<th>Phone</th>
    		<th>Email</th>
    		<th>Address</th>
    		<th>Contract</th>
    	</thead>
  		</tr>';
  		

  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {

  
  	echo '<tbody><tr>
  			  <td>'.$row[id].'</td>';
   		echo '<td>'.$row[first_name].'</td>'; 
    	echo '<td>'.$row[last_name].'</td>';
    	echo '<td>'.$row[phone].'</td>';
    	echo '<td>'.$row[mail].'</td>';
    	echo '<td>'.$row[address].'</td>';
    	echo '<td><a href=contract.php>Contract</a></td>';
    		
  		echo '</tr>
  		</tbody>';
  
  }

	echo '</table>
</div>';

?>		

</body>
</html>

<?php
include 'footer.php';
?>