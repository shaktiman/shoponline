<?php
	include("dbcon.php");	
	$cursor = $collection->find();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>POC</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div>&nbsp;</div>
<div class="container">
  <div class="page-header">
    <div class="navbar-brand"><a href="index.php"><img src="images/shop-online.png" width="205" height="74" alt="ShopOnline"></a></div>
 
  <ul class="nav nav-pills pull-right" id="mainMenu">
    <li class="active"><a href="#" data-filter="*">Home</a></li>
    <li><a href="#" data-filter=".mobile">Mobile Phones</a></li>
    <li><a href="#" data-filter=".laptop">Laptops</a></li>
    <li><a href="#" data-filter=".camera">Cameras</a></li>
  </ul>
  <div class="clearfix"></div>
   </div>
  <div id="container"  class='container'>
    <?php
		$i=1;
	foreach ($cursor as $document) {
		echo "<div id='".$document["_id"]."' class='element ".$document["category"]."'>";
			//echo "<div>".$document["category"] . "</div>";
			//echo "<div class='price'>Price: ".$document["Price"] . "</div>";			
			echo "<div class='pimage'><img src='uploads/".$document["pimage"]."'/></div>";
			echo "<div class='title'>".$document["title"] . "</div>";
		echo "</div>";
	}
?>
  </div>
  <div id="productDetails"></div>
</div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/main.js"></script>
</body>
</html>
