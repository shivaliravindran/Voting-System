<!DOCTYPE html>
<html>
<head>

<style>


.title {
  color: grey;
  font-size: 18px;
}

.head {
  background-color: darkslategrey;
  color: white;
  font-size: 40px;
  display: flex;
  padding:20px;
  justify-content:left;
  padding-bottom: 40px;
  font-family:Calibri, Helvetica, sans-serif;
  font-weight: 500;

}
*{
    padding: 0;
    margin: 0;
}
.flex-container{
    width:40%;
    padding-left: 25px;
    padding-bottom: 15px;
}
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
}
.container div {
  flex: 1;
}
.field{
  padding-left: 40px;
  font-size: 30px;
  color: grey;
}
table{
  height: 180px;
  padding-left: 20px;
}
img{
  border-radius:50%;
  border: 5 px solid transparent;
  border-color: black;
  height: 250px;
  width: 250px;
  padding-left: 20px;
}
.detail{
  font-size:20px;
  margin-left: 120px;
  color: gray;
}

.submit-button{
  background-color:#08b4c0;
  border: #08b4c0;
  border-radius: 15px;
  padding: 10px;
  margin: 5px;
  margin-top: 15px;
  font-size: 12px;
}
</style>
<script>
function func1(){
  var x = document.getElementById("i1").value;
  var y = document.getElementById("i2").value;
  if (x==y)
  {
    alert("The new password is same as the old");
  }}
</script>
</head>
<body>

<div class="head"><br>&nbsp;&nbsp;&nbsp; Profile Section<br><br></div><br><br>
<div class="container">
  <div style="max-width: 125px;">
    <img  src="https://img.freepik.com/premium-vector/woman-profile-cartoon_18591-58480.jpg?w=740">
</div>
  <div class="detail">
    <table style="width: 50%;margin:10px;margin-bottom: 0px;margin-left: 15 0px;">
        <tr><td style="color:darkslategrey">Name:</td><td> Care Forbes</td></tr>
        <tr><td style="color:darkslategrey;">Age:</td><td> 27</td></tr>
        <tr><td style="color:darkslategrey">Email:</td><td> cademoss@gmail.com</td></tr>
        <tr><td style="color:darkslategrey">Phone:</td><td> 9876556789</td></tr>
        <tr><td style="color:darkslategrey;">Position:</td><td> Team Lead</td></tr>    
    </table><br>
    </div>


</div>
<br><form class ="field" style="font-size: 20px;margin-left: 240px; width:50%;"><fieldset>
  <legend style="margin-left: 20px;color:darkslategray;">Password</legend><br>
  <label style="font-size: 20px;margin-left: 5px;" >Enter current password&nbsp;:</font></label><input type="password" id="i1"><br>
  <label style="font-size: 20px;margin-left: 5px;">Enter new password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</font></label><input type="password" id="i2"><br>
  
  <center><button type="submit" class="submit-button" id="ï3" onclick="func1()">Change Password</button></center>
  </fieldset></form><br>
</body>
</html>