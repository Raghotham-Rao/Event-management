<?php
    session_start();
    include 'db.php';
    if(isset($_POST["uname"]) && isset($_POST["pass"])){
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        if(isset($_POST["email"])){
            if(strlen($_POST["email"]) > 0){
                $conn = OpenCon();
                $r = rand(0, 100);
                $un = $username.$r;
                $query = 'insert into users(uname, fname, pass, email) values("'.$un.'", "'.$username.'", "'.$password.'", "'.$_POST["email"].'")';
                $conn->query($query);
                $_SESSION["curr_user"] = $un;
                $conn->close();
                header("Location: welcome_get1.php");
            }
            else{
                $conn = OpenCon();
                $query = 'select uname from users where fname="'.$username.'" and pass="'.$password.'"';
                $result = $conn->query($query);
                if($result->num_rows > 0){
                    $_SESSION["curr_user"] = $result->fetch_assoc()["uname"];
                    $_SESSION["invalid_user"] = 0;
                    header("Location: welcome_get1.php");
                }
                else{
                    $_SESSION["invalid_user"] = 1;
                    header("Location: ../index.php");
                }
                $conn->close();
            }
        }
    }
?>