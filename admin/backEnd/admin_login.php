<?php
    session_start();

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $mysqli = new mysqli("mysql.eecs.ku.edu", "t828n219", "se4ahqu3", "t828n219");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $admin_user = $_POST["username"];
    $admin_password = $_POST["password"];

    $result = mysqli_query($mysqli, "SELECT * FROM Project_Admins WHERE username='$admin_user' AND password='$admin_password';");

    // Login credentials are valid
    if (mysqli_num_rows($result)){
        // set session
        $_SESSION['admin_id'] = $admin_user;
        header('Location: ../admin_dashboard.php');
    }
    else{
      echo "Error: invalid admin username/password";
    }

    $mysqli->close();

?>
