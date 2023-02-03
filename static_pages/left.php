<div class="left">
    
<a style='color:white;text-decoration:none;' 
href="../user_pages/profile.php?id=<?= $user_id ?>">
<div class="user_left_container">
    <img src="../profile_images/<?= $profile; ?>">
    <p><?= $last_name; ?> &nbsp; <?= $first_name ?></p>
    </div>
</a>
    <div class="links_left_container">
       <ul>
           <!-- <li>
       <i style="color:blue;" class="bi bi-people"></i>
       <p>Friends</p>
           </li> -->
           <li>
           <i style="color:brown;" class="bi bi-people-fill"></i>
           <a href="groupChat.php?id=<?= $user_id?>"><p>Group chat</p></a>
           </li>
           <li>
           <i  style="color:indigo;" class="bi bi-calendar"></i> 
          <a href="user_memories&posts.php"><p>Manage your posts</p></a>
           </li>
       </ul>
    </div>
   </div>