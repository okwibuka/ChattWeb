


<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{

    $user_id = $_SESSION['login_id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $profile = $_SESSION['user_profile'];
    $title = mysqli_real_escape_string($con , $_POST["title"]);
    $body = mysqli_real_escape_string($con , $_POST["body"]);
   

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../news_images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


                //usual codes

    $query="INSERT INTO news (title,body,user_id,user_first_name,user_last_name,user_profile,post_image) VALUES 
    ('$title','$body','$user_id','$first_name','$last_name','$profile','$fileNameNew')";
    $query_run = mysqli_query($con , $query);
    
    if($query_run && !empty($body))
    {
    
        $_SESSION['message'] = "<p style='color:green'>post created<p>";
        header("Location: ../admin_pages/create_news.php");
    }
    else
    {
        $_SESSION['message'] = " <p style='color:red'>fill in the body</p>";
        header("Location: ../admin_pages/create_news.php");
        exit(0);
    }

            }
            else
            {
         $_SESSION['message'] = " <p style='color:red'>file is too big</p>";
        header("Location: ../admin_pages/create_news.php");
        exit(0);
            }

        }
        else
        {
        $_SESSION['message'] = " <p style='color:red'>error occured in uploading</p>";
        header("Location: ../admin_pages/create_news.php");
        exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = " <p style='color:red'>image file not allowed</p>";
        header("Location: ../admin_pages/create_news.php");
        exit(0);
    }


}

    

