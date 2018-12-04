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
    		<th>city</th>
    		<th>floor space</th>
    		<th>balconies</th>
    		<th>bedrooms</th>
    		<th>bathrooms</th>
    		<th>garages</th>
    		<th>parking space</th>
    		<th>pets allow</th>
    		<th>Owner</th>
    
  		</tr>
  		<tr>
  			<td>1000</td>
   			<td>593 cherry street</td>
    		<td>Sold</td>
    		<td>Eugene</td>
    		<td>912 sq/ft</td>
    		<td>1</td>
    		<td>2</td>
    		<td>2</td>
    		<td>yes</td>
    		<td>2</td>
    		<td>yes</td>
    		<td>Jake Miller</td>


    		
  		</tr>
  		
	</table>
</div>

		

</body>
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>