




<?php include("../static_pages/header.php"); ?>

<style>

nav
{
    z-index: 100;
}

 /* .icons_active
{
    color:blue;
} */

/* ////////////////////////////////////////////////// */

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

.section .container
{
    background-color: black;
    display: flex;
    height: 100%;
    width: 100%;
    color: white;
}

/* end of navigation */



/* --------------------------
left
---------------------------------- */
.section .container .left
{
    height: 100%;
    width: 22%;
    margin-top: 6em;  
    background-color: black;
    overflow-y: auto;
    max-height: 500px; 
    scroll-behavior: smooth;
    

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

.section .container .left 
{
position:fixed;
overflow:hidden;
}

.section .container .left:hover
{
    /* overflow-y:scroll;   */
}

/* ------------------------------------------------------
right
---------------------------------------------- */
.section .container .right
{
    background-color: transparent;
    height: 100%;
    width: 33%;
    margin-top: 5em;
    overflow-y: scroll;
}

.right .container
{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    background-color: transparent;
    margin-bottom: 13px;
}
.right .container .box_one
{
    background-color: rgb(64, 59, 59);
    width: 70%;
    height: auto;
    border-radius: 6px;
    justify-content: center;
    text-align: center;
    margin-left: 3em;
    margin-bottom: 15px;
}
.right .container .box_one .card .card_title
{
display: flex;
width: 100%;
justify-content: space-around;  
}
.right .container .box_one .close
{
    cursor: pointer;
}
.right .container .box_one .card .card_title p
{
    margin-top: -3px;
}
.right .container .box_one .card .card_body img
{
    border-radius: 8px;
    width: 90%;
    height: 10rem;
}
.right .container .box_one .card
{
    
    width: auto;
    height: fit-content;
   padding: 5px;

}
.right .container .box_one .card .card_body a
{
    cursor: pointer;
    color: white;
}

/* ---------------------------------------- */

.right .container .box_two
{
    border-top: 1px solid whitesmoke;
}
.box_two .container .top
{
    display: flex;
    justify-content: space-around;
    height: fit-content;
    margin-top: 10px;
}
.box_two .container .top p
{
    margin-top: 0px;
 
}
.box_two .container .top .contact_icons
{
    margin-right: 4em;
    display: flex;
    width: 7em;
    justify-content: flex-start;
    cursor: pointer;
}
.box_two .container .bottom img
{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}
.box_two .container .bottom
{
    display: flex;
    width: 97%;
    margin-left: 27px;
    height: fit-content;
    margin-top: 10px;
    
}
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
.section .container .right
{
    position:fixed;
    right:0; 
    overflow:hidden;
    width:27%;
}


.right .container
{
    overflow-x:hidden;
    overflow-y:hidden;
}
.right .container:hover
{
    overflow-y:scroll;
}

.right .container .box_two .container
{
    overflow:hidden;
}

.right .container .box_one
{
    background:LightGray;
    color:black;
    overflow:hidden;
    display:none;
    
}

.right .container .box_one a p{
    color:black;
    text-decoration:underline;
    font-family:italic;
}
.right .container .box_two
{
    border-top:none;
}


.loged_users
{
    margin-bottom:5em;
    display: flex;
    flex-direction: column;
    margin-top: 5px;
    padding: 3px;
    margin-bottom: 1em;
    width: auto;

}
.loged_users .bottom a
{
    color:white;
    text-decoration:none;
}

.contact_icons form
{
display:flex;
margin-left:-20px;
}
 .contact_icons form input
{
   background:black;
   color:white;
   padding:5px;
   border:1px solid grey;;

}
 .contact_icons form button
{
  cursor:pointer;
  background:none;
}

/* ------------------------------------------------------
center
---------------------------------------------- */

.section .container .center
{
    height: 100%;
    width: 45%;
    margin-top: 5em;
}

.section .container .center
{
    border-radius:10px;
    padding:1em;
    position:relative;
    left:22%;
    margin-top:2em;
    width:51%;

}

.section .container .center .content
{
    background:transparent;
    width:80%;
    height:auto;
    justify-content:center;    
}

.section .center .content .section_one
{
display:flex;
height:auto;
margin-top:1em;
background:transparent;
padding:2em;
border-radius:13px;

}

.section .center .content .section_one p
{
background:grey;
color:black;
font-weight:bold;
cursor:pointer;
padding:5px;
border-radius:13px;
border:none;
margin:0 0 -7px 6px;
width:90%;
height:30px;
}

.section .container .center .section_one img
{
    width:30px;
    height:30px;
    border-radius:50%;
    margin-top:5px;
}
   
.section .container .center .content .posts_card_container
{
 display:flex;
flex-direction:column;
margin-top:-2em;  
justify-content:space-between;

}
.section .container .center .content .card
{
height:auto;
margin-top:1em;
background:#454545;
border-radius:5px;
margin-bottom:auto;

}

.section .container .center .content .posts_card_container .card_header img
{
    border-radius:50%;
    width:30px;
    height:30px;
}
.section .container .center .content .posts_card_container .card_header .left
{
    display:flex;
    overflow:hidden;
    width:60%;
    background:transparent;
    margin-top:13px;
    height:fit-content;
    float:left;
    margin-left:1em;
    position:absolute;
    
   
   
}
.section .container .center .content .posts_card_container .card_header .left p
{
    margin-top:-1.4em;
    color:grey;
    float:left;
}
.section .container .center .content .posts_card_container .card_header .left h4
{
    color:whitesmoke;
}

.section .container .center .content .posts_card_container .card_header .left .auth
{
margin-top:-1em;
margin-left:10px;
}


.section .container .center .content .posts_card_container .card_header  span
{
    
    cursor:pointer;
    color:white;
    float:right;
    margin-right:1em;
    margin-top:13px;
    
} 


.section .container .center .content .posts_card_container .card_body img
{
    width:100%;
    height:28rem;
    margin-top:3em;
}

.section .container .center .content .posts_card_container .card_body .title
{
    width:100%;
    height:auto;
    margin-top:5em;
    margin-bottom:-2em;
}

 .numbers_view
{
    display:flex;
    margin-top:2.4em;
    justify-content:space-between;
    
}

.numbers_view .comments_number
{
margin-right:14px;
}

.numbers_view .likes_number
{
margin-left:14px;
}

.like_comment_post
{
    margin-top:4px;
    border-top:1px solid white;
    border-bottom:1px solid white;
    display:flex;
    padding:7px;
    justify-content:space-around;
    margin-top:8px;
}

 .center .content form
{
    display:flex;
    margin-top:14px;
}

.center .content form textarea
{
    border-radius:10px;
    margin-top:-4px;
    width:80%;
    margin-left:3em;
}
.center .content form button
{
    background:blue;
    border-radius:10px;
    color:white;
    margin-left:-3.2em;
    border:none;
    cursor:pointer;
    margin-top:-1px;
    height:30px;
} 

.hidden
{
    display:none;
}


/* comments_container */

.view_comments_btn
{
    cursor:pointer;
}

.comments_container
{
    border-radius:10px;
    padding:1em;
    position:absolute;
    left:28%;
    margin-top:2em;
    background:black;
    height:70%;
    overflow-y:scroll;
    border-radius:9px;
    border-style:outset;
    z-index:100px;
    top:15%;
    width:30rem;
    overflow-x:hidden;
    padding:1em;
    border:none;
    
}
.comments_container .card_header
{
    margin-top:-1.8em;
    border-bottom:1px solid grey;
}
.comments_container .card_body
{
    margin-top:10px;
}

.close_comment_container
{
    cursor:pointer;
    float:right;
    margin-top:-2.4em;
    margin-right:1.5em;
}
.card_body .comment_text
{
    width:100%;
    height:auto;
    border-radius:10px;
    margin-top:-12px;
    padding:5px;
    font-weight:bold;
    font-family:italic;
    color:grey;
}

.comments_user_info
{
    display:flex;
}
.comments_user_info p
{
    margin-left:9px;
    font-weight:bolder;
    margin-top:0;
}

.comments_user_info span i
{
color:white;
text-align:center;
border-radius:50%;
width:30px;
height:30px;
background:blue;
color:white;
text-align:center;
padding:5px;
    
}

.comments_container .card_container
{
    display:flex;
    flex-direction:column;
    height:auto;
}
.create_comment form
{
    display:flex;
    flex-direction:row;
    width:20%;
    justify-content:space-between;
}
.create_comment form img
{
    width:30px;
    height:30px;
    border-radius:50%;
}
.create_comment form textarea
{
height:6em;
border:none;
border-radius:10px;
background:whitesmoke;
color:black;
}


.create_comment form button
{
    padding:5px;
    width:60%;
    background:blue;
    cursor:pointer;
    color:white;
    border-radius:6px;
    border:none;
}

  
</style>

<title>home</title>

<div class="section">
    <div class="container">
<!-- ---------------------------------------left side---------------------------------------------- -->
<?php include("../static_pages/left.php"); ?>
<!-- ---------------------------------center--------------------------------------- -->
       


     
<div class="comments_container">
    <div class="card">
    
    <?php

    if(isset($_GET['id']))
{

    $profile = $_SESSION['user_profile'];
    $id = mysqli_real_escape_string($con ,$_GET['id']);

    ?>

<div class="create_comment">
<form action="../functions/create_like.php?id=<?=$id ?>" method="post">
    <img src="../profile_images/<?= $profile ?>">
    <button class="send_comment" id="send_comment" name="submit">
    <i class="bi bi-hand-thumbs-up"> </i></button>
    </form>
</div>

    <?php

}
    ?>

    <div class="card_container">
        <?php
        
        if(isset($_GET['id']))
        {
        
            $post_id = mysqli_real_escape_string($con , $_GET['id']);
            $query = "SELECT * FROM likes WHERE post_id='$post_id' ORDER BY created_at DESC";
            $query_run = mysqli_query($con , $query);
            $sql = mysqli_num_rows($query_run);
            if($sql > 0)
            {
                while($rows = mysqli_fetch_assoc($query_run))
                {
                    ?>           
    

    <div class="card_body">
    <div class="comments_user_info">
    <span><i class="bi bi-hand-thumbs-up"> </i></span>
    <p><?= $rows['user_last_name'];?>&nbsp;<?= $rows['user_first_name'];?></p>
    </div>
    </div>
                    <?php
                }
            }
            else
            {
                echo "<span color='white'> no like found</span>";
            }
        }
        ?>


    </div>

    </div>
</div>

        
<!----------------------------------------------------------------------------------- -->
 
</div>
</div>

</body>
</html>