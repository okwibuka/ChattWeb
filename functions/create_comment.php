
<?php
session_start();
include("../connection/connection.php");


if(isset($_POST['submit']))
{

    $post_id =mysqli_real_escape_string($con , $_GET["id"]);
    $comment = mysqli_real_escape_string($con , $_POST["comment"]);
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $profile = $_SESSION['user_profile'];

    $query= "INSERT INTO comments (comment,post_id,writter_first_name,writter_last_name,writter_image) 
    VALUES ('$comment', '$post_id','$first_name','$last_name','$profile')";
    $query_run = mysqli_query($con , $query);

    if($query_run)
    if($query_run && !empty($description))
    {
    
        header("Location: ../user_pages/comments.php?id=$post_id");
    }
    else
    {
        header("Location: ../user_pages/comments.php?id=$post_id");
        
    }

}

?>