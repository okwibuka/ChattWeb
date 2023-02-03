
<?php 
session_start();
include("../connection/connection.php"); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body
{
    background:whitesmoke;
}

.login_container
{
    line-height:2;
    display:flex;
    justify-content:space-around;
    margin-top:11em;
}

.left
{
margin-top:-3em;
}

.left h3
{
    color:blue;
}

.left img
{
    border-radius:50px;
   
}
.right
{
    background:white;
    width:25rem;
    padding:12px;
    border-radius: 9px;
    margin-top:-4em;
    border-style:outset;
  
}

.right form
{
    display:flex;
    flex-direction:column;
}
.right form p
{
margin-bottom:2em;
border-bottom:1px solid grey;
color:blue;
}

.right form input
{
    margin-bottom:10px;
    padding:15px;
    border-radius:10px;
    border:1px solid grey;

}
.login
{
    background:blue;
    color:white;
    font-size:15px;
    border:none;
    cursor:pointer
}
.register
{
    padding:15px;
    border-radius:10px;
    border:1px solid grey;
    background:green;
    color:white;
    font-size:15px;
    border:none;
    cursor:pointer;
}

/* ------------------------------------- sign up --------------------------------------------- */


.sign_up_container
{
    position:fixed;
    height:auto;
    left:30%;
    background:white;
    border-radius:9px;
    border-style:outset;
    z-index:100px;
    bottom:2%;
    width:30rem;
    padding:12px;
}
    .hidden
    {
        display:none;
    }
    

.sign_up_section
{
    display:flex;
    flex-direction:column;
}
.section_one
{
    display:flex;
    justify-content:space-between;
    border-bottom:1px solid grey;
}

.section_one p
{
    margin-bottom:10px;
}

.section_two
{
    display:flex;
    flex-direction:column;
    margin-top:1em;
}
.section_two .name
{
    display:flex;
    justify-content:space-between;
}

.section_two .email_password
{
    display:flex;
    flex-direction:column;
}

.section_three
{
    display:flex;
    flex-direction:column;
}

.section_four
{
    display:flex;
    justify-content:space-between;

}

.sign_up_container form input 
{
    margin-bottom:10px;
    padding:10px;
    border-radius:4px;
    border:1px solid grey;
}

.sign_up_container form .sex 
{
    margin-bottom:10px;
    padding:15px;
    border-radius:4px;
    border:1px solid grey;
    width:45%;
}

.btn_register
{

background:green;
color:white;
font-size:15px;
border:none;
cursor:pointer;
margin-top:10px;
width:30%;
}
.close
{
    cursor:pointer;
}
.image
{
    width:100%
}

    </style>

</head>
<body>
    <div class="section">

    <div class="login_container">
        <div class="left">
        <center><h3>chattApp</h3></center>
        <img src="../logo/logo.jpg" alt="">
        </div>
        
        <div class="right">

            <center>
                <?php
                if (isset($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            <center>

            <form action="../functions/login_codes.php" method="post">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input class="login" type="submit" value="Log In" name="login">
               <center> <p>Forget Password?</p> 
            </center>
            </form>
            <center>
            <button class="register">Create New Account </button>
        </center>
        </div>
    </div>
   
   <!------------------------------------- sign up --------------------------------------------->
    
   
    <div class="sign_up_container">

        <div class="sign_up_section">
            <div class="section_one">
 
            <div>
            <h2>Sign Up</h2>
            <p>it's quick and easy</p>
            </div>
            <div class="close">
                &cross;
            </div>
            </div>

            <form action="../functions/create_users.php" method="post" enctype = "multipart/form-data">

            <div class="section_two">

            <div class="name">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="email_password">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="confirm_password" required>
            </div>

            </div>

            <div class="section_three">

            <p>birth day?</p>
            <input type="date" name="birth" required>
            </div>

            <div class="gender">   
            <p>Gender?</p>
            <div class="section_four">

            <div class="sex">
            Male <input type="radio" name="sex[]" id="" value="male" required>
            </div>
            <div class="sex">
            Female <input type="radio" name="sex[]" id="" value="female" required>
            </div>

            </div>
            </div>
            <div>
                <p>image?</p>
                <input type="file" name="file" class="image">
                <input type="hidden" name="user_type" value="user">
            </div>

            <center>
            <input type="submit" name="submit" class="btn_register">
        </center>

            </form>

        </div>

</div>
</div>

<script src="../java/script.js"></script>


</body>
</html>