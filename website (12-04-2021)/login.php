<?php
if(isset($_POST['loginB'])){

    require 'dbconnect.php';

    $username = $_POST['uname'];
    $pass = $_POST['pwd'];

    if(empty($username) || empty($pass)){
        header("Location: loginpage.php?error=missingfield");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userN=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: loginpage.php");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdC = password_verify($pass, $row['passW']);
                if($pwdC == false){
                    header("Location: loginpage.php?error=wrongpwd");
                    exit();
                }
                elseif($pwdC == true){
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['uname'] = $row['userN'];
                    $_SESSION['status'] = "Active";

                    header("Location: homepage.php?login=success");
                    exit();
                }
                else{
                    header("Location: loginpage.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: loginpage.php?error=nouser");
                exit();
            }
        }
    }

}
else{
    header("Location: loginpage.php?");
    exit();
}