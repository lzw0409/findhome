<?php
    include_once 'header.php';
?>
<!DOCTYPE html>

<html lang="en">

<body>

<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search Estate:</h1>
        		<form action="search.php" method="POST">
        		<input type="text" name="address" placeholder = "Enter Estate ID or status(pending,openhouse or sold)">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

<div class="tablecontainer">
	<table>
  		<tr>
  			<th>Estate ID</th>
    		<th>Address</th>
    		<th>Status</th> 
    		<th>More</th>
    
  		</tr>
  		<tr>
  			<td>1000</td>
   			<td>593 cherry street</td>
    		<td>Sold</td>
    		<td><a href="estate.php">View More</a></td>
    		
  		</tr>
  		<tr>
  			<td>1001</td>
    		<td>903 franklin blvd</td>
    		<td>Renting</td>
    		<td><a href="estate.php">View More</a></td>
  		</tr>
  		<tr>
  			<td>1002</td>
    		<td>008 olive street</td>
    		<td>Pending</td>
    		<td><a href="estate.php">View More</a></td>
  		</tr>
  		<tr>
  			<td>1003</td>
    		<td>362 love st</td>
    		<td>Open house</td>
    		<td><a href="estate.php">View More</a></td>
  		</tr>
	</table>
</div>

		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>