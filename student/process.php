<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to dashboard page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

// Include database_conn file
require_once "database_conn.php";
$userErr = $err = $erpass = "";
$user = $pass = "";
$user = $pass = false;
if (isset($_POST["submit"])) {
    extract($_POST);
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM student_m where username='$user' and Password='md5($pass)'");
    $numrows=mysqli_num_rows($sql);
        if ($numrows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }

            if ($user == $dbusername && $pass == $dbpassword) {
                session_start();
                $_SESSION['sess_user'] = $user;

                /* Redirect browser */
                header("Location: dashboard.php");
            }
        } else {
            echo "Invalid username or password!";
        }
    }
     else {
        echo "All fields are required!";
    }
    
}
?>