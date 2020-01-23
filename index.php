<?php
$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbName="company";

$con=new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
    die($con->connect_error);
}
/*
//1
$query="SELECT customerName 
FROM customers 
WHERE creditLimit >20000";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']."<br>";
}
echo "------------------------------------------------------------<br>";
//2
$query="SELECT * 
FROM customers 
WHERE customerNumber=103";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']."______________".$row['customerNumber']."______________".$row['contactLastName']."______________".$row['contactFirstName']."______________".$row['city']."______________".$row['phone']."______________".$row['addressLine1']."______________".$row['addressLine2']."______________".$row['state']."______________".$row['postalCode']."______________".$row['country']."______________".$row['salesRepEmployeeNumber']."______________".$row['creditLimit']."<br>";
}
echo "------------------------------------------------------------<br>";
//3
$query="SELECT productName
FROM products
WHERE productName LIKE '%mi%'";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['productName']."<br>";
}
echo "------------------------------------------------------------<br>";
//4
$query="SELECT COUNT(orders.orderNumber),customers.customerName
FROM orders,customers
WHERE orders.customerNumber=customers.customerNumber
GROUP BY customers.customerName";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']."<=>".$row['COUNT(orders.orderNumber)']."<br>";
}
echo "------------------------------------------------------------<br>";
//5
$query="SELECT COUNT(orderdetails.orderNumber),products.productName,SUM(quantityOrdered*priceEach)
FROM orderdetails, products
WHERE orderdetails.productCode=products.productCode
GROUP BY products.productName";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['COUNT(orderdetails.orderNumber)']."<=>".$row['productName']."<=>".$row['SUM(quantityOrdered*priceEach)']."<br>";
}
echo "------------------------------------------------------------<br>";
//6
$query="SELECT firstName,lastName,reportsTo
FROM employees
WHERE reportsTo !='null'";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['firstName'].$row['lastName']."<=>".$row['reportsTo']."<br>";
}
echo "------------------------------------------------------------<br>";


//6
$query="SELECT firstName,lastName,reportsTo
FROM employees
WHERE reportsTo !='null'";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['firstName'].$row['lastName']."<=>".$row['reportsTo']."<br>";
}
echo "------------------------------------------------------------<br>";
*/

//9
$query="SELECT customerName
FROM customers
WHERE city='$_GET["city"]'
ORDER BY customerName DESC
LIMIT 3";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']."<br>";
}
echo "------------------------------------------------------------<br>";


/*SELECT customerName 
FROM customers 
WHERE creditLimit >20000
---------------------------------------------------------
SELECT * 
FROM customers 
WHERE customerNumber=5
----------------------------------------------------------
SELECT productName
FROM products
WHERE productName LIKE "%milk%"
--------------------------------------------------------------
SELECT COUNT(orders.orderNumber),customers.customerName
FROM orders,customers
WHERE orders.customerNumber=customers.customerNumber
GROUP BY customers.customerName
------------------------------------------------------------
SELECT COUNT(orderdetails.orderNumber),products.productName
FROM orderdetails, products
WHERE orderdetails.productCode=products.productCode
GROUP BY products.productName
------------------------------------------------------------------
SELECT customerName
FROM customers
WHERE city='Nantes'
====================
SELECT customerName
FROM customers
WHERE city='Las Vegas'
=====================
*/