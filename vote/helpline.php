<!DOCTYPE html>
<html>
    <head>
        <style>
        .top {
            background-color: darkslategrey; 
            color: white;
            padding: 0px;
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
        input[type=text], input[type=password], textarea, input[type=email], input[type=number] {  
            width: 200%;  
            padding: 15px;  
            margin: 5px 0 22px 0;    
            border: none; 
        }  
        input[type=text]:focus, input[type=password]:focus {  
            background-color: lightslategrey;  
            outline: none;  
        }  
        div {  
            padding: 0px 0;  
        } 
        .td{
            font-weight: bold;
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
            .head{
            background-color: darkslategrey ;
            color: white;
            display: flex;
            justify-content:left;
            padding: 0px;
            margin: 0px;
            padding-left: 30px;
            font-family:sans-serif;
            font-weight:300;
            }
            .head1{
            font-size: 40px;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        .head2{
            font-size:14px;
            padding-bottom: 60px;
        }
        .dropdown {
            padding: 9px 12px;
            color: white;
            background-color: darkslategrey;
            border: none;
        }
        *{
            margin: 0;
            padding: 0;
        }
        </style>
    </head>
    <body>
        <div class = "top">
            <div>
                <h1 class="head head1">
                    <b>Helpline Section<b>
                </h1>
                <h6 class="head head2">
                    If you wish to contest in the upcoming elections, send us a request by filling up this form
                </h6>
            </div>
        </div> 
        <div class = "container">
        
        <form action="helpline1.php" method="post" enctype="multipart/form-data">
            <table cellspacing=10 >
              <tr>
                <td><font color = "red">*</font><label for = "First Name"><b>First Name: </b></label></td>
            <td bordercolor="blue"><input type="text" name="firstname"></td>
              </tr>
              <tr>
                <td><font color = "red">*</font><label for = "Last Name"><b>Last Name: </b></label></td>
            <td><input type="text" name="lastname"></td> 
              </tr>
              <tr>
                <td><label for = "Address">&nbsp;&nbsp;<b>Address: </b></label></td>
            <td><input type="text" name="address" STYLE="color: #72A4D2;"></td>  
              </tr>  
              <tr>
                <td><label for = "Branch">&nbsp;&nbsp;<b>Select branch:</b></td>
                    <td>
                <select class="dropdown" name="branch">
                      <option value = "0">Choose branch&nbsp;&nbsp;</option>
                      <option value = "Chennai">Chennai</option>
                      <option value = "Banglore">Banglore</option>
                      <option value = "Mumbai">Mumbai</option>
                    </select></td>
                  </tr>
              <tr>
                <td><font color = "red">*</font><label for = "Email"><b>Email: </b></label></td>
            <td><input type="email" size="40" name="email"></td> 
              </tr> 
              <tr>
                <td>&nbsp;&nbsp;<b>Phone:</b></td>
                <td><input type="text" id="phone" style="width:100%" name="phone"></td>
              </tr> 
              <tr>
                <td><label for = "Experience">&nbsp;&nbsp;<b>Experience(in years):</b> </label></td>
            <td><input type="number" name="experience"></td>  
              </tr>
              <tr>
                <td><label for = "filetoUpload">&nbsp;&nbsp;<b>Upload Resume:</b> </label></td>
            <td><input type="file" name="fileToUpload"></td>  
              </tr>  
              <tr>
              <td><br>&nbsp;&nbsp;<b>Comments:</b></td></tr>
            </table>
            &nbsp;&nbsp;&nbsp;&nbsp;<textarea rows = "5" cols = "50" style="width: 70%;margin-left: 8px;" name="comments"></textarea><br><br></textarea>
            <center> <input type="submit" class="registerbtn" name="submit" value="Send Request"></p>
           </form>
       
    </div>
    </body>
</html>
