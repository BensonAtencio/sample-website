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

.TextBackgroundBox {
  border-radius: 25px;
  background: #8d1919;
  padding: 20px;
  width: 1000px;
  height: 400px;
  position:absolute;
  z-index: -1;
  transform: translate(10px, -200px);
}
.PackagesHeading{
  font-family: 'Brush Script MT', cursive;
  font-size: 75px;
  color: white;
  position :absolute;
  text-shadow: 2px 2px black;
  transform: translate(575px,-290px);
  z-index: -1;
}
.container{
  border-radius:25px;
  width:90%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.box1{
  width: 250px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box2{
  width: 250px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box3{
  width: 250px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box1 img{
  display: block;
  width: 100%;
  border-radius: 10px;
  transform: translate(10px,-170px) ;
}
.box2 img{
  display: block;
  width: 100%;
  border-radius: 10px;
  transform: translate(10px,-170px) ;
}
.box3 img{
  display: block;
  width: 100%;
  border-radius: 10px;
  transform: translate(10px,-170px) ;
}
.box1:hover{
  transform:scale(1.3);
  z-index:2;
}
.box2:hover{
  transform:scale(1.3);
  z-index:2;
}
.box3:hover{
  transform:scale(1.3);
  z-index:2;
}
.p{
  font-family:arial;
  font-size: 50px;
}

</style>
</head>

<body style="background-color:maroon;">

<div class = "logoDiv"> </div> 
<div class = "Logo"> </div>

<button class ="ServicesButton" onclick="document.location='services.php'">Services</button>
<button class = "HomeButton" onclick = "document.location='homepage.php'">Home</button>
<button class  = "PackagesButton" onclick = "document.location ='packages.php'"> Packages </button>
<button class = "ReservationFormButton" onclick = "document.location ='reservation.php'">Reservation Form </button>
<button class = "ContactButton" onclick = "document.location ='contact.php'">Contact </button>
<button class = "LogoutButton" onclick = "document.location ='logout.php'">Logout </button>

<p class="PackagesHeading"> Services </p>

<div class = "container">
    <div class = "box1">   
      <a href="weddingpage.php"> <img src="wed.jpg" alt = "weddinng"> </a>
   
    </div>
    <div class = "box2">   
      <a href="birthdaypage.php"> <img src="birthd.jpg" alt = "birthday"> </a>
    </div>
    <div class = "box3">
      <a href="casualpage.php"> <img src = "celeb.jpg" alt ="  CasualCelebration"> </a>
    </div>  

    <div class = "TextBackgroundBox"> </div>

</div>




</body>
</html>