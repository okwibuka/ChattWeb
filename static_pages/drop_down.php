<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .drop_down .content
    {
        position:fixed;
        right:1%;
        top:10%;
        background:lightgrey;
        color:white;
        z-index:100;
        width:10%;
        padding:4px;
        border-radius:10px;
        line-height:2;
        border-style:outset;
        
    }
    

    .drop_down .content ul
    {
        list-style-type:none;
        margin-left:-1.6em;
    }
    .drop_down .content ul li a
    {
        text-decoration:none;
        color:black; 
        font-weight:bold;
    }
    .drop_down .content ul li:first-child
    {
        border-bottom:1px solid grey;
    }
    .close
    {
        float:right;
        color:black;
        cursor:pointer;
    }
    
</style>
<body>
    <div class="drop_down">
        <div class="content">
        <i class="bi bi-x-circle close"></i>
            <ul>
                <li>
                    <a href="../user_pages/profile.php?id=<?= $user_id ?>">My Profile</a>
                </li>
                <li>
                    <a style="color:red;" href="../user_pages/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>