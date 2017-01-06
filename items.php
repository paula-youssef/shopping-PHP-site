<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>items</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="Style.css" rel="stylesheet" type="text/css" />
<link href="navStyle.css" rel="stylesheet" type="text/css" />
</head>

<div id="nav">
  <ul>
    <li><a href="User Home.php">Home</a></li>
    <li><a href="shoppingcart.php">My Cart</a></li>
  </ul>
</div>

<body>
<div id="photoshow">

<script type="text/javascript">
    var image1 = new Image()
    image1.src = "1.jpg"
    var image2 = new Image()
    image2.src = "2.jpg"
    var image3 = new Image()
    image3.src = "3.jpg"
    var image4 = new Image()
    image4.src = "4.jpg"
    var image5 = new Image()
    image5.src = "5.jpg"
	 var image6 = new Image()
    image6.src = "6.jpg"
	 var image7 = new Image()
    image7.src = "7.jpg"
	 var image8 = new Image()
    image8.src = "8.jpg"
</script>
      <img src="1.jpg" alt="" name="slide" width="850" height="450" />
<script>

    //variable that will increment through the images
    var step = 1;
    function slideit() {
        //if browser does not support the image object, exit.
        document.images.slide.src = eval("image" + step + ".src");
        if (step < 9)
            {step++;}
        else{step = 1;}
        //call function "slideit()" every 2.5 seconds
        setTimeout("slideit()", 2000);
    }
    slideit();
    
</script>     
</div>

<div id="connction">
  <?php


if(isset($_POST['Submit'])){
Session_start();
$_SESSION['item']=$_POST['cusList2'] ;
$var = $_SESSION['item'] ;
$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;
	$sql = "SELECT * FROM `product` WHERE ItemName= '$var' " ;


	$res = mysqli_query( $conn , $sql );
	
	echo "<form action='item.php' method='POST'>" ;
		
		echo "<select name='cusList3'>";
			
			echo "<option> choose ItemName ... </option>";
			while ( $row = mysqli_fetch_array($res) ){
				
				echo "<option value = '".$row['ProductID']."' >".$row['ItemName']." </option>" ;
			}
		
		echo "</select>" ;
		echo "<input type = 'submit' name = 'Submit' value = 'OK' >" ;
		
	echo "</form>" ;



}
?>
</div>







</body>
</html>