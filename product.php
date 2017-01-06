
<?php

if(isset($_POST['Submit'])){
Session_start();
$_SESSION['ProductID']=$_POST['cusList'] ;



}


?>
<style type="text/css">
<!--
body {
	background-color: #C6F;
	background-image: url(a.jpg);
}
.center #s {
	font-size: 18px;
}
.center #s #said {
	font-size: 24px;
	font-weight: bold;
}
.center #s {
	font-weight: bold;
}
-->
</style><body leftmargin="600" topmargin="100"><div class="center">
  <form  id="s" name ="signup" action="tony.php" method='POST'>
<b>Product Quantity *<b> :
    <input type="text" name="productquantity" required = " required " />
    </br>
    </br>
    </br>
    <b>Product Name *<b> :
    <input type="text" name="productname" required = " required " />
    </br>
    </br>
    </br>
    <b>Description * <b>:
    <input type="text" name="description" required = " required " />
    </br>
    </br>
    </br>
    <b>Price * <b>:
    <input type="text" name="price" required = " required " />
    </br>
    </br>
    </br>
    <b>Category * <b>:
    <input type="text" name="category" required = " required " />
    </br>
    </br>
    </br>
    <b>Sub Category <b>:
    <input type="text" name="subcategory" />
    </br>
    </br>
    </br>
    
    <button id="said" class="button validate" name="signup" >Update</button>
  </form>
</div>
