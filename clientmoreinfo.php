<?php
    include_once 'header.php';
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search Employee:</h1>
        		<form action="search.php" method="POST">
        		<input type="text" name="address" placeholder = "Enter EmployeeID, First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

<div class="tablecontainer">
	<table>
  		<tr>
  			<th>Client ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th> 
    		<th>Address</th>
    		<th>Phone</th>
    		<th>email</th>
    		<th>Contract</th>
    
  		</tr>
  		<tr>
  			<td>001</td>
   			<td>Jill</td>
    		<td>Smith</td>
    		<td>5320 love st</td>
    		<td>541352573</td>
    		<td>jsmith@gmail.com</td>  		
    		<td><a href="contract.php">Contract</a></td>
    		
  		</tr>
  		
	</table>
</div>

		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>