<?php
	include("dbcon.php");
	$reqId=$_REQUEST['prodid'];
	$mongo_id = new MongoID($reqId);
	$cursor = $collection->find(array('_id'=>$mongo_id));
	foreach ($cursor as $document) {
	?>
    
    <ol class="breadcrumb">
    	<li><a href="index.php">Home</a></li>
         <li><?php echo $document["category"]; ?></li>
        <li><?php echo $document["title"]; ?></li>
    </ol>
    <?php	
		echo "<div id='".$document["_id"]."' class='element ".$document["category"]."'>";
		echo "<div class='col-md-6 col-sm-12'><table class='table table-hover table-striped table-bordered'>";
		echo "<tr><td>Brand</td><td><div class='title'>".$document["title"] . "</td></tr>";
		echo "<tr><td>Product Type</td><td>".$document["category"] . "</td></tr>";
		echo "<tr><td><strong>Price</strong></td><td> <strong>".$document["Price"] . "</strong></td></tr>";
		echo "<tr><td></td><td><a href='#' class='btn btn-success'>Buy Now!</a></td></tr></table>&nbsp;</div>";
		echo "<div class='pimage col-md-4 col-md-offset-1 col-sm-12'><img src='uploads/".$document["pimage"]."' /></div>";
		echo "<div class='clearfix'></div></div>";
	}
?>