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
      $Buyer_ID = null;
      $Buyer_ID = $_GET["Buyer_ID"];
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
      if ($Buyer_ID == null) {
        $SQL = "SELECT * FROM tb_buyer";
      } else {
        $SQL = "SELECT * FROM tb_buyer WHERE Buyer_ID='".$Buyer_ID."'";
      }
      $result = mysqli_query($connection, $SQL);
      if (mysqli_num_rows($result) > 0 && $connected) {
        echo "<table><tr><th>Buyer_ID</th><th>Buyer_Name</th><th>Address</th><th>Contact</th><th>Mail_ID</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>".$row["Buyer_ID"]."</td><td>".$row["Buyer_Name"]."</td><td>".$row["Address"]."</td><td>".$row["Contact"]."</td><td>".$row["Mail_ID"]."</td></tr>";
          }
          echo "</table>";
        }
      mysqli_close($connection);
    ?>
  </div>


</body>
</html>