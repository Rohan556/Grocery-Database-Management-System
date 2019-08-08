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
    
    $sql =  "UPDATE department SET Dname='$name',MgrSSN='$ssn',MgrStartDate='$date' WHERE Dno='$no'";

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
    <form action="deptupd.php" method="post">
       Department Update<br><br>
    Dept_no: <input name="no" type="text"><br><br>   
    Dept_name: <input name="name" type="text"><br><br>  
    Manager_SSN: <input name="ssn" type="text"><br><br>
        Manager_Start_date: <input name="date" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
