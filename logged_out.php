<?php 

include 'random.php';

if(isset($_SESSION['success'])) {
  session_destroy(); 
    unset($_SESSION['success']);
    header('location:logged_in.php?login=logged_out');
}
?>