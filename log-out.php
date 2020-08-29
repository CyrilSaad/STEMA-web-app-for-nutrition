<?php include('login.php'); 
if (isset($_SESSION['loggedin']) && $_SESSION['username'] ) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("location: home.php");
}
?>