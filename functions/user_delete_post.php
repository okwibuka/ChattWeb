<?php
session_start();
include("../connection/connection.php");

if(isset($_GET['id']))
{
if(isset($_POST["delete_post"]))
{
    $id = mysqli_real_escape_string($con , $_GET['id']);
    $query = "DELETE FROM post WHERE id='$id'";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
        header("Location: ../user_pages/user_memories&posts.php");
    }
}
}
?>