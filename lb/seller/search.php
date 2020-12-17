<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	    body{
	    background-color: #dcefff;	
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
    margin-top: 4.5%;
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
.ll {
    margin: -21%;
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
		  </li>
		  <li><a href=" http://localhost/shopping/html/report.php">Result</a></li>
	   </ul>
	   
	   </div>
<div id="printableArea">
     <style>
table, th, td {
    border: 1px solid black; text-align: center;margin: 12% 11%;
}
</style>
</head>
<body style="background-image:url('')"> 
<table style="width:80%">
  <tr style="color:blue">
    <center>
    <h1 style="margin: 16% 0%">Seller Information</h1></center>
    <th>Seller_ID</th>
    <th>Seller_Name</th> 
    <th>Designation</th>
    <th>Contact</th>
	<th>Mail_ID</th>
  </tr>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_shopping"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }

  $searchKeyword = $_POST["searchKeyword"]; 
  $SQL = "SELECT * FROM `tb_seller` WHERE '".$searchKeyword."' IN (Seller_ID,Seller_Name,Designation,Contact,Mail_ID);";
  $result = mysqli_query($connection, $SQL);
  if (!$result || mysqli_num_rows($result) > 0) {
   
   while($row = mysqli_fetch_assoc($result)) 
   {
  echo "<tr>";
  echo"<td>".$row['Seller_ID']."</td>";
  echo"<td>".$row['Seller_Name']."</td>";
  echo"<td>".$row['Designation']."</td>";
  echo"<td>".$row['Contact']."</td>";
  echo"<td>".$row['Mail_ID']."</td>";
  echo "</tr>";
  }
  } 
  else 
  {
    echo "0 Result";
  }
?>

      <div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
       </div>
	   <div class="ll"><br><h3 align="center"></h3><center><input type="button" onclick="printDiv('printableArea')" value="Print Data!" /></center></div>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
    </body>
     
</html> 
  