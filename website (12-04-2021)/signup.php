<?php
if(isset($_POST['signupB'])){

    require 'dbconnect.php';

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $pwdR =$_POST['pwdR'];

    if(empty($uname) || empty($pwd) || empty($pwdR)){
        header("Location: index.php?error=missingfield");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $uname)){
        header("Location: index.php?error=invalidusername");
        exit();
    }
    elseif($pwd !== $pwdR){
        header("Location: index.php?error=pwddontmatch");
        exit();
    }
    else{
        $sql = "SELECT userN FROM users WHERE userN=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: index.php");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $uname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0){
                header("Location: index.php?error=usernametaken");
                exit();
            }
            else{
                $sql = "INSERT INTO users (userN, passW) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: index.php");
                    exit();
                }
                else{
                    $hashedP = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $uname, $hashedP);
                    mysqli_stmt_execute($stmt);
                    header("Location: loginpage.php?error=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: index.php");
    exit();
}