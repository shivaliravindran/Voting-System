<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

<style>


.title {
  color: grey;
  font-size: 18px;
}

.head {
  background-color: darkslategrey;
  color: white;
  font-size: 30px;
  display: flex;
  padding:20px;
  justify-content:left;
  //padding-bottom: 40px;
  font-family:Calibri, Helvetica, sans-serif;
  font-weight: 500;
}
*{
    padding: 0;
    margin: 0;
}
.flex-container{
    width:40%;
    padding-left: 25px;
    padding-bottom: 15px;
}
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
}
.container div {
  flex: 1;
}
.field{
  padding-left: 40px;
  font-size: 30px;
  color: grey;
}
table{
  height: 180px;
  padding-left: 20px;
}
img{
  border-radius:50%;
  border: 5 px solid transparent;
  border-color: black;
  height: 250px;
  width: 250px;
  padding-left: 20px;
}
.detail{
  font-size:20px;
  margin-left: 120px;
  color: gray;
}

.submit-button{
  background-color:#08b4c0;
  border: #08b4c0;
  border-radius: 15px;
  padding: 10px;
  margin: 5px;
  margin-top: 15px;
  font-size: 12px;
}
</style>
<script>
function func1(){
  var x = document.getElementById("i1").value;
  var y = document.getElementById("i2").value;
  if (x==y)
  {
    alert("The new password is same as the old");
  }}
</script>
</head>
<body>

<div class="head"><b>&nbsp;&nbsp;&nbsp; Profile Section</b></div><br><br>
<div class="container">
  <div style="max-width: 125px;">
    <?php
      include "connection.php";
      $x = $_SESSION['username'];
      $sql = "SELECT * from register where username = '$x'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      echo "<html><body><div>
      <table>
          <tr><td>First Name:</td><td>".$row[2]."</td></tr>
          <tr><td>Last Name:</td><td>".$row[3]."</td></tr>
          <tr><td>Email:</td><td>".$row[7]."</td></tr>
          <tr><td>Phone:</td><td>".$row[5]."</td></tr>
          <tr><td>Address:</td><td>".$row[6]."</td></tr>    
      </table><br>
      </div></body></html>";
    ?>

</div>
<br><br><br><form class ="field" style="font-size: 20px;margin-left: 240px; width:50%;" method="post"><fieldset>
  <legend style="margin-left: 20px;color:darkslategray;">Password</legend><br>
  <label style="font-size: 20px;margin-left: 5px;" >Enter current password&nbsp;:</font></label><input type="password" id="i1"><br>
  <label style="font-size: 20px;margin-left: 5px;">Enter new password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</font></label><input type="password" id="i2" name="newp"><br>
  
  <center><button type="submit" class="submit-button" id="ï3" onclick="func1()" name="submit">Change Password</button></center>
  </fieldset></form><br>
  <?php
  if(isset($_POST['submit']))
  {
    $newp = $_POST["newp"];
  
  $sql = "UPDATE register SET password='$newp' WHERE username='$x'";
  if(mysqli_query($conn,$sql))
    {
        echo '<script> alert("Password changed") </script>';
    } 
    $sql = "UPDATE login SET password='$newp' WHERE username='$x'";
    if(mysqli_query($conn,$sql))
      {
          echo "";
      } 
    }
    ?>
</body>
</html>
