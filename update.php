<?php


if(isset($_POST['signup'])){



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
header('location: mess.html');
}

else{
$sqll = "SELECT * FROM  customer WHERE CustomerID='1' ";
	

 

$res = mysqli_query( $conn , $sqll );
while($row = mysqli_fetch_array($res))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }

}

}

?>