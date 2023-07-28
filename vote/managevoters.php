<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <style>
        .top {
            background-color: darkslategrey; 
            color: white;
            padding: 1px;
        }
        html, body {
            margin: 0px;
            padding: 0px;
            font-family: Calibri, Helvetica, sans-serif;
        }
        button {
            padding: 9px 12px;
            margin-left: 5px;
            background-color: lightslategray;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey
        }
        </style> 
</head>
<body>
    <div class = "top">
        <h1>&nbsp;&nbsp;&nbsp;View Voter List</h1>
    </div> 
    </body>
    </html>
    <?php
      include "connection.php";
      $sql = "SELECT * from register where usertype = 'voter'";
      $result = mysqli_query($conn, $sql);
      //$row = mysqli_fetch_array($result);
      //$count = mysqli_num_rows($result);
      echo "<html><body><div><br>
                <table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                    <tr><th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th></tr>";
      if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "
                    <tr><td>".$row[2]."</td>  
                    <td>".$row[3]."</td>
                    <td>".$row[7]."</td>
                    <td>".$row[5]."</td> 
                    <td>".$row[6]."</td></tr>";
            }
        }
        echo "</table><br>
        </div></body></html>";
    ?>