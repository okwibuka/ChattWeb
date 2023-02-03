<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{
    $id = mysqli_real_escape_string($con , $_POST['id']);
    $first_name = mysqli_real_escape_string($con , $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con , $_POST['last_name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $birth = mysqli_real_escape_string($con , $_POST['birth']);
    
    $query = "UPDATE users SET first_name='$first_name', last_name='$last_name',
    email='$email', birth='$birth' WHERE id='$id'";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
        header("Location: ../user_pages/profile.php?id=$id");
    }
}
