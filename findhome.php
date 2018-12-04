<?php
    include_once 'header.php';
?>
<!DOCTYPE html>

<html lang="en">

	<div class="notecontainer">
		<h1>
		FindHome Estate Internal System
		</h1>
		<p>Please notice this website is for FindHome estate employee use only. You can find customer record, contract information and estate status in the system</p>
	</div>

		<section class="searchbar">
        	<div class="clearcontainer">
        		<h1>Search customers:</h1>
        		<form action="searchCus.php" method="POST">
        		<input type="text" name="cusID" placeholder = "Enter customerID or First or Last name">
        		<input type="submit" value="Search">
        		</form>
        		
        	</div>
        	
        </section>

</body>
<?php
    include_once 'footer.php';
?>
</html>