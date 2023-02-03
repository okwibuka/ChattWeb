
<?php
 include("../static_pages/header.php"); ?>

<style>

nav
{
    z-index: 100;
}

 /* .icons_active
{
    color:blue;
} */
.right .container .box_two
{
    border-top:none;
}

/* ////////////////////////////////////////////////////////////// */

body
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: black;
}
.nav_container img
{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 5px;
    cursor: pointer;
}
.nav_container
{
    display: flex;
    width: fit-content;
    margin-left: 1em;
    margin-top: 7px;
    padding: 5px;
}
.search input
{
    padding: 9px;
    width: 14rem;
    border-radius: 8px;
    border: none;
    background-color: rgb(63, 58, 58);
    color: white;
}

.search i 
{
    margin-left: -2em;
    cursor: pointer;
    color: white;
}
.search input::placeholder
{
    color: white;
}

nav .icons
{
   width: fit-content;
   display: flex;
   margin-left: 21rem;
   margin-top: -3em;

}

nav .icons ul
{
    display: flex;
    justify-content: space-between;
    margin-right: 5em;
    list-style-type: none;
    width: fit-content;
}
nav .icons ul li
{
    justify-content: space-between;
    margin-right: 5em;
}
.icons i {
    font-size: 27px;
    cursor: pointer;
}

.icons_active  
{
    color: blue;
}
nav .user
{
    display: flex;
    width: fit-content;
    align-items: flex-end;
    float: right;
    margin-right:4.3em;
    margin-top: -3.7em;
}
nav .user ul
{
    display: flex;
    justify-content: space-between;
    width: 8rem;
    align-items: flex-end;
    list-style-type: none;
}
.user i {
    font-size: 27px;
    cursor: pointer;
}
.user img
{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    margin-top: -0.8em;
}
.user_profile
{
    right: 1%;
    position: fixed;
    top: 5.5%;
}
nav
{
background-color: black;
padding: 4px;
border-bottom: 1px solid white;
position: fixed;
width: 100%;
}
nav i 
{
    color: white;
}

/* end of navigation */

.section .container
{
    background-color: black;
    display: flex;
    height: 100%;
    width: 100%;
    color: white;
    position:relative;
}



/* --------------------------
left
---------------------------------- */
.section .container .left
{
    height: 100%;
    width: 20%;
    margin-top: 5em;  
    background-color: transparent;
    overflow-y: auto;
    max-height: 500px; 
    scroll-behavior: smooth;
    position:fixed;
    left:0;
    

}

.user_left_container img
{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin: 0 10px 0 20px;
}
.user_left_container
{
    display: flex;
}
.user_left_container p
{
    margin-top: 6.5px;
}
.links_left_container i
{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin: 0 10px 0 20px;
}
.links_left_container
{
    display: flex;
    flex-direction: column;
}
.links_left_container ul
{
    list-style-type: none;
    margin-left: -2.5em;
    line-height: 2;
    /* border-bottom: 1px solid rgb(226, 221, 221); */
}
.links_left_container ul li
{
display: flex;
cursor: pointer;
width: fit-content;

}
.links_left_container ul p
{
    margin-top: -8px;
}

/* ------------------------------------------------------
right
---------------------------------------------- */

.section .container .center
{
    height: 100%;
    width: 80%;
    margin-top: 5em; 
    position:absolute;
    right:0;
}
.center .container
{
display:flex;
}
.center .container .box_one
{
    background:lightgrey;
    height:300px;
    width:300px;
    border-radius:8px;
}
.center .container .box_one img
{
    width:150px;
    height:150px;
    border-radius:50%;
    text-align:center;
    margin-top:1em;
}
.center .container .box_one .names
{
    color:black;
    font-size:18px;
    margin-top:10px;
    font-weight:bold;
}
.center .container .box_two
{
    background:lightgrey;
    height:400px;
    width:600px;
    border-radius:8px;
    margin-left:10px;
}
.container .box_two .top ul
{
    list-style-type:none;
    display:flex;
    border-bottom:1px solid grey;
    
}
.container .box_two .top ul li a
{
    margin-right:2em;
    text-decoration:none;
    font-size:18px;
    color:black;
    margin-bottom:15px;
}
.container .box_two .bottom
{
    width:fit-content;
    margin-left:3em;
}
.container .box_two .bottom .details
{
    font-size:17px;
    line-height:3;
    color:indigo;
}
.container .box_two .bottom span
{
    margin-left:1em;
    color:black;
}

/* ///////////////////////////////////////////////////////// */
.loged_users .bottom p
{
    margin: 0 0 0 10px;
}
.loged_users
{
    display: flex;
    flex-direction: column;
    margin-top: 5px;
    padding: 3px;
    margin-bottom: 1em;
    width: auto;
}
.hidden
{
    display:none;
}

/* ///////////////////////////////////////////////////////////////// */


</style>

<title>home</title>

<div class="section">
    <div class="container">
<!-- ---------------------------------------left side---------------------------------------------- -->
<?php include("../static_pages/left.php"); ?>
<!-- ---------------------------------center--------------------------------------- -->
       
<div class="center">
<div class="container">
<?php 

if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con , $_GET['id']);
    $query = "SELECT * FROM users WHERE id='$id'";
    $query_run = mysqli_query($con , $query);
    $sql = mysqli_num_rows($query_run);
    if($sql > 0)
    {

        while($row = mysqli_fetch_assoc($query_run))
        {
            ?>
            <div class="box_one">
                <center>
            <img src="../profile_images/<?= $row['image']; ?>">
            <div class="names">
                <?= $row['first_name'] ?>&nbsp; <?= $row['last_name']?>
            </div>
        </center>
                </div>

                <div class="box_two">

                <div class="top">
                <ul>
                    <li><a href="" style="color:blue;"  >Over View</a></li>
                    <li><a href="edit_profile.php?id=<?=$user_id ?>">Edit Profile</a></li>
                    <li><a href="change_password.php?id=<?=$user_id ?>">Change Password</a></li>
                </ul>
                </div>

                <div class="bottom">
                <h2 style="color:indigo;">profile details</h2>
                <div class="details">
                    First name:<span><?= $row['first_name'] ?> </span>
                    <br>
                    Last:name:<span><?= $row['last_name'] ?> </span>
                    <br>
                    Email:<span><?= $row['email'] ?> </span>
                    <br>
                    Birth:<span><?= $row['birth'] ?> </span>
                </div>
                </div>

                </div>
            <?php
        }
    }

}
?>
</div>
</div>
        
 <!-- ----------------------------------------right side-------------------------------------- -->
   
<script>

// ..............................news box........................................................

const news_card = document.querySelector(".box_one_news");
const close_news_card = document.querySelector(".close_news");
const box_two = document.querySelector(".box_two");


close_news_card.addEventListener("click" ,function()
{
news_card.classList.add("hidden"); 
box_two.style.border="none";
    
})
//...........................................news box.........................................

const news_card = document.querySelector(".box_news_container");
const close_news_card = document.querySelectorAll(".close_news");
news_card.classList.add("hidden")

for(let i = 0 ; i < close_news_card.length ; i++){
    close_news_card[i].addEventListener("click", function(e){
        e.preventDefault()
        news_card.classList.add("hidden"); 
    })
}




//--------------------------------------------------------------

</script>

</body>
</html>