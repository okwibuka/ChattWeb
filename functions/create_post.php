

<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{

    $user_id = $_SESSION['login_id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $profile = $_SESSION['user_profile'];

    $description = mysqli_real_escape_string($con , $_POST["description"]);
   

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','mp4');

    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../post_images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


                //usual codes

    $query="INSERT INTO post (description,image,user_id,user_first_name,user_last_name,user_profile) 
    VALUES 
    ('$description','$fileNameNew','$user_id','$first_name','$last_name','$profile')";
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
            else
            {
        header("Location: ../user_pages/home.php ");
        exit(0);
            }

        }
        else
        {
        header("Location: ../user_pages/home.php ");
        exit(0);
        }

    }
    else
    {
        header("Location: ../user_pages/home.php ");
        exit(0);
    }


}

