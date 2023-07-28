<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .top {
            background-color: darkslategrey; 
            color: white;
            padding: 1px;
        }
        html,body {
            margin: 0px;
            padding: 0px;
        }
        body{  
            font-family: Calibri, Helvetica, sans-serif;    
        }  
        .container {  
            padding: 50px;  
            background-color: lightgrey;  
        }  
        input[type=text], input[type=password], textarea {  
            width: 100%;  
            padding: 15px;  
            margin: 5px 0 22px 0;    
            border: none; 
        }  
        input[type=text]:focus, input[type=password]:focus {  
            background-color: lightslategrey;  
            outline: none;  
        }  
        div {  
            padding: 10px 0;  
        }  
        .registerbtn {  
            background-color: darkslategrey;  
            color: white;  
            padding: 16px 20px;  
            margin: 8px 0;  
            border: none;  
            cursor: pointer;  
            width: 10%;  
            opacity: 0.9;  
        }  
        .registerbtn:hover {  
            opacity: 1;  
        }  
        .dropdown {
            padding: 9px 12px;
            color: white;
            background-color: darkslategrey;
            border: none;
        }
    </style>
    <script>
        function func1()
        {
            var x = document.getElementById("i1").value;
            var y = document.getElementById("i2").value;
            var z = document.getElementById("i3").value;
            if (x.length<3)
            {
                alert("The username must have atleast 3 characters.");
                return false;
            }
            if(y!=z)
            {
                alert("The passwords do not match. Please try again.");
                return false;
            }
        }

</script> 
</head>
<body>
    <div class = "top">
        <h1>&nbsp;&nbsp;Register here.</h1> 
    </div> 
<form method="post" action="registervalid.php">  
    <div class="container">   
        <label><b> Register As </b></label>
        <select class="dropdown" style = "margin-left: 5px;" name="usertype">
            <option value="candidate">Candidate</option>
            <option value="voter">Voter</option>
        </select><br><br>
        <label><b> Election type </b></label>
        <select class="dropdown" style = "margin-left: 5px;" name="electiontype">
            <option value="general">General</option>
            <option value="corporate">Corporate</option>
        </select><br><br>
        <label><b> First Name </b></label>   
            <input type="text" name="firstname" size="15" required>      
        <label><b> Last Name </b></label>    
            <input type="text" name="lastname" size="15" required>     
        <label><b> Gender </b></label><br><br>
            <input type="radio" value="Male" name="gender"> Male   
            <input type="radio" value="Female" name="gender"> Female  <br><br>
        <label><b> Phone </b></label>  
            <input type="text" name="phone" size="10" required>   
        <label><b> Current Address </b></label> 
            <textarea cols="80" rows="5" placeholder="Current Address" value="address" name = "address" required>  
            </textarea>  
        <label><b> E-mail ID</b></label>  
        <input type="text" name="email" required>  
        <label for="username"><b> Username </b></label>  
            <input type="text" placeholder="Enter Username" name="username" id = "i1"  required>  
        <label for="psw"><b> Password </b></label>  
            <input type="password" placeholder="Enter Password" name="password" id="i2" required>  
        <label for="psw-repeat"><b> Confirm Password </b></label>  
            <input type="password" placeholder="Re-type Password" name="repassword" id="i3" required>  
        <button type="submit" class="registerbtn" onclick = "func1()" name = "submit"><b> Register </b></button> 
    </div>   
</form>  
</body>  
</html>  