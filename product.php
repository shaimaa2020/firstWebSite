<?php

$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbName="company";
  $con=new mysqli($serverName,$dbuser,$dbpassword,$dbName);
   
   if ($con->connect_error) {
   
die($con->connect_rror);

   }
   $id=$_POST["id"];
     
     $query="SELECT COUNT(orderdetails.orderNumber),orderdetails.orderNumber ,
customers.customerName FROM orderdetails,orders ,customers WHERE
orderdetails.productCode='$id' AND customers.customerNumber=orders.customerNumber AND
orderdetails.orderNumber=orders.orderNumber
GROUP BY orderdetails.orderNumber  
ORDER BY customers.creditLimit DESC";


    $result=$con->query($query);


if ($result-> num_rows>0) {
	while ($row=$result->fetch_assoc()) {
	echo $row['COUNT(orderdetails.orderNumber)']."**".$row[orderNumber]."**".$row[customerName]."<br>";



	}
}
