<?php
    session_start();
    include('config.php');
    $recipient = $_POST['email-recipient']; 
    $query = "SELECT password FROM users WHERE email='$recipient'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result)
$subject = "Stema Password Reset";
$message = "Your password: .\n";
$message .=  "<b>". $user['password']. "</b>"
$headers = "From: Stema <cyrilsaaad@gmail.com>\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n" ; 
mail($recipient, $subject, $message, $headers);
?>
