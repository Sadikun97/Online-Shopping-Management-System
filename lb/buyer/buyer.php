<!DOCTYPE html>
<html>
   <head>
       <title>Online shopping management system of AMAZON (products booking)</title>
	   <style>
	     .muk {    margin: -31% 42%;
    color: black;}
		 input {width: 84%;height: 27px;}
		 input[type="submit"] {width: 47%;margin: 2% 19%;}
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 form { width: 175%;padding-left: 45px;    margin: 0% -35%;}
		 body{
    background-color: #dcefff;		color:white;	
	font-family:Arial;
	
	
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
	margin-top: -3%;
	
	
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
    
    padding-top: 15px;
	font-weight: unset;
	font-size: 84%;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 67px;
    margin-top: 40%;
    text-align: center;
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
	   <div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
      <div class="muk">
	     <form action="connect.php" method="post">
		<h3>Buyer Information</h3>              
				     Buyer_ID</br>
					 <input type="text" name="buyer_id" value=""></br>
					 Buyer_Name</br>
					 <input type="text" name="buyer_name" value=""></br>
					 Address</br>
					 <input type="text" name="address" value=""></br>
					 Contact</br>
					 <input type="text" name="contact" value=""></br>
					 Mail_ID</br>
					 <input type="text" name="mail_id" value=""></br>
					
					 <input type="submit" value="Submit">
					 
					 
				    
					
					 
			</form>
			</div>
	 
   </body>
</html>