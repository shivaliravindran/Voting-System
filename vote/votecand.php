<!DOCTYPE html>
<html>
<head>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 150px;
  margin: auto;
  margin-left:50px;
  margin-bottom:50px;
  text-align: center;
  font-family: Calibri, Helvetica, sans-serif;
  width: 50%;
  float: left;
  padding: 20px;
  background-color: wheat;
}
.float-container {
    border: 3px solid #fff;
    padding: 20px;
}
.title {
  color: grey;
  font-size: 18px;
}
.link {
  border-radius: 10px;
  border: 1px solid black;
  padding: 20px; 
  width: 80px;
  text-align: center;
  height: 0.5px;
  display: flex;
  justify-content: center;
  align-items: center;
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
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 17px;
  color: black;
}
button:hover, a:hover {
  opacity: 0.7;
}
*{
    padding: 0;
    margin: 0;
}
body{
  background-image: url("");
  background-repeat: no-repeat;
  background-size: 100%;
  font-size: 12px;
}

</style>
</head>
<body>
<div class="head"><b>&nbsp;&nbsp;&nbsp; Voting page</b></div><br><br>
</body>
</html>
<?php
      include "connection.php";
      $sql = "SELECT firstname,lastname,email,position,votes from contestcand where position = 'President'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
              if(isset($_POST['pres']))
              {
                session_start();
                if(!isset($_SESSION['start']))
                {
                    $_SESSION['start'] = time();
                }
                
                echo 
                "<div class='flex-container'>
                <div class='card'>
                  <img src='pictures/candspaceprof.jpg' alt='Profile' height=150px style='width:100%;margin: 0px 0px 0px 0px;' >
                  <br><br><center><form action = 'votecand.php' method='post'>
                  <div class='link'><input type='submit' id='abcd' name = '".$row[1]."' value = '".$row[0]."'</div>
                  </form></center>
                </div>";
              }
              if(isset($_POST[$row[1]]))
                {
                  if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 20)) 
                  {
                    session_unset();
                    session_destroy();
                    echo "Your session has expired!<br/>";
                  }
                    $sql = "UPDATE contestcand SET votes = $row[4] + 1 where firstname='$row[0]'";
                    if(mysqli_query($conn,$sql))
                        echo '<script> alert("Vote has been casted.");
                              window.location="voter.php";
                              </script>';
                    else
                        echo "error";
                }
            }
        }
      $sql1 = "SELECT firstname,lastname,email,position from contestcand where position = 'Vice President'";
      $result1 = mysqli_query($conn, $sql1);
      if(mysqli_num_rows($result1)>0)
        {
            while($row1 = mysqli_fetch_array($result1))
            {
              if(isset($_POST['vpres']))
              {
                echo 
                "<div class='flex-container'>
                <div class='card'>
                  <img src='pictures/candspaceprof.jpg' alt='Profile' height=150px style='width:100%;margin: 0px 0px 0px 0px;' >
                  <br><br><center><form action = 'votecand.php' method='post'>
                  <div class='link'><input type='submit' id='abcd' name = '".$row1[1]."' value = '".$row1[0]."'</div>
                  </form></center>
                </div>";
              }
              if(isset($_POST[$row1[1]]))
              {
                $sql = "UPDATE contestcand SET votes = $row1[4] + 1 where firstname='$row1[0]'";
                if(mysqli_query($conn,$sql))
                  echo '<script> alert("Vote has been casted.");
                        window.location="voter.php";
                        </script>';
                else
                  echo "error";
              }
            }
          }
          $sql2 = "SELECT firstname,lastname,email,position from contestcand where position = 'Secretary'";
          $result2 = mysqli_query($conn, $sql2);
          if(mysqli_num_rows($result2)>0)
            {
                while($row2 = mysqli_fetch_array($result2))
                {
                  if(isset($_POST['sec']))
                  {
                    echo 
                    "<div class='flex-container'>
                    <div class='card'>
                      <img src='pictures/candspaceprof.jpg' alt='Profile' height=150px style='width:100%;margin: 0px 0px 0px 0px;' >
                      <br><br><center><form action = 'votecand.php' method='post'>
                      <div class='link'><input type='submit' id='abcd' name = '".$row2[1]."' value = '".$row2[0]."'</div>
                      </form></center>
                    </div>";
                  }
                  if(isset($_POST[$row2[1]]))
                  {
                    $sql = "UPDATE contestcand SET votes = $row2[4] + 1 where firstname='$row2[0]'";
                    if(mysqli_query($conn,$sql))
                      echo '<script> alert("Vote has been casted.");
                            window.location="voter.php";
                            </script>';
                    else
                      echo "error";
                  }
                }
              }
?>