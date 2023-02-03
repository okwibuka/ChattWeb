


<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{
    $first_name = mysqli_real_escape_string($con , $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($con , $_POST["last_name"]);
    $email = mysqli_real_escape_string($con , $_POST["email"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($con , $_POST["confirm_password"]);
    $birth = mysqli_real_escape_string($con , $_POST["birth"]);
    $gender = mysqli_real_escape_string($con , $_POST["sex"]);
    $user_type = mysqli_real_escape_string($con , $_POST["user_type"]);

    $hashed_password = password_hash($password , PASSWORD_DEFAULT);

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
                $fileDestination = '../profile_images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


                //main codes

                $test = "SELECT * FROM users WHERE email='$email'";
                $test_query = mysqli_query($con , $test);
                $sql = mysqli_num_rows($test_query);

                if($sql>0)
                {
                    $_SESSION['message'] = '<span style="color:red">email already exist!</span>';
                    header("Location: ../user_pages/login.php");
            
                    }
                    else if($password != $confirm_password)
                    {
                        $_SESSION['message'] = '<span style="color:red">password not match!</span>';
                        header("Location: ../user_pages/login.php");
                    }
                    else
                    {
                $query = "INSERT INTO users (first_name,last_name,email,password,birth,sex,image,user_type) 
                VALUES 
                ('$first_name','$last_name','$email','$hashed_password','$birth','$gender','$fileNameNew','$user_type')";
                $query_run = mysqli_query($con,$query);
            
                if($query_run)
                {
                    $_SESSION['message'] = '<span style="color:green">created successfully!</span>';
                    header("Location: ../user_pages/login.php");
            
                }
            
                    }


            }
            else
            {
         $_SESSION['message'] = " <span style='color:red'>file is too big</span>";
        header("Location: ../user_pages/login.php");
        exit(0);
            }

        }
        else
        {
        $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
        header("Location: ../user_pages/login.php");
        exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>image file not allowed</span>";
        header("Location: ../user_pages/login.php");
        exit(0);
    }


}

    

?>
                    
 

