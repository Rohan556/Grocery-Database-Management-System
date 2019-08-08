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
    
    $sql =  "UPDATE company SET CNAME='$name',CADDRESS='$ssn',PHONE='$date' WHERE CID='$no'";

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
    <form action="compupd.php" method="post">
       Company Update<br><br>
    Company ID: <input name="no" type="text"><br><br>   
    Company Name: <input name="name" type="text"><br><br>  
    Company Address: <input name="ssn" type="text"><br><br>
    Phone: <input name="date" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
