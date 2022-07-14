<?php
session_start();

if($_SESSION['status']!="Active")
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
.ServicesButton {
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
  transform: translate(660px, -250px);
  z-index: 1;
}

.PackagesButton {
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
  transform: translate(560px, -250px);
  z-index: 1;
}
.HomeButton {
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
  transform: translate(440px, -250px);
  z-index: 1;
}

.ReservationFormButton {
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
  transform: translate(560px, -250px);
  z-index: 1;
}

.ContactButton {
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
  transform: translate(560px, -250px);
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
  transform: translate(560px, -250px);
  z-index: 1;
}

.BodyText{
  font-family: Montserrat;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(-10px, -50px);
  z-index: 1;
}
.Headings{
  font-family: sans-serif;
  font-size: 35px;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
  color: white;
  text-shadow: 2px 2px black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  text-align: center;
  transform: translate(0px, -130px);
  padding-top: 9px;
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

</style>
</head>
<body style = "background-color:maroon">
<div class = "logoDiv"> </div> 
<div class = "Logo"> </div>


<button class ="ServicesButton" onclick="document.location='services.php'">Services</button>
<button class = "HomeButton" onclick = "document.location='homepage.php'">Home</button>
<button class  = "PackagesButton" onclick = "document.location ='packages.php'"> Packages </button>
<button class = "ReservationFormButton" onclick = "document.location ='reservation.php'">Reservation Form </button>
<button class = "ContactButton" onclick = "document.location ='contact.php'">Contact </button>
<button class = "LogoutButton" onclick = "document.location ='logout.php'">Logout </button>

<div class="Headings">
  <?php
        if(isset($_GET["form"])){
            if($_GET["form"] == "success"){
                echo "<script type='text/javascript'> alert('Reservation Complete!') </script>";
            }
        }
    ?>
  <p> For More Information Contact us at: </p><br>
  <p class = "BodyText">
    Contact Number: 09950492391<br><br>
    Email: cservizio.catering@gmail.com</p> 
</div>

</body>
</html>