<style type="text/css">
<!--
body {
	background-image: url(a.jpg);
}
-->
</style>
<?php

	$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;
	$sql = "SELECT * FROM `customer`" ;

	$res = mysqli_query( $conn , $sql );
	
	echo "<form action='Profile.php' method='POST'>" ;
		
		echo "<select name='cusList'>";
			
			echo "<option> choose customer ... </option>";
			while ( $row = mysqli_fetch_array($res) ){
				
				echo "<option value = '".$row['CustomerID']."' >".$row['FirstName']." </option>" ;
			}
		
		echo "</select>" ;
		echo "<input type = 'submit' name = 'Submit' value = 'Choose Customer' >" ;
		
	echo "</form>" ;

?>