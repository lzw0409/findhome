<?php
    include_once 'header.php';
    include 'includes/connectiondata.php';
    include 'searchCus.php';



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
<footer>
         <p>FindHome Design By Luyao Wang, Ziwei Liu, Copyright &copy; 2018</p>
         </footer>


</html>