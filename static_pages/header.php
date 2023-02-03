
<?php 
session_start();
include("../connection/connection.php");
if(! $_SESSION['auth'])
{
    header("Location: login.php");
}

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$profile = $_SESSION['user_profile'];
$user_id =  $_SESSION['login_id'];
$user_email = $_SESSION['email'];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <nav>
        <div class="nav_container">
        <div>
        <a href="home.php">
        <img src="../logo/logo.jpg">
        </a>
        </div>
        <div class="search">
        <input type="search" name="" placeholder="search">
        <i class="bi bi-search"></i>
        </div>
        </div>

        <div class="icons">
            <ul>
                <a href="home.php"><li> <i  style="color:grey;" class="bi bi-house-fill"></i></li></a>
                <a href="news.php"> <li> <i  style="color:grey;" class="bi bi-newspaper"></i></li></a>
                <!-- <li> <i  style="color:grey;" class="bi bi-shop"></i></li> -->
                <a href="groupChat.php?id=<?= $user_id ?>"><li> 
                    <i  style="color:grey;" class="bi bi-people-fill"></i></li></a>
            </ul>
        </div>
        <div class="user">
            <ul>
            <li> <i style="color:grey;opacity:0;" class="bi bi-three-dots"></i></li>
                <a href="all_messagees.php?id=<?= $user_id ?>"><li> <i style="color:grey;" class="bi bi-chat-dots"></i></li></a>
                <!-- <li> <i style="color:grey;" class="bi bi-bell"></i></li> -->
            </ul>
            <div class="user_profile">
                <img src="../profile_images/<?= $profile; ?>" alt="">
                </div>
        </div>
    </nav>
    <?php include("drop_down.php") ?>
</head>
<style>
    .left ul li a
    {
        color:white;
        text-decoration:none;
    }
    /* .user_profile:hover > .drop_down
    {
        opacity:1;
        visibility:visible;
    } */
    .hidden
    {
        display:none;
    }
</style>
    

<body>
    <script>
const drop_down= document.querySelector(".drop_down");
const user_profile = document.querySelector(".user_profile");
const close_drop_down = document.querySelector(".close");

drop_down.classList.add("hidden");

user_profile.addEventListener("mouseenter" ,function()
{
    drop_down.classList.remove("hidden");

})

close_drop_down.addEventListener("click" ,function()
{
    drop_down.classList.add("hidden");

})
    </script>
    
