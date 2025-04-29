<?php
    $login = false;
    $showerror = "true";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        include '_dbconn.php';
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM `users` where user_email = '$email'";
        $result = mysqli_query($conn, $sql); 
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($pass, $row['password']))
            {    
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $email;
                echo "<script>alert('Login successful!'); window.location.href = 'http://localhost/HORTI/index.php';</script>";
            }
            else
            {
                echo "<script>alert('Invalid Credentails!'); window.location.href = 'http://localhost/HORTI/auth/login.php';</script>";
            }
        }
        else 
        {
            $showerror = "User credentials is not valid";
            header("location: http://localhost/horti/auth/login.php");
        }
    }
?>