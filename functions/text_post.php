



<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{

    $user_id = $_SESSION['login_id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $description = mysqli_real_escape_string($con , $_POST["description"]);
   


                //usual codes

    $query="INSERT INTO post (description,user_id,user_first_name,user_last_name) 
    VALUES 
    ('$description','$user_id','$first_name','$last_name')";
    $query_run = mysqli_query($con , $query);
    
    if($query_run && !empty($description))
    {
    
        header("Location: ../user_pages/home.php ");
    }
    else
    {
        header("Location: ../user_pages/home.php");
        
    }

}           