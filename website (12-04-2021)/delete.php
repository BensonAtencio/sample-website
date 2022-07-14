<?php

    require 'dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM reservation WHERE id = $id ";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: adminpage.php");
        }
    }