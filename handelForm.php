
<?php
//7
session_start();
$select=$_POST["select"];
$_SESSION["select"]=$select;
$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbName="company";

$con=new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
    die($con->connect_error);
}


$query="SELECT customerName
         FROM customers
         WHERE city='$select'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
/*switch ($select){
    case 'Nantes':
         $query="SELECT customerName
         FROM customers
         WHERE city='Nantes'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Las Vegas':
         $query="SELECT customerName
         FROM customers
         WHERE city='Las Vegas'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Melbourne':
         $query="SELECT customerName
         FROM customers
         WHERE city='Melbourne'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Stavern':
         $query="SELECT customerName
         FROM customers
         WHERE city='Stavern'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'San Rafael':
         $query="SELECT customerName
         FROM customers
         WHERE city='San Rafael'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Warszawa':
         $query="SELECT customerName
         FROM customers
         WHERE city='Warszawa'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Frankfurt':
         $query="SELECT customerName
         FROM customers
         WHERE city='Frankfurt'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'San Francisco':
         $query="SELECT customerName
         FROM customers
         WHERE city='San Francisco'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Madrid':
         $query="SELECT customerName
         FROM customers
         WHERE city='Madrid'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'NYC':
         $query="SELECT customerName
         FROM customers
         WHERE city='NYC'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Luleå':
         $query="SELECT customerName
         FROM customers
         WHERE city='Luleå'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Kobenhavn':
         $query="SELECT customerName
         FROM customers
         WHERE city='Kobenhavn'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Lyon':
         $query="SELECT customerName
         FROM customers
         WHERE city='Lyon'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Singapore':
         $query="SELECT customerName
         FROM customers
         WHERE city='Singapore'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Allentown':
         $query="SELECT customerName
         FROM customers
         WHERE city='Allentown'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Burlingame':
         $query="SELECT customerName
         FROM customers
         WHERE city='Burlingame'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Bergen':
         $query="SELECT customerName
         FROM customers
         WHERE city='Bergen'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'New Haven':
         $query="SELECT customerName
         FROM customers
         WHERE city='New Haven'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
    case 'Lisboa':
         $query="SELECT customerName
         FROM customers
         WHERE city='Lisboa'";

         $result=$con->query($query);

         while($row=$result->fetch_assoc()){
         echo $row['customerName']."<br>";
         }
         echo "------------------------------------------------------------<br>";
    break;
}

*/