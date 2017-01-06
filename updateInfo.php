<?php

if(isset($_POST['signup'])){

Session_start();


$var=$_SESSION['CustomerID'];

$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;


$Fname=$_POST['firstname'];
$Lname=$_POST['lastname'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];

 if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])==0 || preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) ==0){
echo "first name or last name must be only letters";

}
else if(!is_numeric($phone)){
echo "phone numbers must be numeric";
}
else if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])==1 && preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) ==1 &&  !is_numeric($phone)==1 ){

}

else{ 
	$sql = "UPDATE customer SET FirstName='".$Fname."' ,LastName='".$Lname."',Password='".$password."',Phone='".$phone."',BillingAddress='".$address."'
	WHERE CustomerID= '".$var."' ";
	$res = mysqli_query( $conn , $sql );
	header('location: mess.html');
}

}

?>