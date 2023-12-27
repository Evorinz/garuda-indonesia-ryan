<?php
    session_start();
    include("../conn/connection.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = hash('sha256', $_POST['password']);
        
        $sql = "SELECT * FROM tbl_login_admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard/index.php");
            exit();
        } else {
            echo "<script>alert('Username atau password Anda salah. Silakan coba lagi!'); window.location.href='login.php'</script>";
        }
    }

?>