<?php
session_start();
include("../connection/connection.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
body
{
    background:transparent; 
    padding:0;
    margin:0;
    border-radius:border-box;
}
.container
{
    display:flex;
    flex-direction:row;
    width:100%;
    height:100%;
}
.left
{
    background:black;
    width:30%;
    height:auto;
    color:white;
}
.left .container
{
    background:black;
   width:fit-content;
   height:fit-content;
   margin-right:auto;
   margin-left:auto;
   margin-top:5em;
   padding:1em;
   border-radius:10px;
   border:1px solid white;
}
.left .container .lists
{
    margin:auto;
}
.left .container .lists ul
{
    list-style-type:none;
    line-height:2;
}
.left .container .lists ul li
{
    border-bottom:1px solid white;
}
.left .container .lists ul li a
{
    text-decoration:none;
    cursor:pointer;
    text-transform:uppercase;
    color:white;
}

/* /////////////////////////////////////////////////// */
.right
{
    background:black;
    width:70%;
    height:auto;
}
.right form
{
    display:flex;
    flex-direction:column;
    color:white;
    background:black;
    width:40%;
    height:auto;
    margin:auto;
    margin-top:3em;
    border:1px solid white;
    padding:1em;
}
.right form textarea
{
    background:black;
    border: 1px solid grey;
    border-radius:8px;
    margin-bottom:10px;
    color:white;
}
.right form input,p
{
    background:black;
    border: 1px solid grey;
    border-radius:8px;
    color:white;
    padding:1em;
    margin-bottom:10px;
}
.right form label
{
    font-size:2em;
}
.right form button
{
    background:blue;
    border:none;
    border-radius:8px;
    color:white;
    padding:1em;
    margin-top:8px;
    cursor:pointer;
}
 p
{
    text-align:center;
    margin-bottom:-3em;
    border:none;
}

</style>
<body>
    <div class="container">

            <?php include("static_left.php") ?>

            <div class="right">
            <?php
                if(isset($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>

                <form action="../admin_functions/create_news.php" method="post" 
                enctype = "multipart/form-data">
                
                    <label for="title">title</label>
                    <textarea name="title" cols="30" rows="5">
                    </textarea>
                    <label for="body">body</label>
                    <textarea name="body" id="" cols="30" rows="10">
                    </textarea>
                    <input type="file" name="file">
                    <button name="submit">post</button>
                </form>
            </div>

    </div>
</body>
</html>