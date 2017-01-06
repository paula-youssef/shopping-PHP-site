<style type="text/css">
<!--
body {
	background-image: url(a.jpg);
}
-->
</style>
<?php


$SID = $_POST["TransactionID"];

$con = mysqli_connect("localhost","root","","shopping"); 
 
 
$sql="SELECT * FROM orderprocessing";

$result = mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result)){
	 
	   if($SID==$row['TransactionID']){


              if($row['Shipped']!=0){

                  echo"Product was Shipped";
                  echo"<br>";
                  echo"Shipping Company    ";
                  echo $row['ShippingCompany'];
                   echo"<br>";
             
                  echo"Date Shipped    ";
    
                  echo $row['DateShipped'];
                  echo"<br>";
		break;
                    }
         else{

       echo"Product NOT Shipped";
break;
           }
       }
else{echo "not exist";
break;}
}			  

	?>
