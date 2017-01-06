<?php






if(isset($_POST['signup'])){
	
	Session_start();


$var=$_SESSION['ProductID'];

$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;

	
$name=$_POST["productname"];
$description=$_POST["description"];
$price=$_POST["price"];
$category=$_POST["category"];
$subcategory=$_POST["subcategory"];
$quantity=$_POST["productquantity"];



   if(preg_match("/^[a-zA-Z]*$/",$_POST['productname'])==0 || preg_match("/^[a-zA-Z]*$/",$_POST['description']) ==0 || preg_match("/^[a-zA-Z]*$/",$_POST['category']) ==0 || preg_match("/^[a-zA-Z]*$/",$_POST['subcategory']) ==0){
echo "fil these fields with only letters";

}

else if(!is_numeric($price) || !is_numeric($quantity)){
echo "price and quantity must be numeric";
}



else{



 
$sql = "UPDATE product SET ItemName='".$name."' , ItemDescription='".$descrption."', Price='".$price."', Category='".$category."', SubCategory='".$subcategory."' , QuantityInStock='".$quantity."'  WHERE ProductID= '".$var."' ";
$res = mysqli_query( $conn , $sql );
header('location: mess.html');
}




}





?>