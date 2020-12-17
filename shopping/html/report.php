<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	    body{
    background-color: #dcefff;	font-family:Arial;
	
	
}
 ul{
	margin: 0% 0%;
	padding:0px;
	list-style:none;
}
ul li{
	float:left;
	width:200px;
	height:40px;
	background-color:black;
	opacity:.6;
	line-height:40px;
	text-align:center;
	font-size:20px;
	margin-top:-3%;
	
	
	
	
}
ul li a {
    text-decoration: none;
    color: white;
	display:block;
}
ul li a:hover{
	background-color:green;
}
ul li ul li{
	display:none;
}
ul li:hover ul li{
	display:block;
}
.ta {
    margin: -3% 7%;
}
.ta h1 {
    margin: 5% 0%;
    color: brown;
}
.uu p {
    padding-top: 18px;
    color: white;
    font-weight: unset;
	font-size: 84%;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
    height: 81px;
    margin-top: 2%;
    text-align: center;
}
input {

    margin: 0% 47%;

}


	  </style>
	</head>
    <body >
	
	
     <div class="ta">
	  <h1>Online shopping management system of AMAZON (products booking)</h1>
	   
	   <ul>
	      <li><a href="http://localhost/shopping/html/shopping.php">Home</a></li>
		  <li><a>Insert</a>
		     <ul>
			   <li><a href="http://localhost/lb/products/products.php">Products</a></li>
			  <li><a href="http://localhost/lb/buyer/buyer.php">Buyer</a></li>
			   <li><a href="http://localhost/lb/seller/seller.php">Seller</a></li>
			 </ul>
		  <li><a>View</a>
		     <ul>
			   <li><a href="http://localhost/lb/products/view.php">Products</a></li>
			   <li><a href="http://localhost/lb/buyer/view.php">Buyer</a></li>
			   <li><a href="http://localhost/lb/seller/view.php">Seller</a></li>
			 </ul>
		  </li>
		  <li><a>Search</a>
		     <ul>
			   <li><a href="http://localhost/lb/products/psearch.php">Products</a></li>
			   <li><a href="http://localhost/lb/buyer/bsearch.php">Buyer</a></li>
			   <li><a href="http://localhost/lb/seller/ssearch.php">Seller</a></li>
			 </ul>
		  <li><a href=" http://localhost/shopping/html/report.php">Result</a></li>
	   </ul>
	   
	   </div>
	<div class="table"><div id="printableArea">   
<?php

$conn = mysqli_Connect('localhost','root','','db_shopping');
$sql="SELECT tb_buyer.Buyer_ID,tb_buyer.Buyer_Name,tb_products.Product_Name,tb_products.Quantity,tb_products.Price,tb_products.Validity,tb_products.VAT, tb_products.Total_Price,tb_seller.Seller_Name
  FROM tb_buyer 
  INNER JOIN tb_products ON tb_buyer.Buyer_ID = tb_products.Product_ID
  INNER JOIN tb_seller ON tb_products.Product_ID = tb_seller.Seller_ID
  WHERE tb_buyer.Buyer_ID=tb_products.Product_ID";
$result = mysqli_query($conn,$sql);

?>
<style>
table, th, td {
    border: 1px solid black; text-align: center;margin: -26% 14%;color: black;
  
}  


</style>
</head>
<body style="background-image:url('')">
<table style="width:74%">
  <tr style="color:blue">
  	<center>
  	<h1 style="margin: 18% 15%;padding-top: 0px;">Bill of The Products</h1></center>
	<th>Buyer ID</th>
	<th>Buyer Name</th>
	<th>Product Name</th>
	<th>Quantity</th>
	<th>Price</th>
    <th>Validity</th>
	<th>VAT</th>
	<th>Total Price</th>
    <th>Signature of Seller</th>
	
	
    
  
  </tr>
  

<?php
while ($accused=mysqli_fetch_assoc($result)) 
{
	echo "<tr>";
	echo"<td>".$accused['Buyer_ID']."</td>";
	echo"<td>".$accused['Buyer_Name']."</td>";
	echo"<td>".$accused['Product_Name']."</td>";
	echo"<td>".$accused['Quantity']."</td>";
	echo"<td>".$accused['Price']."</td>";
	echo"<td>".$accused['Validity']."</td>";
	echo"<td>".$accused['VAT']."</td>";
	echo"<td>".$accused['Total_Price']."</td>";
	echo"<td>".$accused['Seller_Name']."</td>";
	
	
	
	
	
	echo "</tr>";
	}
	
?>
<input type="button" onclick="printDiv('printableArea')" value="PRINT" />

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script><br>

<div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
    

</body>
</html>
