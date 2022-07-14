<?php

session_start();

if($_SESSION['status']!="ActiveA")
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
button:hover {
	box-shadow:inset 200px 0 0 0 rgb(190, 190, 190, 0.151) ;
}

.ReservationButton {
  background-color: #8d1919;
  border: none;
  border-radius: 8px;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition: ease-out 0.3s; 
  transform: translate(1050px, -250px);
  z-index: 1;
}
.LogoutButton {
  background-color: #8d1919;
  border: none;
  border-radius: 8px;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition: ease-out 0.3s; 
  transform: translate(1050px, -250px);
  z-index: 1;
}

.BodyText{
  font-family: Montserrat;
  font-size: 15px;
  padding: 20px;
  color: white;
  z-index: 2;
  transform: translate(0px, -50px);
  z-index: 1;
}
.Headings{
  font-family: sans-serif;
  font-size: 43px;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
  color: white;
  text-shadow: 2px 2px black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  text-align: center;
  transform: translate(0px, -140px);
  border-radius: 15px;
}

.Logo{
  width: 400px;
  height: 300px;
  background-image: url('./cservizioo.png');
  background-repeat: no-repeat;
  transform: translate(40px,5px);
  position:absolute;
  top: 10px;
  left: 10px;
  z-index: 1;
}

.logoDiv{
  width: 400px;
  height: 300px;
}

.tableR{
  border-collapse: collapse;
  width: 100%;
  font-size: 25px;
  text-align: center;
}
th{
  border-radius: 10px;
  background-color: maroon;
  color: white;
}
tr{
  background-color: #maroon;
  color: #c0c0c0;
  font-size: 20px;
}
td{
  padding: 4px;
}
a{
  text-decoration: none;
  color: black;
}
a:visited{
  color: black;
}

</style>
</head>

<body style = "background-color:maroon">

    <div class = "logoDiv"> </div> 
    <div class = "Logo"> </div>

    <button class = "ReservationButton" onclick = "document.location ='adminpage.php'">Reservations </button>
    <button class = "LogoutButton" onclick = "document.location ='logout.php'">Logout </button>

    <div class="Headings">
        <p> Reservations</p>
        <div class = "BodyText">
        <table class="tableR">
        <tr><th>Full Name</th><th>Date(yyy-mm-dd)</th><th>Contact Number</th><th>Address</th><th>Service Type</th><th>Food Package</th><th>Reservation</th></tr>
        <?php
        require 'dbconnect.php';

        $sql = "SELECT * FROM reservation";
        $result = mysqli_query($conn, $sql);
        $resultC = mysqli_num_rows($result);
        if($resultC > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr>
                        <td>'.$row['Fname'].'</td>
                        <td>'.$row['Edate'].'</td>
                        <td>'.$row['Cnumber'].'</td>
                        <td>'.$row['Eadd'].'</td>
                        <td>'.$row['Etype'].'</td>
                        <td>'.$row['Revent'].'</td>
                        <td><button><a href="delete.php?id='.$row['id'].'">Cancel</a></button></td>
                    </tr>';
            }
        }
        ?>
        </table>
        </div>
    </div>

</body>
</html>