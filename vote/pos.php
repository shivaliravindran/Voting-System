<html>
<head>
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
    <div class="top"><h1>&nbsp;&nbsp;&nbsp;Positions</h1></div>
    </body>
    </html>
    <?php
      include "connection.php";
      $sql = "SELECT * from posit";
      $result = mysqli_query($conn, $sql);
      echo "<html><body><div><br>
                <table border=1 align=center cellspacing=0 cellpadding=20 width = 40% name = 't1'>
                    <tr><th>Position</th>
                    <th>Seats left (out of 10)</th></tr>";
      if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr><td>".$row[0]."</td>  
                    <td>".$row[1]."</td></tr>";
            }
        }
        echo "</table><br>
        </div></body></html>";
    ?>
