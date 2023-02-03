

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
    background:grey;
   width:fit-content;
   height:fit-content;
   margin-right:auto;
   margin-left:auto;
   margin-top:5em;
   padding:1em;
   border-radius:10px;
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
    background:blue;
    width:70%;
    height:auto;
}

</style>
<body>
    <div class="container">

            <?php include("static_left.php") ?>

            <div class="right">
            </div>

    </div>
</body>
</html>