<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	body{
	    	
	font-family:Arial;
	
	
}
body{
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
	color:white;
	font-weight: unset;
	font-size: 84%;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 83px;
    margin-top: -11%;
    text-align: center;
}

.y h3 {
    margin: 18% 30%;
}
.y {
    color: black;
    margin: -28% 65%;
    width: 27%;
}
.y p {
    margin: -15% 0%;
}
form {
    margin: 20% 36%;
    background-color: cadetblue;
    height: 190px;
    border-radius: 70px;
}
input[type="submit"] {
    margin: 9% 32%;
    width: 33%;
    height: 28px;
    border-radius: 19px;
    border-color: black;
}
input[type="text"] {
    width: 72%;
    height: 26px;
    border-radius: 17px;
    margin: -2% 12%;
    background-color: aliceblue;
    border-color: black;
}
p {
    font-size: x-large;
    font-weight: 600;
    margin: 0% 30%;
    padding-top: 25px;
}
	  </style>
</head>
<body>
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
		  </li>
		  <li><a href=" http://localhost/shopping/html/report.php">Result</a></li>
	   </ul>
	   
	   </div>

	<form method="POST" action="search.php">
     
        <p>Product Search</p><br>
        <input type="text" name="searchKeyword" placeholder="Search By Product ID "></br>
        <input type="submit" value="submit"></br>
    </form>
	 <div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>

</body>
</html>