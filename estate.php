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
        		<h1>Search Estate Detail:</h1>
        		<form action="estate.php" method="POST">
        		<input type="text" name="estID" placeholder = "Enter Estate ID or status(pending,openhouse or sold)">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>
        
        
<?php

$id = $_POST['estID'];

if (empty($id)){
$query = "SELECT est.id AS etid, 
	est.estate_name AS estname, 
	es.name as eststatus,
	ct.city_name as estcity, 
	est.floor_space AS fspace, 
	est.num_balconies AS nbal,
	est.num_bedroom AS nbed,
	est.num_bathroom AS nbath,
	est.num_parking_space AS nparking,
	est.pets_allowed AS pet
	FROM estate est
	JOIN estate_status es ON est.estate_status_id = es.id
	JOIN city ct ON est.city_id = ct.id;";
}else{

$query = "SELECT est.id AS etid, 
	est.estate_name AS estname, 
	es.name as eststatus,
	ct.city_name as estcity, 
	est.floor_space AS fspace, 
	est.num_balconies AS nbal,
	est.num_bedroom AS nbed,
	est.num_bathroom AS nbath,
	est.num_parking_space AS nparking,
	est.pets_allowed AS pet
	FROM estate est
	JOIN estate_status es ON est.estate_status_id = es.id
	JOIN city ct ON est.city_id = ct.id
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
    		<th>Estate Name</th>
    		<th>Status</th> 
    		<th>city</th>
    		<th>floor space</th>
    		<th>balconies</th>
    		<th>bedrooms</th>
    		<th>bathrooms</th>
    		<th>parking space</th>
    		<th>pets allow</th>
    	</thead>
  		</tr>';
  		

  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {

  
  	echo '<tbody><tr>
  			  <td>'.$row[etid].'</td>';
   		echo '<td>'.$row[estname].'</td>'; 
    	echo '<td>'.$row[eststatus].'</td>';
		echo '<td>'.$row[estcity].'</td>';
		echo '<td>'.$row[fspace].'</td>';
		echo '<td>'.$row[nbal].'</td>';
		echo '<td>'.$row[nbed].'</td>';
		echo '<td>'.$row[nbath].'</td>';
		echo '<td>'.$row[nparking].'</td>';
		echo '<td>'.$row[pet].'</td>';
    		
  		echo '</tr>
  		</tbody>';
  
  }

	echo '</table>
</div>';

?>

</body>

<?php include 'footer.php';?>

</html>


