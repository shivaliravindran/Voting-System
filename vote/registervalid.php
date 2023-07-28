<?php
include "connection.php";
session_start();
if (isset($_POST["submit"])) 
{
    $usertype = $_POST["usertype"];
    $electiontype = $_POST["electiontype"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $name = "/^[a-zA-Z ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $number = "/^[0-9]+$/";

    if(empty($usertype) || empty($electiontype)|| empty($firstname) || empty($lastname) || empty($gender) || empty($phone) || empty($address) || empty($username) || empty($password))
    {
        header("Location: register.php?error=All fields must be filled");
        exit();
    } 
    if(preg_match($emailValidation,$email)==0)
    {
        header("Location: register.php?error=Email is of incorrect format");
        exit();
    }
    if(strlen($password) < 3 )
    {
        header("Location: register.php?error=Password must be of atleast 3 characters");
        exit();
    }
    if(strlen($repassword) < 3 )
    {
        header("Location: register.php?error=Password must be of atleast 3 characters");
        exit();
    }
    if($password != $repassword)
    {
        header("Location: register.php?error=Passwords do not match");
        exit();
    }
    if(preg_match($number,$phone)==0)
    {
        header("Location: register.php?error=Phone number is of incorrect format");
        exit();
    }
    if(!(strlen($phone) == 10))
    {
        header("Location: register.php?error=Phone number must be of 10 numbers");
        exit();
    }

    $sql = "INSERT INTO register (usertype, electiontype, firstname, lastname, gender, phone, address, email, username, password) VALUES('$usertype', '$electiontype', '$firstname', '$lastname', '$gender', '$phone', '$address', '$email', '$username', '$password')";
    if(mysqli_query($conn,$sql))
    {
        echo '<script> alert("Successfully Registered!") 
        window.location="index.php";</script>';
    } 

    $sql = "INSERT INTO login (username, password, usertype, electiontype) VALUES('$username','$password','$usertype','$electiontype')";
    if(mysqli_query($conn,$sql))
    {
        header("Location: index.php");
    } 
}
?>