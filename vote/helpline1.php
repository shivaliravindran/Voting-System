<?php
include "connection.php";
session_start();
if (isset($_POST["submit"])) 
{
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $comments = $_POST['comments'];
    //$fileToUpload = $_POST['fileToUpload'];

    $sql = "INSERT INTO helpline (firstname, lastname, branch, email, phone, experience,comments) VALUES('$firstname', '$lastname', '$branch', '$email', '$phone', '$experience','$comments')";
    if(mysqli_query($conn,$sql))
    {
        echo "";
    } 
    
        if(!empty($_FILES['fileToUpload']))
          {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
        $uploadOk = 1;
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        // Check if file already exists
        if (file_exists($target_file)) {
          echo "Sorry, a file already exists.";
          $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 2 * 1024 *1024) {
          echo "Sorry, your file is more than 2 MB.";
          $uploadOk = 0;
        }

	// Check file type
        /*if ($_FILES["fileToUpload"]["type"] == "pdf") {
          echo "Sorry, your file is not a pdf.";
          $uploadOk = 0;
        }*/
        
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
          {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded successfully!";
            echo '<script> alert("Request sent. Wait for further communication through mail.") 
            window.location="cand.php";</script>';
          } 
          else 
          {
            echo "Sorry, there was an error uploading your file.";
          }
        }
        
    }
}
?>