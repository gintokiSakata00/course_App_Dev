<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
$conn = mysqli_connect("localhost","root","gintoki00","record_app");

if(!$conn)
{   
die(mysqli_connect_error());
}  

// lastname varchar(45) 
// firstname varchar(45) 
// office_id int 
// adress varchar(100)

for ($i=0; $i < 200; $i++){  
$office_id_num = rand(1,20);
$sql = "INSERT INTO record_app.employee(lastname,firstname,office_id,address)  
values('".$faker->lastName."','".$faker->firstName."', '".$office_id_num."', '".$faker->address."')";     

mysqli_query($conn, $sql);}

?>