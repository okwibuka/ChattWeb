
<?php
 session_start();
 session_unset();
 session_destroy();

 header("Location: ../user_pages/login.php")

?>