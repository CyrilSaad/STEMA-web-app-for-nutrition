<?php
include('./header.php');
 $username =  $_SESSION['username'];
 $query = "SELECT * FROM users WHERE username ='$username'";
 $results = mysqli_query($db, $query);
 $result = mysqli_fetch_assoc($results);
 $userId = $result['id'];

$errors = array();

$newUsername = $_POST['username'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];
$password = $_POST['password_old'];
if (isset($_POST['update_user'])) {
    if(empty($password)) { array_push($errors, "Old Password is required"); }
    if( md5($password) !=  $result['password']) { array_push($errors, "Old Password is incorrect!"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password_1)) { array_push($errors, "New Password is required"); }
    if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}
}

// echo '<body> <h1>'.$errros['password'].' </h1> </body>';
if (count($errors) == 0) {
    $newPass = md5($password_1);
    $query = "UPDATE users SET username='$newUsername', password='$newPass' WHERE id='$userId'";
    mysqli_query($db, $query);
    $_SESSION['username'] = $newUsername;
    $_SESSION['password'] = $newPass;
    $_SESSION['success'] = "Your Profile Has Been Successfully Updated!";
}
?>