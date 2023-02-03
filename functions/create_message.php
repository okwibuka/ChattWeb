
<?php
session_start();
include("../connection/connection.php");

if(isset($_GET['id']))
{
if(isset($_POST['submit_message']))
{
    $user_id = $_SESSION['login_id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $profile = $_SESSION['user_profile'];
    $receiver_id =mysqli_real_escape_string($con , $_GET['id']);
    $message = mysqli_real_escape_string($con , $_POST['message']);

$query = "INSERT INTO messages(sender_id,receiver_id,sender_first_name,sender_last_name,sender_profile,message) 
     VALUES ('$user_id','$receiver_id','$first_name','$last_name','$profile','$message')";
     $query_run = mysqli_query($con , $query);
     if($query_run)
     {
        header("Location: ../user_pages/messages.php?id=$receiver_id");
     }
}
}
?>