<?php
    include_once 'header.php';
    include 'includes/connectiondata.php';
?>

    <section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search customers:</h1>
        		<form action="search.php" method="POST">
        			<input type="text" name="cusID" placeholder = "Enter customerID or First or Last name">
        			<input type="submit" value="Search">
        		</form>        		
        	</div>        	
    </section>


<?php


$cusID = $_POST['cusID'];

$cusID = mysqli_real_escape_string($conn, $cusID);
// this is a small attempt to avoid SQL injection
// better to use prepared statements

$query = "SELECT *
			FROM client c
			WHERE c.id LIKE '%$cusID%;';";


$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));
$queryResult = mysqli_num_rows($result);


if($queryResult < 1){
	echo "No matches found, please enter something else.";
	include_once 'footer.php';
	exit;
}
?>


    <table>
        <thead>
            <tr>
                <th>Client ID</th>
    			<th>Firstname</th>
    			<th>Lastname</th> 
    			<th>More</th>
            </tr>
        </thead>
            <tbody>


<?php
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $cusID = $row['id'];
        print "<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['fist_name'].'</td>
        <td>'.$row['last_name'].'</td>
        <td>'<a href="clientmoreinfo.php">View More</a>'</td>
        </tr>";
    }
*/?>
            </tbody>
        </table>


<?php
    include_once 'footer.php';
?>