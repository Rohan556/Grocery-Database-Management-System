<?php
$host = "localhost";
$user = "root";
$password="rohan123";
$db = "grocery";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product details</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
     html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
    width: 100%;
    height: 100vh;
    background: url();
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: table;
    font-family: sans-serif;
}
        h3 {
            margin-left: 75%;
        }
        body{
          margin: 0;
          padding: 0;
          background: url(grocery14.jpeg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }
    </style>
</head>

<body>
    
    <table width=850; border="5" align="center">
    <caption><h1>LOG DETAILS</h1></caption>
        <tr>
            <th>ID</th>
            <th>RELATED ID</th>
            <th>ACTION</th>
            <th>DATE AND TIME</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','rohan123','grocery');
            $Query = "SELECT * FROM LOGS";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $Eid = $Datarows['ID'];
                $Ename = $Datarows['PID'];
                $Sex = $Datarows['ACTION'];
                $Salary = $Datarows['DATE'];   
            ?>			
					

        <tr>
        <td><?php echo $Eid; ?></td>
        <td><?php echo $Ename; ?></td>
        <td><?php echo $Sex; ?></td>
        <td><?php echo $Salary; ?></td>   
        </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="first.php">HOME</a></h3>
    
    
</body>
</html>
