<?php
 
if(isset($_POST['submitB'])){
 
    require 'dbconnect.php';
    
    $Fname = $_POST['Fname'];
    $Edate = $_POST['Edate'];
    $Cnumber = $_POST['Cnumber'];
    $Eadd = $_POST['Eadd'];
    $Etype = $_POST['Etype'];
    $Revent = $_POST['Revent'];
 
    if(empty($Fname) || empty($Edate) || empty($Cnumber) || empty($Eadd) || empty($Revent)){
        header("Location: reservation.php?error=missingfield");
        exit();
        }

    else{
        $query = "INSERT INTO reservation (Fname, Edate, Cnumber, Eadd, Etype, Revent) VALUES ('$Fname', '$Edate', '$Cnumber', '$Eadd', '$Etype', '$Revent')";
 
        $run = mysqli_query($conn, $query);
 
            if($run){
                header("Location: contact.php?form=success");
            }
 
    }
}