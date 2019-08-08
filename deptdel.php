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
    
    $sql =  "DELETE FROM department WHERE Dno='$no'";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
    <link rel="stylesheet" type="text/css" href="delete.css">
</head>

<body>
  <div class="login-box">
    <form action="deptdel.php" method="post">
       <h3>Department Delete</h3><br><br>
    Dept_no: <input name="no" type="text"><br><br>   
    <input type="submit" name="insert">
        </form>
    </div>
    
</body>
</html>
