<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     .muk {    margin: -28% 42%;
    color: black;}
		 
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 
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
		color:white
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 53px;
    margin-top: 22%;
    text-align: center;
}
.toast {
    position: absolute;
    display: block;
    border: 2px solid;
    padding: 20px;
    margin-top: 1%;
    margin-left: 37%;
    font-family: sans-serif;
    font-size: 18px;
    box-shadow: 2px 2px;
}
.heading {
    
    text-align: center;
    Color: Black;
    
    margin-top: 19%;
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
	   <h2 class =" heading">Update Seller Information</h2>
	<div class="toast">
		<?php
$servername="localhost";
$username="root";
$password="";
$db_name="db_shopping";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
echo nl2br("Successfully connected to the server\n");
}

$sql="UPDATE tb_seller SET Seller_Name = '".$_POST['seller_name']."', Designation ='".$_POST['designation']."', Contact ='".$_POST['contact']."', Mail_ID ='".$_POST['mail_id']."' WHERE Seller_ID = '".$_POST['seller_id']."'";
if(mysqli_query($conn, $sql))
{
	echo nl2br("Data Updated successfully\n");
}
else
{
	echo nl2br("error");
}
?>
</div>
<div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
</div>
</body>
</html>