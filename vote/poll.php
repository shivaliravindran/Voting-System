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
        }
        button {
            padding: 9px 12px;
            margin-left: 5px;
            background-color: lightslategray;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            margin-left: 50px;
            margin-bottom: 50px;
            text-align: center;
            font-family: Calibri, Helvetica, sans-serif;
            width: 50%;
            float: left;
            padding: 20px;
            background-color: wheat;
        }
        .flex-container {
            border: 3px solid #fff;
            //padding: 20px;
        }
        .link {
            border-radius: 10px;
            border: 1px solid black;
            padding: 20px; 
            width: 150px;
            text-align: center;
            height: 0.5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button {
            padding: 9px 12px;
            margin-left: 25px;
            background-color: lightslategray;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey;
        }
        a {
            text-decoration: none;
            font-size: 17px;
            color: black;
        }
        .dropdown {
            padding: 9px 12px;
            border-radius: 4px;
            color: white;
            background-color: darkslategrey;
        }
    </style> 
</head>
<body>
    <div class = "top">
        <h1>&nbsp;&nbsp;Results</h1>
    </div> 
    <br><br>
    <form action = "poll.php" method = "post">
    <center><b>Select Year: </b><select class="dropdown" name = "yr"><center>
        <option selected value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
    </select><br><br>
    <center><b>Select Postion: </b><select class="dropdown" name = "pos"><center>
        <option selected value="President">President</option>
        <option value="Secretary">Secretary</option>
        <option value="Treasurer">Treasurer</option>
        <option value="Manager">Manager</option>
    </select><br><br>
    <input type = "submit" name = "submit" value = Search class="dropdown">
    <input type = "submit" name = "ongoing" value = 'Ongoing election' class="dropdown">
    <?php
        include "connection.php";
        if(isset($_POST['submit']))
        {
            $yr = $_POST['yr'];
            $pos = $_POST['pos'];
            $sql = "SELECT firstname from results where year = '$yr' and position = '$pos'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    echo 
                    "<html><body><div class='flex-container'>
                    <div class='card'>
                        <img src='pictures/candspaceprof.jpg' alt='Profile' height=200px style='width:80%;margin:0px 0px 0px 0px;'>
                        <br><center><h3>".$row[0]."</h3></center>
                    </div>";
                }
            }
    }
    if(isset($_POST['ongoing']))
    {
        $sql = "SELECT firstname,position,votes from contestcand";
        $result = mysqli_query($conn, $sql);
        echo "<html><body><div><br>
                <table border=1 align=center cellspacing=0 cellpadding=20 name = 't1'>
                    <tr><th>First Name</th>
                    <th>Running for</th>
                    <th>Votes</th></tr>";
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "
                    <tr><td>".$row[0]."</td>  
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td></tr>";
            }
        }
        echo "</table><br>
        </div></body></html>";
}
    ?>
</body>
</html>