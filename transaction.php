<?php
  
	
$Fname=$_POST["firstname"];
$Lname=$_POST["lastname"];
$Company=$_POST["company"];
$Address=$_POST["address"];
$Zip=$_POST["zip"];
$Phone=$_POST["phone"];
$Email=$_POST["email"];
$Confirm=$_POST["confirm"];


$Fname2=$_POST["firstname2"];
$Lname2=$_POST["firstname3"];
$Company2=$_POST["firstname4"];
$Address2=$_POST["firstname5"];
$Zip2=$_POST["firstname6"];
$Phone2=$_POST["firstname7"];
$Email2=$_POST["firstname8"];


if($Fname=="" || $Fname2=="" || $Lname=="" || $Lname2=="" || $Company=="" || $Company2==""  || $Adddress="" || $Adddress2="" || $Zip="" || $Zip2="" || $Phone="" || $Phone2=""  || $Email="" || $Email2="" || $Confirm="" || $Confirm2=""){
echo "please enter missing lables";
}

 else if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])==0 || preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) ==0   || preg_match("/^[a-zA-Z]*$/",$_POST['firstname2']) ==0  || preg_match("/^[a-zA-Z]*$/",$_POST['firstname3']) ==0 ){
echo "first name or last name must be only letters";

}

/*else if(!is_numeric($Phone)==1 || !is_numeric($Phone2)==1|| !is_numeric($Zip)==1 || !is_numeric($Zip2)==1 ){
echo "phone numbers and Zip Code  must be numbers";
}
*/


else if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])==1 && preg_match("/^[a-zA-Z]*$/",$_POST['firstname2']) ==1  && preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) ==1  && preg_match("/^[a-zA-Z]*$/",$_POST['firstname3']) ==1  && $Fname!=""  && $Fname2!="" && $Lname!="" && $Lname2!="" && $Company!=""   && $Company2!=""   && $Address!=""   && $Address2!=""   && $Email!=""   && $Email2!=""   && $Confirm!=""  && $Confirm2!="" && !is_numeric($Phone)==0  && !is_numeric($Phone2)==0  && !is_numeric($Zip)==0  && !is_numeric($Zip2)==0 ){
echo " ";
}

else {
	
echo " Thank You For Purchasing  " ;
}

?>









