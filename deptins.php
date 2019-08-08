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
    
    $sql =  "INSERT INTO department (Dno,Dname, MgrSSN,MgrstartDate )
VALUES ('$no', '$name', '$ssn','$date')";
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
    <link rel="stylesheet" type="text/css" href="dept.css">
</head>
<body>
  <div class="login-box">
    <form action="deptins.php" method="post">
       <h3>Department Insert</h3><br><br>
    Dept_no: <input name="no" type="text"><br><br>   
    Dept_name: <input name="name" type="text"><br><br>  
    Manager_SSN: <input name="ssn" type="text"><br><br>
        Manager_Start_date: <input name="date" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
