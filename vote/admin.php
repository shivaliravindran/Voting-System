<?php
    session_start();

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype']))
    
?>

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
            font-family: Trebuchet MS;
        }
        html, body {
            margin: 0px;
            padding: 0px;
        }
        button {
            padding: 9px 12px;
            margin-left: 25px;
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
        a {
            text-decoration: none;
            font-size: 14px;
            color: black;
        }

    </style> 
</head>
<body>
    <div class = "top">
        <h1>&nbsp;&nbsp;&nbsp;Hey! Welcome to the Admin Page.</h1>
        <button type="submit"><a href="logout.php">Log out</a></button><br><br>
    </div> 
    <br><br>
    <div class="flex-container">
<div class="card" style="margin-left:250px;">
    <img src="pictures/voters.jpg" alt="Profile" height=200px style="width:100%;margin: 0px 0px 0px 0px;">
    <br><br><center><div class="link"><a href="./managevoters.php">Manage Voters</a></div></center>
</div>
<div class="card">
    <img src="pictures/cand.jpg" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="./candspace.php">Candidate Space</a></div></center>
</div>
<div class="card" style="margin-left:250px;">
    <img src="pictures/results.jpg" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="poll.php">Poll Results</a></div></center>
</div>
<div class="card">
    <img src="pictures/position.png" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="./new.php">View/Edit Positions</a></div></center>
</div>
  </div>
</body>
</html>