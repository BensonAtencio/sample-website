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
  width: 800px;
  height: 400px;
  position:absolute;
  z-index: -1;
  transform: translate(20px, -200px);
}
.PackagesHeading{
  font-family: 'Brush Script MT', cursive;
  font-size: 70px;
  color: white;
  position :absolute;
  text-shadow: 2px 2px black;
  transform: translate(500px,-280px);
  z-index: -1;
}
.package{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(40px, -185px);
  z-index: 1;
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
.container2{
  border-radius:25px;
  width:90%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
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

<p class="PackagesHeading"> Birthday Services </p>

<div class = "container">

    <p class="package"> 
    	Tiffany Chairs with Cushions for the Guests<br>
		Full Buffet Set - Up<br>
    	Fondant Cake (3 layer)<br>
    	Stylish backdrop for the debutante<br>
    	Classy Dining Setup with Chinaware, Glassware & Silverware<br>
    	Special floral centerpiece for the presidential or head table<br>
    	Elegant floral centerpiece for the buffet table<br>
    	All tables dressed in floor length tablecloth, set with table napkins<br>
    	Table linens in striking colors of your choice<br>
    	Balloon Decors<br>
    	Chocolate fountain with Sticks and Dips<br>
    	Sound System and Lights<br>
    	Gift and cake tables<br>
    	Well-Trained Uniformed Waiters<br>

    </p>

    <div class = "TextBackgroundBox"> </div>

</div>

<div class="container2"> </div>



</body>
</html>