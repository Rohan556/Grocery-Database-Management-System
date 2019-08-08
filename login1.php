<!DOCTYPE html>
<html>
   
   <head>
     </head> 
  <body>
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
 <h1 align="center">Login</h1> 
      <div align="center">
       <form>
           Username:<input type="text" name="user"><br><br>
</form> 
      </div>
      
      <div align="center">
       <form>
        Password:<input type="text" name="pass"><br><br>
           
</form> 
      </div>
      <div align="center">
          <form action="login1.php">
      <input type="submit" value="Submit">
              </form>
      </div>
<?php      
    
      $username = $_POST['user'];
      $password = $_POST['pass'];
      $sql = "select * from login where User='".$username."' AND Pass='".$password"' limit 1";
      $result = mysql_query($sql);
      
      if(mysql_num_rows($result)==1){
          echo"Logged in";
          exit();
      }
      else{
          echo"User unauthenticated";
      }
      
      ?>
    </body>
</html>
