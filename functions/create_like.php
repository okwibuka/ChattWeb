

<?php
session_start();
include("../connection/connection.php");

if(isset($_GET['id']))
{
if(isset($_POST['submit']))
{
    $id = mysqli_real_escape_string($con , $_GET['id']);
    $user_email = $_SESSION['email'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $profile = $_SESSION['user_profile'];

    $test = "SELECT * FROM likes WHERE user_email = '$user_email' && post_id = '$id'";
                $test_query = mysqli_query($con , $test);
                $sql = mysqli_num_rows($test_query);

                if($sql>0)
                {   
                header("Location: ../user_pages/likes.php?id=$id");
                die;
                }

                else
            {
    $query = "INSERT INTO likes(user_first_name,user_last_name,writter_image,user_email,post_id) 
     VALUES ('$first_name','$last_name',' $profile','$user_email','$id')";
     $query_run = mysqli_query($con , $query);
     if($query_run) 
         {
        header("Location: ../user_pages/likes.php?id=$id");
        die;
     }
        }

    }
}
                     
?>