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
    $salary = $_POST['sex'];
    $sex = $_POST['sal'];
    
    $sql =  "INSERT INTO company (CID,CNAME,CADDRESS,PHONE)
VALUES ('$no', '$name', '$salary','$sex')";
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
    <form action="compins.php" method="post">
       <h3>Company Insert</h3><br><br>
    Company id: <input name="no" type="text"><br><br>   
    Company name: <input name="name" type="text"><br><br>  
    Company Address: <input name="sex" type="text"><br><br>
    Phone: <input name="sal" type="text"><br><br>
    
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
