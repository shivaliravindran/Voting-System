<!DOCTYPE html>
<html>
    <head>
        <style>
             .head{
            background-color: darkslategrey ;
            color: white;
            display: flex;
            justify-content:left;
            padding: 0px;
            margin: 0px;
            padding-left: 30px;
            font-family:Calibri, Helvetica, sans-serif;   
            font-weight:300;
            }
            .head1{
              font-weight: bold;
            font-size: 40px;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        .head2{
            font-size:14px;
            padding-bottom: 30px;
            line-height: 20px;
        }
        *{
             padding: 0;
            margin: 0;
        }
        </style>
    </head>
    <body>
        <div>
            <h1 class="head head1">
                Contest in the Elections
            </h1>
            <h6 class="head head2">
                In case your request has been approved, you can contest in the upcoming elections by filling up the form. <br>
                Confirmation number would have been sent in case your request was approved.
            </h6>
        </div>
        <br><br>
        <form action = 'contest1.php' method = 'post'>
            <table cellspacing=10 >
                <tr>
                    <td><font color = "red">*</font><label for = "Confirmation">Confirmation no: </label></td>
                <td bordercolor="blue"><input type="text" name = "cno"></td>
                  </tr>
              <tr>
                <td><font color = "red">*</font><label for = "First Name">First Name: </label></td>
            <td bordercolor="blue"><input type="text" name = "firstname"></td>
              </tr>
              <tr>
                <td><font color = "red">*</font><label for = "Last Name">Last Name: </label></td>
            <td><input type="text" name = "lastname"></td> 
              </tr>
              <tr>
                <td><font color = "red">*</font><label for = "Email">Email: </label></td>
            <td><input type="email" size="40" name = "email"></td> 
              </tr> 
              <tr>
                <td>&nbsp;&nbsp;Phone:</td>
                <td><input type="text" id="phone" name = "phone"></td>
              </tr> 
              <tr>
            <td><font color = "red">*</font><label for="Position">Enter position: </label>
            <td><input type="radio" name="position" value = "President">
            <label >President</label><br>
            <input type="radio" name="position" value = "Vice President">
            <label>Vice President</label><br>
            <input type="radio" name="position" value = "Secretary">
            <label>Secretary</label><br>
            <input type="radio" name="position" value = "Treasurer">
            <label>Treasurer</label><br>
            <input type="radio" name="position" value = "Manager">
            <label>Manager</label><br>
            <input type="radio" name="position" value = "Team Lead">
            <label>Team Lead</label><br>
            </td>
            </tr>
            
              <tr>
                <td><label for = "Current">&nbsp;&nbsp;Your current position:</td>
                    <td>
                <select name="currentpos">
                      <option value = "0">Choose current position &nbsp;&nbsp;</option>
                      <option value = "Vice President">Vice President</option>
                      <option value = "Secretary">Secretary</option>
                      <option value = "Treasurer">Treasurer</option>
                      <option value = "Manager">Manager</option>
                      <option value = "Team Lead">Team Lead</option>
                      <option value = "Employee">Employee</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td><label for = "Date">&nbsp;&nbsp;Date of joining: </label></td>
                <td><input type="date" name="doj"></td>  
                  </tr>
              <tr>
                <td><label for = "Experience">&nbsp;&nbsp;Experience(in years): </label></td>
            <td><input type="text" name = "experience"></td>  
              </tr>  
            </table>
            &nbsp;&nbsp; &nbsp;Why do you wish to contest in this position:<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<textarea rows = "5" cols = "50"></textarea><br><br></textarea>
            <center> <button type="submit" class="registerbtn" name="submit"><b> Confirm Candidacy </b></button> <br><br> </p>
           </form>
    </body>
</html>
