<?php


$SID = $_POST["Transaction ID"];

$con = mysql_connect("localhost","root","","Ecommerce"); 
 if (!$con) {
  die('Could not connect: ' . mysql_error());
 }
 mysql_select_db("Ecommerce");


$result = mysql_query("SELECT * FROM Order Processing");


	while($row = mysql_fetch_array($result)){
	 
	   if($SID==$row['Transaction ID']){


              if($row['Shipped']!=0){

                  echo"Product was Shipped";
                  echo"<br>";
                  echo"Shipping Company    ";
                  echo $row['Shipping Company'];
                   echo"<br>";
              
                  echo"Date Shipped    ";
    
                  echo $row['Date Shipped'];
                  echo"<br>";
                    }
         else{

       echo"Product NOT Shipped";
           }
                
         }

   else if($SID!=$row['Transaction ID']){

   echo"Please Enter Corecct Transaction";	           
     }
							  
		
	}
  mysql_close($con);


	?>
