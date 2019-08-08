<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY DEPARTMENT INFO</title>
</head>
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
        table {
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }
        h3 {
            margin-left: 75%;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>DEPARTMENT DETAILS</h1></caption>
        <tr>
            <th>DEPARTMENT NUMBER</th>
            <th>DEPARTMENT NAME</th>
            <th>MANAGER SSN</th>
            <th>MANAGER START DATE</th>
            
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','rohan123','grocery');
            $Query = "SELECT * FROM DEPARTMENT";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $DNO = $Datarows['Dno'];
                $DNAME = $Datarows['Dname'];
                $MGRSSN = $Datarows['MgrSSN'];
                $START = $Datarows['MgrstartDate'];
                                                
            ?>
        <tr>
        <td><?php echo $DNO; ?></td>
        <td><?php echo $DNAME; ?></td>
        <td><?php echo $MGRSSN; ?></td>
        <td><?php echo $START; ?></td>
                </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="first.php">HOME</a></h3>
</body>
</html>
