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
    
    $sql =  "UPDATE products SET PNAME='$name',SID='$ssn',MRP='$date',QTY='$qty',DNO='$de' WHERE PID='$no'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
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
<style>
    
div{
    background-color: lightgrey;
    width: 1000px;
    border: 1px solid green;
    padding: 25px;
    margin: 0px;
}
</style>
<body>
  <div class="login-box">
    <form action="proupd.php" method="post">
        <h3>Product Update</h3><br><br>
    Product Update<br><br>
    Product ID: <input name="no" type="text"><br><br>   
    Product Name: <input name="name" type="text"><br><br>  
    Supplier ID: <input name="ssn" type="text"><br><br>
    MRP: <input name="date" type="text"><br><br>
    Quantity: <input name="qty" type="text"><br><br>
    Department Number: <input name="de" type="text"><br><br>
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
