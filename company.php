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
  <title>Company details</title>
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
    <div class="login-box">
        <form action="company.php" method="post">      
            </form>
  <a href="compins.php" class="btn btn-info" role="button">Insert</a><br><br>
     <a href="compdel.php" class="btn btn-info" role="button">Delete</a><br><br>
        <a href="compupd.php" class="btn btn-info" role="button">Update</a><br><br>
    </div>
    <div>
    <table width=850; border="5" align="center">
    <caption><h1>COMPANY DETAILS</h1></caption>
        <tr>
            <th>COMPANY ID</th>
            <th>COMPANY NAME</th>
            <th>COMPANY ADDRESS</th>
            <th>PHONE NUMBER</th>
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','rohan123','grocery');
            $Query = "SELECT * FROM COMPANY";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $Eid = $Datarows['CID'];
                $Ename = $Datarows['CNAME'];
                $Sex = $Datarows['CADDRESS'];
                $Salary = $Datarows['PHONE'];                              
            ?>			

        <tr>
        <td><?php echo $Eid; ?></td>
        <td><?php echo $Ename; ?></td>
        <td><?php echo $Sex; ?></td>
        <td><?php echo $Salary; ?></td>   
        </tr>
            
    <?php    } ?>    
    </table>
        </div>
    <h3> <a href="first.php">HOME</a></h3>
    
    
</body>
</html>
