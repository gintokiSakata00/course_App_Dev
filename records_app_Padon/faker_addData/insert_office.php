<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
$conn = mysqli_connect("localhost","root","gintoki00","record_app");

if(!$conn)
{   
die(mysqli_connect_error());
}  

// id int AI PK 
// name varchar(45) 
// contactnum varchar(45) 
// email varchar(45) 
// address varchar(45) 
// city varchar(45) 
// country varchar(45) 
// postal int

for ($i=0; $i < 200; $i++){  
//table code below to generate
$department_name = array("IT Department", "Full Stack Department", "Database Department","Mobile Dev Department","Data Analyst Department");
$random = rand(0,4);
$sql = "INSERT INTO record_app.office(name, contactnum, email, address, city, country, postal)  values('".$department_name[$random]."','".$faker->phoneNumber."','".$faker->email."', '".$faker->address."', '".$faker->city."', '".$faker->country."', '".$faker->postcode."')";     


mysqli_query($conn, $sql);}

?>