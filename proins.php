<?php
$host = "localhost";
$user = "root";
$password="rohan123";
$db = "grocery";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert']))
{
    $no = $_POST['no'];
    $name = $_POST['name'];
    $ssn = $_POST['ssn'];
    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $de = $_POST['de'];
    
    $sql =  "INSERT INTO products (PID,PNAME,SID,MRP,QTY,DNO )
VALUES ('$no', '$name', '$ssn','$date','$qty','$de')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
					

}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
    <link rel="stylesheet" type="text/css" href="prod.css">
</head>
<body>
  <div class="login-box">
    <form action="proins.php" method="post">
       <h3>Product Insert</h3><br><br>
    Product ID: <input name="no" type="text"><br><br>   
    Product Name: <input name="name" type="text"><br><br>  
    Supplier ID ID: <input name="ssn" type="text"><br><br>
    MRP: <input name="date" type="text"><br><br> 
    Quantity: <input name="qty" type="text"><br><br>
    Department No: <input name="de" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
