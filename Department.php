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
  <title>Department Details</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        

   body{
    width: 100%;
    height: 100vh;
    background: url(grocery14.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: table;
    font-family: sans-serif;
}
        table {
            padding: 5px;
            text-align: center;
            font-size: 20px;
        }
        h3 {
            margin-left: 75%;
        }
        body{
          margin: 0;
          padding: 0;
            background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <form action="Department.php" method="post">      
            </form>
  <a href="deptins.php" class="btn btn-info" role="button">Insert</a><br><br>
     <a href="deptdel.php" class="btn btn-info" role="button">Delete</a><br><br>
        <a href="deptupd.php" class="btn btn-info" role="button">Update</a><br><br>
    </div>
    
    <table width=1000; border="5" align="center">
    <caption><h1>DEPARTMENT DETAILS</h1></caption>
        <tr>
            <th>DEPT NO</th>
            <th>DEPT NAME</th>
            <th>MGR SSN</th>
            <th>MGR START DATE</th>
            
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','rohan123','grocery');
            $Query = "SELECT * FROM DEPARTMENT";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $DNO = $Datarows['DNO'];
                $DNAME = $Datarows['DNAME'];
                $MGRSSN = $Datarows['MGRSSN'];
                $START = $Datarows['MGRSTARTDATE'];
                                                
            ?>



        <tr>
        <td><?php echo $DNO; ?></td>
        <td><?php echo $DNAME; ?></td>
        <td><?php echo $MGRSSN; ?></td>
        <td><?php echo $START; ?></td>
                </tr>
            
    <?php    } ?>    
    </table>
    
    
    
</body>
</html>
