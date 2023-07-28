<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container {
            width: 30%;
            margin-left: 430px;
            margin-top: 30px;
            border: 1px solid darkslategrey;
            border-radius: 4px;
            background-color: whitesmoke;
            color: darkslategrey;
        }
        body {
            background-color: ;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
        }
        .form-control {
            padding: 9px 9px;
            margin-left: 5px;
            border-radius: 4px;
            border: 2px solid #ccc;
            width: 92%;
        }
        .dropdown {
            padding: 9px 12px;
            border-radius: 4px;
            color: white;
            background-color: darkslategrey;
        }
        option {
            padding: 9px 12px;
        }
        button {
            padding: 9px 12px;
            margin-left: 5px;
            background-color: darkslategrey;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey
        }
        .top {
            background-color: darkslategrey; 
            color: white;
            padding: 1px;
        }
        html,body {
            margin: 0px;
            padding: 0px;
        }
        .dropdn {
            display: flex;
            height: 40px;
        }
    </style> 
    <script>
        function func1()
        {
            var x = document.getElementById("i1").value;
            if (x.length<3)
            {
                alert("The username must have atleast 3 characters.");
            }
        }
</script> 
</head>
<body>
    <div class = "top">
        <img src = "pictures/vote1.jpg" width = 20%>
    </div>
    <div class = "container">
        <form action = "validlogin.php" method="post">
        <h2 style = "text-align: center;">Login</h2>
            <label for="username" class="form-label" ><h4 style = "margin-left: 5px;">Username</h4></label>
            <input type="text" class="form-control" name="username" id="i1" >
            <label for="password" class="form-label"><h4 style = "margin-left: 5px;">Password</h4></label>
            <input type="password" class="form-control" name="password" id="password"><br>
        <div class = "dropdn">
        <div>
        <h4 style = "margin-left: 5px;">User Type</h4>
        <select class="dropdown" style = "margin-left: 5px;" name = "usertype">
            <option selected value="admin">Admin</option>
            <option value="candidate">Candidate</option>
            <option value="voter">Voter</option>
        </select>
        </div>
        <div style="margin-left: 100px;">
        <h4 style = "margin-left: 5px;">Type of election</h4>
        <select class="dropdown" style = "margin-left: 5px;" name = "electiontype">
            <option selected value="general">General</option>
            <option value="corporate">Corporate</option>
        </select>
        </div>
        </div><br><br><br><br>
        <button type="submit" onclick = "func1()" name = "submit">Sign In</button><br><br>
        <a href="#" style = "margin-left: 5px; color: darkslategrey"><b>Forgot Password?</b></a><br><br>
        <a href="register.php" style = "margin-left: 5px; color: darkslategrey"><b>New user? Register now.</b></a><br><br>
    </form>
</body>
</html>