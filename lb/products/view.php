<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     .muk {    margin: -28% 42%;
    color: black;}
		 
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 
		 body{
		color:white;	
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
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 53px;
    margin-top: 12%;
    text-align: center;
}

center {
    margin: -15% 0%;
    
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
	   
      
      <div id="printableArea">     
<h2 class =" heading">Product Information</h2>
<div class="table" style="margin-left:157px;color: black;">
<style>

h2.heading {
    color: black;
    margin: 19% 42%;
}
.table {
    position: relative;
    height: auto;
    margin-top: -18%;
    text-align: center;
    z-index: 0;
    font-size: 18px;
}
table {

    margin: 0% 6%;

}
th {
    height: 18px;
    width: 122px;
    border: 1px solid black;
    padding: 2px;
    border-collapse: collapse;
}
td {
    width: 116px;
    border: 1px solid black;
    padding: 1px;
    border-collapse: collapse;
}
input[type="submit"] {
    background-color: aliceblue;
    border: aliceblue;
    font-size: inherit;
    color: darkblue;
}
</style>
					<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_shopping";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully\n";

		$sql = "SELECT * FROM tb_products";

		$result = $conn->query($sql);
		
echo "<table><tr><th>Product_ID</th><th>Product_Name</th><th>Quantity</th><th>Price</th><th>Validity</th><th>VAT</th><th>Total_Price</th><th>Action</th><th> Action</th><th>Action</th></tr>";
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				
				
               echo "<tr><td>"  . $row["Product_ID"]."</td><td>". $row["Product_Name"]."</td><td>".$row["Quantity"]."</td><td>". $row["Price"]."</td><td>".$row["Validity"]."</td><td>".$row["VAT"]."</td><td>".$row["Total_Price"]."</td><td><a href='productedit.php?Product_ID=".$row['Product_ID']."' style='text-decoration: none' />Edit</a></td><td><form action='' method='GET'><input type='submit' name='delete".$row['Product_ID']."' value='Delete'></form></td><td><a href='printproduct.php?Product_ID=".$row['Product_ID']."' onclick='myWindow=window.open(this.ref 'newwindow','width=300,height=250')';>Print</a></td></tr>";

				// DELETE CODE STARTS FORM HERE
				if(isset($_GET['delete'.$row['Product_ID']])){
					$delete = "DELETE FROM tb_products WHERE Product_ID=".$row['Product_ID']."";
					if ($conn->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsucessful". $conn->error;
					}
				}

				



			}echo"</table>";
		}else{
				echo "No search found!!!";
		}
	$conn->close();
	 ?>
</div>
<div class="uu">
	   
	   <p>Created By:Sadikun Nahar  <br>ID:17103317
	   </p>
	   </div>
</div>
<br><h3 align="center"></h3><center><input type="button" onclick="printDiv('printableArea')" value="Print Data!" /></center>
<script type="text/javascript">
 function printPage(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
 </script>​​​​​​
			
   </body>
</html>