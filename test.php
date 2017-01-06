<?php
if(isset($_POST['signin'])){

	$conn = mysqli_connect("localhost","root","","shopping");

	Session_start();
	$_SESSION['Mail']=$_POST['email'] ;


	$pas=$_POST["password"];
	$mai=$_POST["email"];

	$sql = "SELECT * FROM customer ";

	$res = mysqli_query($conn ,$sql);
	$sqll = "SELECT * FROM admin ";

	$ress = mysqli_query($conn ,$sqll);


	while($row = mysqli_fetch_array($res)){
	 
		if($mai ==$row['Email'] && $pas ==$row['Password']){
					
			header('location:productList.php') ;	
					 
					 break;
			}
		
        
}
   
while($row = mysqli_fetch_array($ress)){
	 
		if($mai ==$row['userName'] && $pas ==$row['Password']){
					
			header('location:admin page.php') ;	
					 
					 break;
			}
}
echo "<h1><b>Wrong Email or password !!!!!<br/> Please tray again. </b></h1>" ;
}    
?>
