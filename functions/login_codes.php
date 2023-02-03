


<?php
session_start();
include("../connection/connection.php");


if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con , $_POST["email"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);

    $query = "SELECT * FROM users where email = '$email' limit 1";
    $query_run = mysqli_query($con , $query);

    if($query_run && mysqli_num_rows($query_run) > 0)
    {
        
       while( $result  = mysqli_fetch_assoc($query_run))
       {
        if(password_verify($password , $result["password"]))
        {
            
            if($result['user_type'] === 'user')
            {

                $_SESSION['auth'] = true;
                $_SESSION['login_id'] = $result['id'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['user_profile'] = $result['image'];
                $_SESSION['email'] = $result['email'];
                header('Location: ../user_pages/home.php');

            

            }
            else if($result['user_type'] === 'admin')
            {
                $_SESSION['auth'] = true;
                $_SESSION['login_id'] = $result['id'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['user_profile'] = $result['image'];
                $_SESSION['email'] = $result['email'];
                header('Location: ../admin_pages/dashboard.php');
                
            }
        }
        else
        {
    
            $_SESSION['message'] = '<span style="color:red;">wrong email or password</span>';
            header("Location: ../user_pages/login.php");
        }
        
}

}
        else{
            $_SESSION['message'] = '<span style="color:red;">wrong email or password</span>';
             header("Location: ../user_pages/login.php");
            
    }


}

?>
