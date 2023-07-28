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
  width:125px;
  margin-top: 15px;
  font-size: 12px;
}
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
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

<div class="head"><br>&nbsp;&nbsp;&nbsp; Voter's Credentials<br><br></div><br><br>
<div class="container">
  <div style="max-width: 125px;">
    
</div>
  <div class="detail">
    <table style="width: 50%;margin:10px;margin-bottom: 0px;margin-left: 15 0px;">
        <tr><td style="color:darkslategrey">Voter ID:</td><td> 78542235</td></tr>
        <tr><td style="color:darkslategrey;">User Name:</td><td> Shivali</td></tr>
        <tr><td style="color:darkslategrey">Password:</td><td> vote890 </td></tr>   
    </table><br>
    </div>


</div>
<br><form class ="field" style="font-size: 20px;margin-left: 240px; width:50%;"><fieldset>
  <legend style="margin-left: 20px;color:darkslategray;">Login as Voter</legend><br>
  <label style="font-size: 20px;margin-left: 5px;" >Click here to login as voter&nbsp;</label><br>
  
  <center><button type="submit" class="submit-button"><a href="index.php">Login</a></button></center>
  </fieldset></form><br>
</body>
</html>