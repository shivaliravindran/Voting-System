<html>
<head>
<style>
table{
  border-radius:2%;
	border-spacing: 15px;
  	background-color: darkslategrey;    
}
td {
  border-radius:5%;
	background-color: white;
	text-align: center;
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
.registerbtn {  
            border-radius: 20%;
            background-color: darkslategrey;  
            color: white;  
            padding: 16px 20px;  
            margin: 8px 0;  
            border: none;  
            cursor: pointer;  
            width: 50%;  
            opacity: 0.9;  
        }  
        .registerbtn:hover {  
            opacity: 1;  
        }  
*{
    padding: 0;
    margin: 0;
}
</style>
</head>
<body>
  <div class="head"><b>&nbsp;&nbsp;&nbsp; Select Position</b></div><br><br>
<center><br>
<form action="votecand.php" method="post">
<table>
  <tr>

    <td><img src="pictures/pr.jpg"><br><a href="votecand.php"><br> <button type="submit" class="registerbtn" name = "pres"><b> President </b></button> </a></td>
    <td><img src="pictures/vp.jpg"><br><a href="votecand.php"><br><button type="submit" class="registerbtn" name = "vpres"><b>Vice President</b></button></a></td>
    <td><img src="pictures/sec.jpg"><br><a href="votecand.php"><br><button type="submit" class="registerbtn" name = "sec"><b>Secretary</b></button></a></td>
  </tr>
  <tr>
    <td><img src="pictures/man1.jpg" height=200 width=220><br><a href="man.html"><br><button type="submit" class="registerbtn" name = "man"><b>Manager</b></button></a></td>
    <td><img src="pictures/tr.jpg"><br><a href="votecand.php"><br><button type="submit" class="registerbtn" name = "tres"><b>Treasurer</b></button></a></td>
    <td><img src="pictures/man.jpg" height=200px><br><a href="votecand.php"><br><button type="submit" class="registerbtn" name = "team"><b>Team Lead</b></button></a></td>
  </tr>
</table>
<form>
</center>
</body>
</html>