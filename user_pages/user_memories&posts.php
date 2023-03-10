


<?php include("../static_pages/header.php"); 
?>

<style>

nav
{
    z-index: 100;
}

 /* .icons_active
{
    color:blue;
} */

/* //////////////////////////////////////////////// */


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
}


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
.links_left_container .targets
{
border-top: 1px solid rgb(226, 221, 221);

}
.links_left_container .targets a
{
margin-bottom:5px;
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
    border-radius: 6px;
    justify-content: center;
    text-align: center;
    margin-left: 3em;
    margin-bottom: 15px;
    z-index:1;
    max-height:300px;
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
.right .container .box_one .card .card_body p
{
white-space: wrap;
overflow: hidden;
text-overflow: ellipsis;
}
/* ---------------------------------------- */

.box_two .container .top
{
    display: flex;
    justify-content: space-around;
    height: fit-content;
    margin-top: 10px;
    margin-right:-20px;
}
.box_two .container .top p
{
    margin-top: 0px;
    margin-left:20px;
 
}
.box_two .container .top .contact_icons
{
    margin-right: 8em;
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

.loged_users
{
    margin-bottom:5em;
    display: flex;
    flex-direction: column;
    margin-top: 5px;
    padding: 15px;
    margin-bottom: 1em;
    width: auto;

}
.loged_users .bottom a
{
    color:white;
    text-decoration:none;
}

.section .container .right
{
    position:fixed;
    right:0; 
    overflow:hidden;
    width:33%;
}


.right .container
{
    overflow-x:hidden;
    overflow-y:hidden;
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
}

.right .container .box_one a p{
    color:black;
    text-decoration:underline;
    font-family:italic;
}

.contact_icons form
{
display:flex;
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
    width:45%;

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
    /* note */
    white-space: wrap;
  overflow: hidden;
  text-overflow: ellipsis;
  /* note */
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

.like_btn a
{
    cursor:pointer;
    color:white;
    text-decoration:none;
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


/* -----------create_post---------- */

.create_img_post_container
{

    background:black;
    position:fixed;
    height:auto;
    left:27.6%;
    border-radius:9px;
    border-style:outset;
    z-index:100px;
    bottom:6%;
    width:30rem;
}

.create_img_post_container .card .card_header
{
    
    margin-top:-10px;
}

.create_img_post_container .card .card_header .close_img_post
{
    float:right;
    margin-top:-2.8em;
    cursor:pointer;
    margin-right:13px;
}
.create_img_post_container .card .card_body img
{
width:30px;
height:30px;
border-radius:50%;
margin-right:5px;
}

.create_img_post_container .card .card_body p
{
    margin-top:5px;
}
.create_img_post_container .card .card_body .owner
{
    display:flex;
    margin-left:10px;
}

.create_img_post_container .card .card_body form 
{
    display:flex;
    flex-direction:column;
}
.create_img_post_container .card .card_body h4
{
    margin-left:10px;
}

.create_img_post_container .card .card_body form button
{
background:green;
color:white;
font-size:15px;
border:none;
cursor:pointer;
margin-top:10px;
width:30%;
padding:15px;
border-radius:4px;
border:1px solid grey;
}
.create_img_post_container .card .card_body textarea
{
    background:black;
    color:white;
    font-size:17px;
}

.img_upload
{
    margin-bottom:8px;
    margin-left:13px;
}

/* comments_container */

.view_comments_btn
{
    cursor:pointer;
}

.comments_container
{
    background:black;
    position:fixed;
    height:70%;
    overflow-y:scroll;
    left:27.6%;
    border-radius:9px;
    border-style:outset;
    z-index:100px;
    top:15%;
    width:30rem;
    overflow-x:hidden;
    padding:1em;
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
    background:grey;
    width:100%;
    height:auto;
    border-radius:10px;
    margin-top:-12px;
    padding:5px;
}
.comments_container .card_body img
{
    border-radius:50%;
    width:30px;
    height:30px;
}
.comments_user_info
{
    display:flex;
}
.comments_user_info p
{
    margin-left:2px;
}

.comments_container .card_container
{
    display:flex;
    flex-direction:column;
    height:auto;
}
/* create_mesage */

.write_message
{
    background:black;
    position:fixed;
    height:auto;
    left:44.6%;
    border-radius:9px;
    border-style:outset;
    z-index:100px;
    bottom:13%;
    width:20rem;
}

.message_user_info
{
    display:flex;
}
.message_user_info img
{
    width:30px;
    height:30px;
    border-radius:50%;
}
.write_message form
{
display:flex;
flex-direction:column;
}
.write_message form button
{
    padding:5px;
    width:20%;
    background:blue;
    cursor:pointer;
    color:white;
    border-radius:6px;
    margin-top:5px;
    border:none;
}
.write_message form textarea
{
height:10em;
border:none;
border-radius:10px;
background:whitesmoke;
color:black;
}
.write_message .card_header h4
{
    border-bottom:1px solid grey;
}
.box_two .container .loged_users
{
    max-height:200px;
    overflow-y:hidden;
    overflow-x:hidden;
}
.box_two .container .loged_users:hover
{
    overflow-y:scroll;
}
.edit_delete
{
    display:flex;
    justify-content:space-around;
}
.edit_delete .delete
{
    margin-top:-14px;
}
.edit_delete_btn
{
    background:blue;
    border-radius:10px;
    color:white;
    border:none;
    cursor:pointer;
    height:30px;
}
.edit_btn
{
background:green;
}
.delete_btn
{
    background:red;
}
</style>



<title>home</title>

<div class="section">
    <div class="container">
<!-- ---------------------------------------left side---------------------------------------------- -->
<?php include("../static_pages/left.php"); ?>
<!-- ---------------------------------center--------------------------------------- -->
       

<div class="center">
    <center>
    <div class="content">
            <div class="section_one">
            <img src="../profile_images/<?= $profile; ?>">
            <p>your Blog Posts</p>
        </div>


        
        <div class="posts_card_container">
        
<!--///////////////////// .....................................card...................................../////////////////// -->
<?php

$query = "SELECT * FROM post WHERE user_id='$user_id' ORDER BY created_at DESC";
$query_run = mysqli_query($con , $query);
$sql = mysqli_num_rows($query_run);

if($sql > 0)
{
    while($row = mysqli_fetch_assoc($query_run))
    {
        $_SESSION['post_id'] = $row['id'];
        ?>


<div class="card post_card">

<div class="card_header">

<div class="left">
<div><img src="../profile_images/<?= $row['user_profile']; ?>"></div>
<div class="auth"><h4><?= $row['user_last_name']; ?> &nbsp; <?= $row['user_first_name'] ?></h4>
<p><?= $row['created_at']; ?></p></div>
</div>


</div>


<div class="card_body" >

<div class="title">
        <span>
        <?= $row['description']; ?>
</span>
    </div>
<img src="../post_images/<?= $row['image'] ?>" alt="">

<!-- --------------------------------------comments & likes--------------------------------------- -->

<div class="numbers_view">
<!-- /////////////////////////////---------likes_numbers--------//////////////////////////////////////// -->
<?php
$post_id = $_SESSION['post_id'];
$sqltwo = "SELECT * FROM likes WHERE post_id='$post_id'";
$sqltwo_run = mysqli_query($con , $sqltwo);
$selecttwo = mysqli_num_rows($sqltwo_run);
if($selecttwo>0)
{
    
        ?>
<div class="likes_comments_number likes_number">
    <span>
<i class="bi bi-hand-thumbs-up"></i>
<i class="bi bi-heart"></i>
</span>
&nbsp;
<span><?php echo $selecttwo; ?></span>
</div>

<?php
}
else
{
    ?>
<div class="likes_comments_number likes_number">
    <span>
<i class="bi bi-hand-thumbs-up"></i>
<i class="bi bi-heart"></i>
</span>
&nbsp;
<span><?php echo 0 ?></span>
</div>

    <?php
}
?>
<!-- /////////////////////---------comments_numbers------------///////////////////// -->
<?php
$post_id = $_SESSION['post_id'];
$sql = "SELECT * FROM comments WHERE post_id='$post_id'";
$sql_run = mysqli_query($con , $sql);
$select = mysqli_num_rows($sql_run);
if($select>0)
{
    
        ?>
        
    
<div class="likes_comments_number comments_number">
    <span><i class="bi bi-chat-left"></i></span>
    <span><?php echo $select; ?></span>

</div>

        <?php
    
}
else
{
    ?>
<div class="likes&comments_number comments_number">
<span><i class="bi bi-chat-left"></i></span>
<span><?php echo 0 ?></span>
</div>

    <?php
}
?>
<!-- ////////////////////////----------end of numbers---------------///////////////////////// -->
</div>



 <!-- -------------------------comments and likes view-------------------------------------- -->
<div class="like_comment_post">
    <div class="likes like_btn">
    <a href="likes.php?id=<?=$row['id'];?>"> <span>view all Like</span>
</a>
    </div>
</div>

 <a href="comments.php?id=<?=$row['id'];?>" style="text-decoration:none;"><p class="view_comments_btn" 
 style="color:white;margin-top:10px;text-decoration:none;">view all comments</p></a>
 
 <center>
<div class="edit_delete">
   
    <div class="delete">
    <form action="../functions/user_delete_post.php?id=<?=$row['id'];?>" method="post">
    <input type="submit" value="delete" name="delete_post" class="edit_delete_btn delete_btn">
    </form>
    </div>
</div>
</center>
<!------------------------------------- end of view-------------------------------------------------------------->

    </div>
    </div>

        <?php
    }
}
else
{
    echo " <span style='margin-top:2em;color:red;'>you have no post</span>";
}
?>

<!--//////////////------------------------------------------------end of card------------------------------////////////// -->

</div>
</div>
</center>
</div> 


     

        
 <!-- ----------------------------------------right side-------------------------------------- -->
    <div class="right">
        <div class="container">
    <div class="box_two">
    <div class="container">
        <div class="top">
            <p>Contacts</p>
            <div class="contact_icons">
            <!-- <form action="search_user.php" method="post">
            <input type="text" name="search" placeholder="search">
           <button type="submit" name="submit"><i  style="color:grey;" class="bi bi-search">
        </i></button> 
           </form> -->
            </div>
        </div>
        <div class="loged_users">
        

            <?php
            $query = "SELECT * FROM users WHERE id != '$user_id' && user_type!='admin' order by created_at desc";
            $query_run = mysqli_query($con , $query);
            $sql = mysqli_num_rows($query_run);
            if($sql > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <div class="bottom">
                    <a href="messages.php?id=<?= $row['id'] ?>"><img src="../profile_images/<?= $row['image']; ?>" alt="">
                    <p><?= $row['last_name'];?> &nbsp; <?= $row['first_name'];?> 
                    </a>
                    </p>

                </div>
                    <?php
                }
            } 
            else
            {
                echo "no user found";
            }

            ?>
            
        </div>

        <?php
        ?>
    </div>
</div>
</div>
    </div>
<!-----------------------------------------------create_post ------------------------------------ -->


<script>

// ------------------------------create post----------------------------------------

const create_img_post_container = document.querySelector(".create_img_post_container");
const create_img_post = document.querySelector(".create_img_post");
const close_img = document.querySelector(".close_img_post");

create_img_post_container.classList.add("hidden");

create_img_post.addEventListener("click" ,function()
{
    create_img_post_container.classList.remove("hidden");

})

close_img.addEventListener("click" ,function()
{
create_img_post_container.classList.add("hidden"); 
    
})

// ..............................news box........................................................

const news_card = document.querySelector(".box_one_news");
const close_news_card = document.querySelector(".close_news");
const box_two = document.querySelector(".box_two");


close_news_card.addEventListener("click" ,function()
{
news_card.classList.add("hidden"); 
box_two.style.border="none";
    
})
//...........................................comments box.........................................

const comments_card = document.querySelector(".comments_container");
const close_comments_card = document.querySelector(".close_comment_container");
const open_comments_card = document.querySelectorAll(".view_comments_btn");


comments_card.classList.add("hidden");


for(let i = 0 ; i < open_comments_card.length ; i++){
    open_comments_card[i].addEventListener("click", function(e){
        e.preventDefault()
        comments_card.classList.remove("hidden"); 
    })
}


close_comments_card.addEventListener("click" ,function()
{
comments_card.classList.add("hidden"); 
    
})


//--------------------------------------------------------------

</script>

</body>
</html>