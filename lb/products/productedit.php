<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     .muk {    margin: -28% 42%;
    color: black;}
		 
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 form {margin: -8% 8%;}
		 body{
		
	font-family:Arial;
    background-color: #dcefff;	
}
		 ul{
	margin: 0% 0%;
	padding:0px;
	list-style:none;
}
ul li{
	float:left;
	width:200px;
	hight:40px;
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
    
    padding-top: 10px;
	    font-size: large;
		color:white;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 53px;
    margin-top: 38.2%;
    text-align: center;
}

.heading {
    
    text-align: center;
    Color: Black;
    
    margin-top: 9%;
}
.a {
    position: absolute;
    margin-top: 7%;
    text-align: center;
    margin-left: 35%;
    z-index: 0;
    font-size: 18px;
}
p {
    height: 32px;
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
	   <h2 class =" heading">Edit Product Information</h2>
			<form action="updateproduct.php" method="POST">
	<div class="a">
	<p>Product ID<br>
	<input type="number" name="product_id" value="<?php print $_GET['Product_ID'];?>" style="text-align:center;opacity:0.8;"readonly/>
	<p>Product Name<br>
		<input type="text" name="product_name" value=""></p>
	<p>Quantity<br>
		<input type="text" name="quantity" value=""></p>
	<p>Price<br>
		<input type="text" name="price" value=""></p>
	<p>Validity<br>
		<input type="text" name="validity" value=""></p>
	<p>VAT<br>
		<input type="text" name="vat" value=""></p>
	<p>Total Price<br>
		<input type="text" name="total_price" value=""></p>
	
		<input type="Submit" value="Submit">
	</div>
	</form>
<div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
</div>
</body>
</html>