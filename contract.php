<?php
    include_once 'header.php';
    include 'includes/connectiondata.php';
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search Contract:</h1>
        		<form action="contract.php" method="POST">
        		<input type="text" name="cusID" placeholder = "Enter Client ID, First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>
        
        
        
<?php

$id = $_POST['cusID'];

if (empty($id)){
$query = "SELECT c.id, c.first_name, c.last_name, ct.start_date, e.last_name AS empname 
		FROM client c join contract ct on c.id = ct.client_id
		JOIN employee e on ct.employee_ID = e.ssn;";
}
else{

$query = "SELECT c.id, c.first_name, c.last_name, ct.start_date, e.last_name AS empname 
		FROM client c join contract ct on c.id = ct.client_id
		JOIN employee e on ct.employee_ID = e.ssn
		WHERE c.id LIKE '$id' 
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
    		<th>Contract Start Date</th>
    		<th>Handled By</th>
    		<th>Estate</th>
    	</thead>
  		</tr>';
  		

  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {

  
  	echo '<tbody><tr>
  			  <td>'.$row[id].'</td>';
   		echo '<td>'.$row[first_name].'</td>'; 
    	echo '<td>'.$row[last_name].'</td>';
    	echo '<td>'.$row[start_date].'</td>';
    	echo '<td>'.$row[empname].'</td>';
    	echo '<td><a href=estate.php>Estateinfo</a></td>';
    		
  		echo '</tr>
  		</tbody>';
  
  }

	echo '</table>
</div>';

?>		


		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>