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
  			<th>Employee ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th> 
    		<th>More</th>
    
  		</tr>
  		<tr>
  			<td>001</td>
   			<td>Jill</td>
    		<td>Smith</td>
    		<td><a href="searchEmpMore.php">View More</a></td>
    		
  		</tr>
  		<tr>
  			<td>002</td>
    		<td>Eve</td>
    		<td>Jackson</td>
    		<td><a href="searchEmpMore.php">View More</a></td>
  		</tr>
  		<tr>
  			<td>003</td>
    		<td>John</td>
    		<td>Doe</td>
    		<td><a href="searchEmpMore.php">View More</a></td>
  		</tr>
  		<tr>
  			<td>004</td>
    		<td>Ash</td>
    		<td>Mike</td>
    		<td><a href="searchEmpMore.php">View More</a></td>
  		</tr>
	</table>
</div>

		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>