<?php
if(isset($_POST['signup'])){

$conn = mysqli_connect("localhost","root","","shopping");

$Fname=$_POST["firstname"];
$Lname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$shippingaddress=$_POST["shippingaddress"];
$billingaddress=$_POST["billingaddress"];

if($Fname=="" || $Lname=="" || $email=="" || $password=="" || $phone=="" || $shippingaddress==""){
	echo "please enter missing lables";
}else if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])==0 || preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) ==0){
	echo "first name or last name must be only letters";
}else if(!is_numeric($phone)){
	echo "phone numbers must be numeric";
}else{
	$sql = "SELECT Email FROM customer";
	

	$res = mysqli_query($conn ,$sql);
	
	while($row = mysqli_fetch_array($res)){
	 	
		if(strcmp($email,$row['Email']) ==0){
			
					echo "repeated";
					 break;
			}
		$query = " INSERT INTO shopping.customer (FirstName ,LastName,Email,Password,Phone,ShippingAddress,BillingAddress) VALUES ('$Fname','$Lname','$email','$password','$phone','$shippingaddress','$billingaddress')" ;

		mysqli_query($conn ,$query) ;
    
        header('location:  User Home.php');
	
		break;
	
		}
	}
}
?>