<?php
require('../connection/config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if ($email != "" && $password != "") {
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $row = $result->fetch_assoc();
            //Starting session of the admin 
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            echo header("Location: ../home.php?msg=login_success");
        } else {
            echo header("Location: ../index.php?msg=login_failed");
        }
    } else {
        echo "All fields are necessary.";
        header('Refresh: 1; url=../index.php');
    }
}
?>
