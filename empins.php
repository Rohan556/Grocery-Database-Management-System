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
    $salary = $_POST['sal'];
    $sex = $_POST['sex'];
    $number = $_POST['number'];
    $sql =  "INSERT INTO employee (EID,ENAME,SEX,SALARY,DNO )
VALUES ('$no', '$name', '$sex','$salary','$number')";
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
    <form action="empins.php" method="post">
       <h3>Employee Insert</h3><br><br>
    Employee id: <input name="no" type="text"><br><br>   
    Employee name: <input name="name" type="text"><br><br>  
    Sex: <input name="sex" type="text"><br><br>
    Salary: <input name="sal" type="text"><br><br>
    Department number: <input name="number" type="text"><br><br> 
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
