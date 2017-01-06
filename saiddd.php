<?php

if(isset($_POST['signup'])){
	
	
$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;

	
$name=$_POST["productname"];
$description=$_POST["description"];
$price=$_POST["price"];
$quantity=$_POST["productquantity"];
$category=$_POST["category"];
$subcategory=$_POST["subcategory"];




   if(preg_match("/^[a-zA-Z]*$/",$_POST['productname'])==0 || preg_match("/^[a-zA-Z]*$/",$_POST['description']) ==0 || preg_match("/^[a-zA-Z]*$/",$_POST['category']) ==0 || preg_match("/^[a-zA-Z]*$/",$_POST['subcategory']) ==0){
echo "fil these fields with only letters";

}

else if(!is_numeric($price) || !is_numeric($quantity)){
echo "price must be numeric";
}



else{



 
$sql = "INSERT INTO product(ItemName,ItemDescription,Price, QuantityInStock, Category,SubCategory) VALUES( '$name' , '$descrption', '$price','$quantity' , '$category', '$subcategory') ";
 mysqli_query( $conn , $sql );
header('location: mess2.html');
}

}

?>