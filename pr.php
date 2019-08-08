<?php
$host = "localhost";
$user = "root";
$password="rohan123";
$db = "grocery";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = "select Pass from login where User='$user'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
        $auth = $row["Pass"];
    
    if($auth == $pass){
        header('Location: first.php');
    }
    else{
        echo"User unauthenticated";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
    <img src="login.jpg" class="avatar">
    <h1>login here</h1>
    <form action="pr.php" method="post">
        Login <br><br>
    Username: <input name="user" type="text"><br><br>   
    Password: <input name="pass" type="text"><br><br>  
    <input type="submit" name="submit">
        </form>
    </div>
    </body>

</html>