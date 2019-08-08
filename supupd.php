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
    
    $sql =  "UPDATE suppliers SET SNAME='$name',CID='$ssn',PHONE='$date' WHERE SID='$no'";

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
    <link rel="stylesheet" type="text/css" href="dept.css">
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
    <form action="supupd.php" method="post">
       Supplier Update<br><br>
    Supplier ID: <input name="no" type="text"><br><br>   
    Supplier Name: <input name="name" type="text"><br><br>  
    Company ID: <input name="ssn" type="text"><br><br>
    Phone: <input name="date" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
