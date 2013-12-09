<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>POC</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<style>
	#smsg{display:none;}
</style>
</head>

<body>
<div>&nbsp;</div>

<div class="col-md-6">
<h2>Add New Product</h2>
<p>&nbsp;</p>
<form action="admin.php?req=1" enctype="multipart/form-data" method="post">
	<table border="0" class="table table-hover table-striped table-bordered">
  <tr>
    <td>Product Name</td>
    <td><input type="text" class="form-control" name="pname" /></td>
  </tr>
  <tr>
    <td>Product Type</td>
    <td>
    	<select class="form-control" name="pcategory">
        	<option value="mobile">Mobile Phones</option>
            <option value="laptop">Laptops</option>
            <option value="camera">Camera</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><input type="text" class="form-control" name="pprice" /></td>
  </tr>
   <tr>
        <td>Product Image</td>
        <td>
            <input type="file" name="filefield" id="filefield" class="btn btn-success" />
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        </td>
	</tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" class="btn btn-primary" value="Add Product" /></td>
  </tr>
</table>

</form>
</div>
<div id="smsg">Hello</div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/admin.js"></script> 


</body>
</html>