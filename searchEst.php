<?php
    include_once 'header.php';
    include 'includes/connectiondata.php';
    
        
    $conn = new mysqli($server, $user, $pass, $dbname, $port);

	$id = mysqli_real_escape_string($conn, $id);
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search Estate:</h1>
        		<form action="searchEst.php" method="POST">
        		<input type="text" name="estID" placeholder = "Enter Estate ID or status(pending,openhouse or sold)">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>
        
        
<?php

$id = $_POST['estID'];
if (empty($id)){
$query = "SELECT est.id AS esID, 
		est.estate_name as estname, 
		es.name as eststatus 
		FROM estate est
		JOIN estate_status es 
		ON est.estate_status_id = es.id;";
}else{
$query = "SELECT est.id AS esID, 
		est.estate_name as estname, 
		es.name as eststatus 
		FROM estate est
		JOIN estate_status es 
		ON est.estate_status_id = es.id 
		WHERE est.id LIKE '$id' 
			OR es.name LIKE '$id';";}

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
  			<th>Estate ID</th>
    		<th>Name</th>
    		<th>Status</th> 
    		<th>More</th>
    	</thead>
  		</tr>';
  		

  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {

  
  	echo '<tbody><tr>
  			  <td>'.$row[esID].'</td>';
   		echo '<td>'.$row[estname].'</td>'; 
    	echo '<td>'.$row[eststatus].'</td>';

    	echo '<td><a href=estate.php>Moreinfo</a></td>';
    		
  		echo '</tr>
  		</tbody>';
  
  }

	echo '</table>
</div>';

?>





		

</body>

<?php include 'footer.php';?>

</html>