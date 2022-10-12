<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
$conn = mysqli_connect("localhost","root","gintoki00","mydatabase_gil");

if(!$conn)
{   
die(mysqli_connect_error());
}  

for ($i=0; $i < 20; $i++){ 
$userid = rand(1,100);
$sql = "INSERT INTO mydatabase_gil.carddetail( creditcardtype, creditcardnumber, creditcardexpirationdate, useridnumber) values('".$faker->creditcardtype."','".$faker->creditcardnumber."','".$faker->creditcardexpirationdate->format('Y-m-d H:i:s')."', '".$userid."')";     
mysqli_query($conn, $sql);}

?>