<?php
//8
session_start();
$num=$_GET["num"];
$_SESSION["num"]=$num;
$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbName="company";

$con=new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
    die($con->connect_error);
}

$query="SELECT productCode,COUNT(quantityOrdered)
FROM orderdetails
GROUP BY productCode
HAVING COUNT(quantityOrdered)>$num";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['productCode']."<=>".$row['COUNT(quantityOrdered)']."<br>";
         }
         echo "------------------------------------------------------------<br>";