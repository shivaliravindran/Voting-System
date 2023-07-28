<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate space</title>
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
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 100px;
            height: 100px;
            //margin: auto;
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
            //border: 3px solid #fff;
            //padding: 20px;
        }
        .link {
            border-radius: 10px;
            border: 1px solid black;
            padding: 15px; 
            width: 70px;
            //text-align: center;
            height: 0.5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
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
            font-size: 12px;
            color: black;
        }
        .b {
            display: flex;
        }

    </style>

</head>
<body>
    <div class = "top">
        <h1>&nbsp;&nbsp;Candidate Space</h1>
    </div> 
    <br>
    <h3 style="margin-left: 50px;">Pending Requests</h3>
    <?php
      include "connection.php";
      $sql = "SELECT firstname,lastname,email from helpline";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $_SESSION['firstname']=$row[0];
                $_SESSION['lastname']=$row[1];
                $_SESSION['email']=$row[2];
                echo 
                "<html><body><div class='flex-container'>
                <div class='card'>
                    <img src='pictures/candspaceprof.jpg' alt='Profile' height=100px style='width:100%;margin:0px 0px 0px 0px;'>
                    <br><center><h5>".$row[0]."</h5></center>
                    <form action='candspace.php' method='post'>
                    <div class = 'b'>
                        <input type='submit' value='Accept' name = '".$row[1]."' style='background-color:lightgreen; border:none;'>
                        <input type='submit' value='Reject' name = '".$row[1].$row[1]."' style='background-color:#ffcccb; border:none;'>
                    </div>
                    </form>
                </div>";
                if(isset($_POST[$row[1]]))
                {
                    $sql = "INSERT INTO candidate(firstname,lastname,email) VALUES('$row[0]','$row[1]','$row[2]')";
                    if(mysqli_query($conn,$sql))
                        echo '<script> alert("Accepted into list of Candidates.") 
                                window.location="admin.php";</script>';
                    else
                        echo "error";

                    $sql = "DELETE FROM helpline where firstname = '$row[0]'";
                    if(mysqli_query($conn,$sql))
                        echo "";
                    else
                        echo "error";

                    error_reporting(E_ALL & ~E_NOTICE);

                    require("PHPMailer_5.2.4/class.phpmailer.php");
                    $mail = new PHPMailer();
                    
                    $mail->IsSMTP(); // set mailer to use SMTP
                    $mail->SMTPDebug  = 0;
                    
                    $mail->From = "nithya.rad2003@gmail.com";
                    $mail->FromName = "Admin";
                    
                    $mail->Host = "smtp.gmail.com"; // specif smtp server
                    $mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
                    
                    $mail->Port = 465; // Used instead of 587 when only POP mail is selected
                    $mail->SMTPAuth = true;
                    
                    $mail->Username = "nithya.rad2003@gmail.com"; // SMTP username
                    $mail->Password = "rnlodcllvqgexpnw"; // SMTP password
                    
                    $mail->AddAddress($row[2], "rnlodcllvqgexpnw"); //replace myname and mypassword to yours
                    
                    $mail->WordWrap = 50; // set word wrap
                    $mail->AddAttachment("/Applications/XAMPP/xamppfiles/htdocs/vote/Terms.docx"); // add attachment
                    
                    $mail->IsHTML(true); // set email format to HTML
                    $mail->Subject = 'Verification Mail';
                    
                    $mail->Body = '<p style="font-size:20;">'.$row[0].', your request for candidacy has been received. After verifying your profile and resume, you have been selected to contest for the elections this year. Please find the confirmation number in the attached file and fill this out while confirming your candidacy through the contest form.<br><br>For any queries please contact us on this email anytime.<br><br><br>Thank you<br>Regards,<br>Admin<br><br><br><br><br></p>';
                    
                    if($mail->Send()) {$message[] = "Sent Verification Mail Successfully";}
                    else {$message[] = "Failed to send Verification Mail";}
                }
                
                if(isset($_POST[$row[1].$row[1]]))
                {
                    $sql = "DELETE FROM helpline where firstname = '$row[0]'";
                    //echo "hi";
                    if(mysqli_query($conn,$sql))
                        //echo "hello";
                        echo '<script> alert("Rejected for list of Candidates.") 
                        window.location="admin.php";</script>';
                    else
                        echo "error";
                }
            }
        }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <h3 style="margin-left: 52px;">All Candidates</h3>
    <?php
        $sql = "SELECT firstname from candidate";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo 
                "<html><body><div class='flex-container'>
                <div class='card'>
                    <img src='pictures/candspaceprof.jpg' alt='Profile' height=100px style='width:100%;margin:0px 0px 0px 0px;'>
                    <br><center><h5>".$row[0]."</h5></center>
                </div>";
            }
        }
    ?>
</body>
</html>
