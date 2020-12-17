<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     


.table {
    position: relative;
    height: auto;
    margin-top: -2%;
    text-align: center;
    z-index: 0;
    font-size: 18px;
}
th {
    height: 50px;
    width: 150px;
    border: 1px solid black;
    padding: 8px;
    border-collapse: collapse;
}
td {
    width: 150px;
    border: 1px solid black;
    padding: 8px;
    border-collapse: collapse;
}
.heading {
    
    text-align: center;
    Color: Black;
    
    margin-top: 19%;
}
.afroza a {
    text-decoration: none;
    color: black;
    margin: 8% 26%;
    font-weight: bold;
}
.afroza {
    margin: 2% 48%;
    border: 1px solid;
    width: 75px;
    
    background-color: antiquewhite;
    height: 19px;
    

    
}
.container-table {
    margin: 20% 30%;
	margin-left: 26%;
}


                             
	   </style>
   </head>
   
	   <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body onload="print()">
  <div class="container-table">
    <?php
      $Product_ID = null;
      $Product_ID = $_GET["Product_ID"];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbName = "db_shopping";
      $connected = false;
      $connection = mysqli_connect($servername, $username, $password, $dbName);
      if ($connection) {
        $connected = true;
      } else {
        die("<script type='text/javascript'>alert('Connection Failed!')</script>");
      }
      if ($Product_ID == null) {
        $SQL = "SELECT * FROM tb_products";
      } else {
        $SQL = "SELECT * FROM tb_products WHERE Product_ID='".$Product_ID."'";
      }
      $result = mysqli_query($connection, $SQL);
      if (mysqli_num_rows($result) > 0 && $connected) {
        echo "<table><tr><th>Product_ID</th><th>Product_Name</th><th>Quantity</th><th>Price</th><th>Validity</th><th>VAT</th><th>Total_Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>"  . $row["Product_ID"]."</td><td>". $row["Product_Name"]."</td><td>".$row["Quantity"]."</td><td>". $row["Price"]."</td><td>".$row["Validity"]."</td><td>".$row["VAT"]."</td><td>".$row["Total_Price"]."</td></tr>";
          }
          echo "</table>";
        }
      mysqli_close($connection);
    ?>
  </div>


</body>
</html>