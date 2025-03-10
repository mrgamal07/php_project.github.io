<?php
include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        header("location:index.php?error=user name is required");
        exit();
    } else if (empty($password)) {
        header("location:index.php?error=password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name = '$username'AND password ='$password' ";
        $result = mysqli_query($conn, $sql);
    }
    
    if (mysqli_num_rows($result) == 1) {
        echo "hello";
    }
} else {
    header("location:index.php?");
    exit();
}
