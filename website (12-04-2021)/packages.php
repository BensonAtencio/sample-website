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
  width: 1200px;
  height: 600px;
  position:absolute;
  z-index: -1;
  transform: translate(30px, -850px);
}

.TextBackgroundBox2 {
  border-radius: 25px;
  background: #8d1919;
  padding: 20px;
  width: 1200px;
  height: 600px;
  position:absolute;
  z-index: -2;
  transform: translate(30px, -1500px);
}
.TextBackgroundBox3 {
  border-radius: 25px;
  background: #8d1919;
  padding: 20px;
  width: 1200px;
  height: 600px;
  position:absolute;
  z-index: -3;
  transform: translate(30px, -2010px);
}
.TextBackgroundBox4 {
  border-radius: 25px;
  background: #8d1919;
  padding: 20px;
  width: 1200px;
  height: 600px;
  position:absolute;
  z-index: -4;
  transform: translate(30px, -2540px);
}
.TextBackgroundBox5 {
  border-radius: 25px;
  background: #8d1919;
  padding: 20px;
  width: 1200px;
  height: 600px;
  position:absolute;
  z-index: -5;
  transform: translate(30px, -3030px);
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

.package1{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(100px, -200px);
  z-index: 1;
}
.package2{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(100px, -860px);
  z-index: 1;
}
.package3{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(100px, -1450px);
  z-index: 1;
}
.package4{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(100px, -1970px);
  z-index: 1;
}
.package5{
  font-family: Arial;
  font-size: 20px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(100px, -2490px);
  z-index: 1;
}
.package1Heading{
  font-family: Arial;
  font-size: 31px;
  padding: 20px;
  color: white;
  z-index: -1;
  text-shadow: 2px 2px black;
  transform: translate(700px, -80px);
  z-index: 2;
}
.package2Heading{
  font-family: Arial;
  font-size: 31px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(700px, -720px);
  z-index: -1;
}
.package3Heading{
  font-family: Arial;
  font-size: 31px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(700px, -1390px);
  z-index: -1;
}
.package4Heading{
  font-family: Arial;
  font-size: 31px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(700px, -1900px);
  z-index: -1;
}
.package5Heading{
  font-family: Arial;
  font-size: 31px;
  padding: 20px;
  color: white;
  z-index: 2;
  text-shadow: 2px 2px black;
  transform: translate(700px, -2450px);
  z-index: -1;
}
.container{
  border-radius:25px;
  width:100%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.container2{
  border-radius:25px;
  width:100%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.container3{
  border-radius:25px;
  width:100%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.container4{
  border-radius:25px;
  width:100%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.container5{
  border-radius:25px;
  width:100%;
  padding:20px;
  margin:100px auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
}
.box{
  width: 350px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box2{
  width: 350px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box3{
  width: 350px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box4{
  width: 350px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box5{
  width: 350px;
  margin:0 50px;
  box-shadow: 0 0 20px 2px rgba(0, 0, 0 .1);
  transition: 1s;
}
.box img{
  display: block;
  width: 170%;
  border-radius: 10px;
  transform: translate(80px,-840px) ;
}
.box2 img{
  display: block;
  width: 170%;
  border-radius: 10px;
  transform: translate(80px,-1460px);
}
.box3 img{
  display: block;
  width: 170%;
  border-radius: 10px;
  transform: translate(80px,-1990px);
}
.box4 img{
  display: block;
  width: 170%;
  border-radius: 10px;
  transform: translate(80px,-2525px);
}
.box5 img{
  display: block;
  width: 170%;
  border-radius: 10px;
  transform: translate(80px,-3020px);
}
</style>
</head>
<body style = "background-color:maroon">
<div class = "logoDiv"> </div> 
<div class = "Logo"> </div>

<button class ="ServicesButton" onclick="document.location='services.php'">Services</button>
<button class = "HomeButton" onclick = "document.location='homepage.php'">Home</button>
<button class  = "PackagesButton" onclick = "document.location='packages.php'"> Packages </button>
<button class = "ReservationFormButton" onclick = "document.location ='reservation.php'">Reservation Form </button>
<button class = "ContactButton" onclick = "document.location ='contact.php'">Contact </button>
<button class = "LogoutButton" onclick = "document.location ='logout.php'">Logout </button>


<p class = "PackagesHeading"> Packages </p>


<p class = "package1Heading"><strong> Food Package 1</strong></p>

<p class = "package1">
Appetizer<br>
	Fish Wrapped in Bacon<br>
	Shrimp Cocktail<br><br>

Soup<br>
	Mushroom Soup<br><br>

Salad<br>
	Caesar Salad Supreme<br><br>

Main Course<br>
	Steamed Rice<br>
	Crispy Pork belly<br>
	Chicken Teriyaki<br>
	Crispy Fish Fillet<br>
	Pork Caldereta<br><br>

Dessert<br>
	Mango sago<br>
	Leche Flan<br><br>

Drinks<br>
	Refillable Blue Lemonade<br>
	Purified Water<br><br>

</p>


<div class = "TextBackgroundBox"> </div>

<div class = "container">
    <div class = "box">   
      <img src="package1.jpeg" alt = "Event1">
    </div>
</div>


<p class = "package2Heading"><strong> Food Package 2</strong> </p>

<p class = "package2"> Appetizer<br>
	Fish Finger with Honey Mustard Sauce <br>
	Meatballs<br><br>
Soup<br>
	Potato Broccoli Soup<br><br>
Salad<br>
	Garden Fresh Salad<br><br>
Main Course<br>
	Steamed Rice<br>
	Chicken Cordon bleu<br>
	Baked Lasagna<br>
	Spicy Stir Fried Pork<br>
	Braised Beef with Pepper and Onions<br><br>
Dessert<br>
	Buko Pandan<br>
	Caramel Flan<br><br>
Drinks<br>
	Refillable Iced Tea<br>
	Purified Water<br>
</p> 
</div>
<div class = "TextBackgroundBox2"> </div>

<div class = "container2">
    <div class = "box2">   
      <img src="package2.jpeg" alt = "Event2">
    </div>
</div>

<p class = "package3Heading"><strong> Food Package 3</strong></p>

<p class = "package3">
Appetizer<br>
	Nachos with cheese sauce<br><br>

Main Course<br>
	Steamed Rice<br>
	Spaghetti<br>
	Fried Chicken<br>
	Pork Caldereta<br>
	Pork Lumpia<br><br>

Dessert<br>
	Mango sago<br>
	Leche Flan<br><br>

Drinks<br>
	Lemon Iced Tea<br>
	Purified Water<br><br>

</p>


<div class = "TextBackgroundBox3"> </div>

<div class = "container3">
    <div class = "box3">   
      <img src="package3.jpg" alt = "Event3">
    </div>
</div>

<p class = "package4Heading"><strong> Food Package 4</strong></p>

<p class = "package4">
Appetizer<br>
	Ham with Pineapple<br>
	Nachos<br><br>

Main Course<br>
	Steamed Rice<br>
	Spaghetti<br>
	Carbonara<br>
	Creamy Beef Caldereta<br>
	Pork Lumpia<br><br>

Dessert<br>
	Fruit jelly<br>
	Fruit Salad Flan<br><br>

Drinks<br>
	Soft drinks<br>
	Purified Water<br><br>

</p>


<div class = "TextBackgroundBox4"> </div>

<div class = "container4">
    <div class = "box4">   
      <img src="package4.jpg" alt = "Event4">
    </div>
</div>

<p class = "package5Heading"><strong> Food Package 5</strong></p>

<p class = "package5">
Appetizer<br>
	Potato Chips<br><br>

Main Course<br>
	Steamed Rice<br>
	Chicken cordon bleu<br>
	Pork Adobo<br>
	Pork Lumpia<br><br>

Dessert<br>
	Coffee jelly<br>
	Mango float<br><br>

Drinks<br>
	Iced Tea<br>
	Purified Water<br><br>

</p>


<div class = "TextBackgroundBox5"> </div>

<div class = "container5">
    <div class = "box5">   
      <img src="package5.jpg" alt = "Event5">
    </div>
</div>

</body>
</html>