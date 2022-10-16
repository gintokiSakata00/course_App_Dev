<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
$conn = mysqli_connect("localhost","root","gintoki00","record_app");

if(!$conn)
{   
die(mysqli_connect_error());
}  

// id int AI PK 
// employee_id int 
// office_id int 
// datelog datetime 
// action enum('IN','OU') 
// remarks varchar(100) 
// documentcode varchar(45)
// date($format = 'Y-m-d', $max = 'now')
for ($i=0; $i < 200; $i++){  
$office_id_num = rand(1,20);
$employee_id = rand(1,20);
$document_code = rand(100,110);
$action_enum = array("IN","OUT");
$remark = array("For approval","Complete");
$rand_action = rand(0,1);
$sql = "INSERT INTO record_app.transaction(employee_id,office_id,datelog,action, remarks,documentcode)  
values('".$employee_id."','".$office_id_num."', '".$faker->date('Y-m-d h:m:s')."','".$action_enum[$rand_action]."','".$remark[$rand_action]."','".$document_code."')" ;     

mysqli_query($conn, $sql);}

?>