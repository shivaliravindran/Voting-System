<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $electiontype = $_POST['electiontype'];
    if(empty($username))
    {
        header("Location: index.php?error=User Name is Required");
    }
    else if(empty($password))
    {
        header("Location: index.php?error=Password is Required");
    }
    else
    {
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_array($result);
            echo $row[0];
            if($row[1] === $password && $row[2] == $usertype)
            {
                $_SESSION['usertype'] = $row[2];
                $_SESSION['username'] = $row[0];
                if($row[2] == "admin")
                header("Location: admin.php");
                else if($row[2] == "candidate")
                header("Location: cand.php");
                else if($row[2] == "voter")
                header("Location: voter.php");
            }
            else
            {
                header("Location: index.php?error=Invalid credentials, try again");
            }
        }
        else
        {
            header("Location: index.php?error=Invalid credentials, try again");
        }
    }
}
else 
{
    header("Location: index.php");
}
?>