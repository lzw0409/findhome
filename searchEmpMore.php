<?php
    include_once 'header.php';
    include 'includes/connectiondata.php';
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search Employee Handled Client:</h1>
        		<form action="searchEmpMore.php" method="POST">
        		<input type="text" name="empID" placeholder = "Enter EmployeeID, First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

<?php

$id = $_POST['empID'];
if (empty($id)){
$query = "SELECT cl.id AS handleid, e.first_name, e.last_name FROM employee e
		JOIN contract c on e.ssn = c.employee_id
		JOIN client cl on c.client_id = cl.id;";
}
else{
$query = "SELECT cl.id AS handleid, e.first_name, e.last_name FROM employee e
		JOIN contract c on e.ssn = c.employee_id
		JOIN client cl on c.client_id = cl.id 
		WHERE e.ssn LIKE '$id' 
			OR e.first_name LIKE '$id' 
			OR e.last_name LIKE '$id';";}

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
  			<th>Handled Client ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th>
    		<th>More</th> 
    	</thead>
  		</tr>';
  		

  		
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {

  
  	echo '<tbody><tr>
  			  <td>'.$row[handleid].'</td>';
   		echo '<td>'.$row[first_name].'</td>'; 
    	echo '<td>'.$row[last_name].'</td>';
    	echo '<td><a href=searchEmpMore.php>More</a></td>';
    		
  		echo '</tr>
  		</tbody>';
  
  }

	echo '</table>
</div>';

?>
		

</body>
<?php
include 'footer.php';
?>


</html>