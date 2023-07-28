<?php
include "connection.php";
session_start();
if (isset($_POST["submit"])) 
{
    $confirmation = $_POST['cno'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $currentpos = $_POST['currentpos'];
    $doj = $_POST['doj'];
    $experience = $_POST['experience'];
    
    if($position == 'President')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'President'";
        if(mysqli_query($conn,$sql1))
        {
            echo "";
        }
    }
    if($position == 'Vice President')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'Vice President'";
        if(mysqli_query($conn,$sql1))
        {
            echo "";
        }
    }
    if($position == 'Secretary')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'Secretary'";
        if(mysqli_query($conn,$sql1))
        {
            echo "";
        }
    }
    if($position == 'Treasurer')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'Treasurer'";
        if(mysqli_query($conn,$sql1))
        {
            echo "";
        }
    }
    if($position == 'Manager')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'Manager'";
        if(mysqli_query($conn,$sql1))
        {
            echo "hi";
        }
    }
    if($position == 'Team Lead')
    {
        $sql1 = "UPDATE posit SET seats = seats - 1 where position = 'Team Lead'";
        if(mysqli_query($conn,$sql1))
        {
            echo "hi";
        }
    }

    $sql = "INSERT INTO contestcand (confirmation, firstname, lastname, email, phone, position, currentpos, dateofjoin, experience,votes) VALUES('$confirmation', '$firstname', '$lastname', '$email', '$phone', '$position', '$currentpos', '$doj', '$experience',0)";
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert('Your candidacy has been confirmed. Good Luck!')
        window.location='cand.php';</script>";
    } 
}
?>