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
<link rel="stylesheet" type="text/css" href="styleR.css">
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
  transform: translate(668px, -142px);
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
    transform: translate(568px, -142px);
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
    transform: translate(448px, -142px);
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
    transform: translate(568px, -142px);
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
    transform: translate(568px, -142px);
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
    transform: translate(568px, -142px);
    z-index: 1;
}

.Logo{
  width: 400px;
  height: 200px;
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
    height: 200px;
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

<div class="header">
    <h3>Customer Reservation Form</h3>
</div>
  
<form method="post" action="formH.php">
    <div class="input">
      <label>Full Name:</label>
      <input type="text" name="Fname" required>
    </div>
  
    <div class="input">
      <label>Date of Event:</label>
      <input type="date" name="Edate" required>
    </div>
  
    <div class="input">
      <label>Contact number:</label>
      <input type="text" name="Cnumber" required>
    </div>
  
  <label>Type of Service: </label>
          <select name="Etype" required>
              <optgroup>
                  <option> Services </option>
                  <option value="Wedding"> Wedding </option>
                  <option value="Birthday"> Birthday </option>
                  <option value="CasCeleb"> Casual </option>
              </optgroup>
          </select><br>
  <label>Food package: </label>
          <select name="Revent" required>
              <optgroup>
                  <option> Packages </option>
                  <option value="Package 1"> Food Package 1</option>
                  <option value="Package 2"> Food Package 2</option>
                  <option value="Package 3"> Food Package 3</option>
                  <option value="Package 4"> Food Package 4</option>
                  <option value="Package 5"> Food Package 5</option>
              </optgroup>
          </select>		
  
  <div class="input">
      <label>Event Address:</label>
      <input type="text" name="Eadd" required>
    </div>

      <input type="submit" class="btn" name="submitB">
</form>
    <div class="container"> </div>

</body>
</html>