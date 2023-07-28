<html>
<head>
<style>
.div {
  background-color: darkslategrey; 
  color: white;    
  text-align: left;
  margin: auto;
  height: 120px;
  font-weight:bold; 
  font-size: 40px;
  font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
#c tr:nth-child(even) {
background-color: lightgray;
  border: 5px solid darkslategrey;
}
table,th,tr {
  border: 5px solid darkslategrey;
  padding: 5px;
  text-align: center;
  align-items:center
  justify-content: center;
  height: 50px;
}

*{
margin: 0px;
padding: 0px;
}
</style>
</head>
<body>
<div class="div">
<br>
<h2>Positions</h2>
</div><br>
</body>
</html>
<?php
      include "connection.php";
      $sql = "SELECT firstname, currentpos from contestcand where position = 'President'";
      $result = mysqli_query($conn, $sql);
      echo "<html><body><div><h2><center>Candidates for President</center></h2><br>
                <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                    <tr><th>First Name</th>
                    <th>Current Position</th></tr>";
      if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "
                    <tr><td>".$row[0]."</td>  
                    <td>".$row[1]."</td></tr>";
            }
        }
        echo "</table></center><br>
        </div></body></html>";

        $sql = "SELECT firstname, currentpos from contestcand where position = 'Vice President'";
        $result = mysqli_query($conn, $sql);
        echo "<html><body><div><h2><center>Candidates for Vice President</center></h2><br>
                  <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                      <tr><th>First Name</th>
                      <th>Current Position</th></tr>";
        if(mysqli_num_rows($result)>0)
          {
              while($row = mysqli_fetch_array($result))
              {
                  echo "
                      <tr><td>".$row[0]."</td>  
                      <td>".$row[1]."</td></tr>";
              }
          }
          echo "</table></center><br>
          </div></body></html>";

          $sql = "SELECT firstname, currentpos from contestcand where position = 'Secretary'";
          $result = mysqli_query($conn, $sql);
          echo "<html><body><div><h2><center>Candidates for Secretary</center></h2><br>
                    <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                        <tr><th>First Name</th>
                        <th>Current Position</th></tr>";
          if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    echo "
                        <tr><td>".$row[0]."</td>  
                        <td>".$row[1]."</td></tr>";
                }
            }
            echo "</table></center><br>
            </div></body></html>";

            $sql = "SELECT firstname, currentpos from contestcand where position = 'Treasurer'";
            $result = mysqli_query($conn, $sql);
            echo "<html><body><div><h2><center>Candidates for Treasurer</center></h2><br>
                      <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                          <tr><th>First Name</th>
                          <th>Current Position</th></tr>";
            if(mysqli_num_rows($result)>0)
              {
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "
                          <tr><td>".$row[0]."</td>  
                          <td>".$row[1]."</td></tr>";
                  }
              }
              echo "</table></center><br>
              </div></body></html>";

              $sql = "SELECT firstname, currentpos from contestcand where position = 'Manager'";
              $result = mysqli_query($conn, $sql);
              echo "<html><body><div><h2><center>Candidates for Manager</center></h2><br>
                        <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                            <tr><th>First Name</th>
                            <th>Current Position</th></tr>";
              if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "
                            <tr><td>".$row[0]."</td>  
                            <td>".$row[1]."</td></tr>";
                    }
                }
                echo "</table></center><br>
                </div></body></html>";

                $sql = "SELECT firstname, currentpos from contestcand where position = 'Team Lead'";
                $result = mysqli_query($conn, $sql);
                echo "<html><body><div><h2><center>Candidates for Team Lead</center></h2><br>
                          <center><table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                              <tr><th>First Name</th>
                              <th>Current Position</th></tr>";
                if(mysqli_num_rows($result)>0)
                  {
                      while($row = mysqli_fetch_array($result))
                      {
                          echo "
                              <tr><td>".$row[0]."</td>  
                              <td>".$row[1]."</td></tr>";
                      }
                  }
                  echo "</table></center><br>
                  </div></body></html>";
?>